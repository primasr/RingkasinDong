@extends('layouts.main')

@section('title', 'Top Up Koin')

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
      background: #fff;
      padding: 6px 10px;
      position: relative;
      border-radius: 4px;
      border: 1px solid #e1ecff;
    }
    .layanan .footer-newsletter form input[type="text"] {
      border: 0;
      padding: 8px;
      /* width: calc(100% - 140px); */
    }
    .layanan .footer-newsletter form input[type="submit"] {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      border: 0;
      background: none;
      font-size: 16px;
      padding: 0 30px;
      margin: 3px;
      background: #4154f1;
      color: #fff;
      transition: 0.3s;
      border-radius: 4px;
    }
    body {
      font-family: "Open Sans", sans-serif;
      color: #444444;
    }
    .upload{
      padding-top: 10px;
      padding-bottom: 10px;
      background: none;
      font-size: 16px;
      background: #4154f1;
      color: #fff;
      transition: 0.3s;
      border-radius: 10px;
    }
  </style>

  <!-- ======= Hero Section ======= -->
  <section id="layanan" class="hero align-items-center">

    <div class="layanan">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 text-center mb-5">
              <h1 data-aos="fade-up">Layanan</h1>
              <p data-aos="fade-up">Top Up Koin dengan Memasukkan Kode</p>

              <p data-aos="fade-up"><i>Lakukan pembelian koin dengan menghubungi nomor berikut: <a href="https://wa.me/6285232414072">6285232414072</a></i></p>
            </div>
            <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="200">
              <form method="POST" action="{{ route('topup_koin', ['id' => Auth::user()->id]) }}">
                @csrf
                <div class="row">
                  <div class="col-lg-10">
                    <input type="text" class="form-control input-field" id="kode" name="kode" placeholder="Inputkan kode">
                  </div>
                  <div class="col-lg-2">
                    <input class="form-rounded button-yellow" type="submit" name="submit" value="Submit">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

@endsection