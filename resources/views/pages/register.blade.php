@extends('layouts.main')

@section('title', 'Register')

@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container-fluid centered">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="card-form">
            <div class="card-content">
              <div class="row center-item">
                <div class="my-4" style="text-align: center;">
                  <h4>Registrasi</h4>
                </div>
                <div class="col-10 mx-auto">
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                      <div class="col mb-1">
                        <label for="email" class="form-label label-rounded">Email</label>
                        <input type="email" class="form-control form-rounded input-field" id="email" name="email" placeholder="Masukkan Email">
                      </div>
                      <div class="col mb-1">
                        <label for="phone" class="form-label label-rounded">No. Telpon</label>
                        <input type="text" class="form-control form-rounded input-field" id="phone" name="phone" placeholder="Masukkan Nomor Telpon">
                      </div>
                    </div>
                    <div class="col mb-1">
                      <label for="name" class="form-label label-rounded">Nama Lengkap</label>
                      <input type="text" class="form-control form-rounded input-field" id="name" name="name" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="row">
                      <div class="col mb-1">
                        <label for="password" class="form-label label-rounded">Kata Sandi</label>
                        <input type="password" class="form-control form-rounded input-field" id="password" name="password" placeholder="Masukkan Kata Sandi">
                      </div>
                    </div>
                    <div class="row">                        
                      <div class="col mb-1">
                        <label for="password_confirmation" class="form-label label-rounded">Verifikasi Kata Sandi</label>
                        <input type="password" class="form-control form-rounded input-field" id="password_confirmation" name="password_confirmation" placeholder="Ulangi Kata Sandi">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-1">
                        <div style="font-family: inter; font-size: 12px;">
                          <ul>
                            <li>
                              <p>password terdiri dari minimal 8 karakter yang berisi huruf besar(A-Z), huruf kecil (a-z), dan angka</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <input class="form-control form-rounded btn-primary" type="submit" name="submit" value="Register">
                      {{-- <button type="submit" name="button" class="form-control form-rounded btn-primary">{{ __('Register') }}</button> --}}
                    </div>
                    <div style="text-align: center;">
                      <p><small>Sudah punya akun? <u><a href="{{ route('login') }}">Masuk</a></u></small></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

  </section><!-- End Hero -->
@endsection