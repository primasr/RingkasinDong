@extends('layouts.main')

@section('title', 'Panduan Layanan')

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
            <h1 data-aos="fade-up">Panduan Layanan</h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 mb-5">
            <ol data-aos="fade-up"> 
                <li>
                    <div>
                        <p>Pastikan Koin mencukupi untuk menggunakan Layanan. Top Up koin dapat diakses dibagian navbar Profile</p>
                        <img src="https://media.discordapp.net/attachments/854638984004239380/920414253826060288/unknown.png" alt="">
                    </div>                    
                </li>
                <li>
                    <div>
                        <p>Pastikan data diri sudah benar untuk memudahkan proses konfirmasi</p>
                    </div>                    
                </li>
                <li>
                    <div>
                        <p>Pada fitur <i>Layanan</i>, akan diminta memasukkan 2 input. Yaitu, Nama Event dan Asal Institusi. Lalu, tekan tombol <i>Kirim Data</i></p>
                    </div>                    
                </li>
                <li>
                    <div>
                        <p>Setelah melakukan pengiriman, Anda akan diminta menunggu selama 1x24 jam untuk menerima informasi melalui email</p>
                    </div>                    
                </li>
                <li>
                    <div>
                        <p>Jika informasi sudah masuk, Anda akan menerima sebuah undangan untuk mengakses sebuah file Google Colab</p>
                        <img src="https://media.discordapp.net/attachments/854638984004239380/920413441842372678/unknown.png" width="400px" height="200px" alt="">
                    </div>                    
                </li>
                <li>
                    <div>
                        <p>Ikuti langkah-langkah yang terdapat didalam file Google Tersebut untuk menggunakan layanan</p>
                    </div>                    
                </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- End Hero -->

@endsection