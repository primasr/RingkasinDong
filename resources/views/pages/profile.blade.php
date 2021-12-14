@extends('layouts.main')

@section('title', 'Profile')

@section('content')
<style>
    .layanan {
      padding: 0 0 30px 0;
      font-size: 14px;
    }
    .layanan .footer-newsletter {
      padding: 50px 0;
    }
    .layanan .footer-newsletter h1 {
      font-size: 24px;
      margin: 0 0 10px 0;
      padding: 0;
      line-height: 1;
      font-weight: 700;
      color: #012970;
    }
    .layanan .footer-newsletter form {
      margin-top: 20px;
      padding: 6px 10px;
      position: relative;
      border-radius: 4px;
    }
    .layanan .footer-newsletter form input[type="email"] {
      border: 1;
      padding: 8px;
      width: calc(100% - 140px);
    }
    .layanan .footer-newsletter form input[type="submit"] {
      /* position: absolute; */
      background: none;
      font-size: 16px;
      background: #4154f1;
      color: #fff;
      transition: 0.3s;
      border-radius: 50px;
    }
    body {
      font-family: "Open Sans", sans-serif;
      color: #444444;
    }
  </style>

  <!-- ======= Hero Section ======= -->
  <section id="profile" class="hero align-items-center">

    <div class="layanan">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
              <h1 data-aos="fade-up">Profile</h1>
              <h2 data-aos="fade-up">Koin Anda: <span style="color: green">{{ number_format($profile->koin, 0) }}</span></h2>
            </div>
            <div class="row">
              {{-- <div class="col-lg-4 text-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('tekno/assets/img/prof.png') }}" class="img-fluid mt-4" alt="">
              </div> --}}
              <div class="col-12 align-items-center" data-aos="fade-up" data-aos-delay="200">
                <form method="POST" action="{{ route('edit_profile', ['id' => $profile->id]) }}" enctype="multipart/form-data">
                  @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control input-field" id="name" name="name" value="{{ $profile->name }}">
                    </div>
                    <div class="row">
                      <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control input-field" id="email" name="email" value="{{ $profile->email }}">
                      </div>
                      <div class="col-lg-6 mb-3">
                        <label for="phone" class="form-label">No. Telepon</label>
                        <input type="text" class="form-control input-field" id="phone" name="phone" value="{{ $profile->phone }}">
                      </div>
                    </div>
                    {{-- <div class="row">
                      <div class="col-lg-6 mb-3">
                        <label for="newpassword" class="form-label">New Password</label>
                        <input type="text" class="form-control input-field" id="nik" placeholder="">
                      </div>
                      <div class="col-lg-6 mb-3">
                        <label for="currentpassword" class="form-label">Current Password</label>
                        <input type="text" class="form-control input-field" id="nik" placeholder="">
                      </div>
                    </div> --}}
                    <div class="row px-3">
                      <input class="form-rounded button-yellow py-2" type="submit" name="submit" value="Update">
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->
@endsection