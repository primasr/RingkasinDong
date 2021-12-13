@extends('layouts.main')

@section('title', 'History Layanan')

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
  <section id="history" class="hero align-items-center">

    <div class="layanan">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
              <h1 class="mb-5" data-aos="fade-up">Riwayat Ringkasan</h1>
            </div>
            <div class="px-5">
                <div class="data-user"  data-aos="fade-up" data-aos-delay="200">
                    <table class="table" id="myTable-produksi">
                      <thead class="text-center">
                        <tr class="bg-green">
                          <th scope="col-3">No</th>
                          <th scope="col-4">Tanggal</th>
                          <th scope="col-4">Kegiatan / Event</th>
                          <th scope="col-1">Keterangan</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <tr>
                          <th>1</th>
                          <td>Januari</td>
                          <td>ARA 2021</td>
                          <td><button class="btn btn-warning" type="submit"><a href="#" style="text-decoration: none; color: white;">Info Detail</a></button></td>
                        </tr>
                        <tr>
                          <th>2</th>
                          <td>Januari</td>
                          <td>ICONS</td>
                          <td><button class="btn btn-warning" type="submit"><a href="#" style="text-decoration: none; color: white;">Info Detail</a></button></td>
                        </tr>
                        <tr>
                          <th>3</th>
                          <td>Februari</td>
                          <td>Scematic</td>
                          <td><button class="btn btn-warning" type="submit"><a href="#" style="text-decoration: none; color: white;">Info Detail</a></button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->
@endsection