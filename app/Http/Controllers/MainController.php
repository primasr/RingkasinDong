<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Codes;
use App\Models\Files;
use App\Models\History;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class MainController extends Controller
{
    // History
    public function history(){
        return view('pages/history');
    }

    // Show Profile
    public function profile($id){
        $profile = User::where('id',$id)->first();
        return view('pages/profile', compact('profile'));        
    }

    // Update Profile
    public function edit_profile($id, Request $request){        

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required'],         
            'phone' => ['required'],          
        ]);

        $current_time = Carbon::now();        
        
        $user = User::where('id',$id)->first();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->updated_at = $current_time->toDateTimeString();
        $user->save();  
                
        return redirect()->route('profile', ['id' => $id]);

    }

    // Show TopUp
    public function topup(){
        return view('pages/topup');
    }    

    // Topup Koin
    public function topup_koin($id, Request $request){
        $this->validate($request, [
            'kode' => ['required']          
        ]);

        $codes = Codes::where('code', '=', $request->input('kode'))->first();

        if($codes){            
            if ($codes->is_used == 1 or $codes->available_until < Carbon::now()->toDateTimeString()) {
                return view('errors.expired_coin');
            }

            $codes->is_used = 1;
            $codes->save(); 

            $user = User::where('id',$id)->first();
            $user->koin = $user->koin + $codes->value;
            $user->save(); 
        }

        return redirect()->route('profile', ['id' => $id]);
    }

    // Layanan 
    public function layanan($id){

        $files = Files::where('user_id',$id)->get();
        return view('pages/layanan', compact('files'));
    }

    // Upload Form
    public function upload(Request $request){
        $this->validate($request, [            
            'filename' => ['required',function ($attribute, $value, $fail) {
                if (!in_array($value->getClientOriginalExtension(), ['csv'])) {
                    $fail('Incorrect :attribute type choose.');
                }
            }]
        ]);

        $file = $request->file('filename');

        $file_extension = $file->getClientOriginalExtension();
        if ($file_extension != 'csv') {
            return view('errors.incorrect_type');
        }
    
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'files/'.Auth::user()->email;
        
        if(!File::isDirectory($tujuan_upload)){
            File::makeDirectory($tujuan_upload);
        }

        $file->move($tujuan_upload,$nama_file);

        Files::create([
            'filename' => $nama_file,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->back();
    }

    // Show Layanin Ringkasin
    public function layanan_ringkasin($id, Request $request){
        $this->validate($request, [
            'name_event' => ['required', 'string', 'max:255'],
            'institusi' => ['required', 'string', 'max:255']
        ]);

        $user = User::where('id',$id)->first();

        if ($user->koin < 20000) {
            return view('errors.koin_gacukup');
        }

        $user->koin = $user->koin - 20000;
        $user->save();

        History::create([
            'user_id' => $id,
            'name_event' => $request->input('name_event'),
            'institusi' => $request->input('institusi')
        ]);

        return view('pages.after_layanan');
    }
}
