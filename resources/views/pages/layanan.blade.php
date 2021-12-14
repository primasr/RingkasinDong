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
              <h1 data-aos="fade-up">Layanan</h1>
              <p data-aos="fade-up">Pastikan Data Diri pada <a href="{{ route('profile', ['id' => Auth::user()->id]) }}">Profile</a> telah benar</p>
              <p data-aos="fade-up">Pastikan juga telah memiliki <a href="{{ route('profile', ['id' => Auth::user()->id]) }}">Koin</a> yang mencukupi </p>
            </div>
            <div class="row">
              <div class="col-12 align-items-center" data-aos="fade-up" data-aos-delay="200">
                <form method="POST" action="{{ route('layanan_ringkasin', ['id' => Auth::user()->id]) }}">
                  @csrf
                    <div class="row">
                      <div class="col-lg-6 mb-3">
                        <label for="name_event" class="form-label">Nama Event</label>
                        <input type="text" class="form-control input-field" id="name_event" name="name_event">
                      </div>
                      <div class="col-lg-6 mb-3">
                        <label for="institusi" class="form-label">Institusi</label>
                        <input type="text" class="form-control input-field" id="institusi" name="institusi">
                      </div>
                    </div>
                    <div class="row px-3">
                      <label for="submit_xxx" class="form-label">Note: 20.000 Koin/layanan</label>
                      <input class="form-rounded button-yellow py-2" type="submit" id="submit_xxx" name="submit" value="Kirim Data">
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