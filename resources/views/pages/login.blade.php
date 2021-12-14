@extends('layouts.main')

@section('title','Log in')

@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container-fluid centered">
      <div class="row">
        <div class="col-lg-4 mx-auto">
          <div class="card-form">
            <div class="card-content">
              <div class="row center-item">
                <div class="my-4" style="text-align: center;">
                  <h4>Masuk</h4>
                </div>
                <div class="col-11 mx-auto">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label label-rounded">Email</label>
                      <input type="email" class="form-control form-rounded input-field" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label label-rounded">Password</label>
                      <input type="password" class="form-control form-rounded input-field" name="password" placeholder="Password">
                    </div>
                    <div class="mb-3">
                      <input class="form-control form-rounded btn-primary" type="submit" name="submit" value="Login">
                    </div>
                    <div style="text-align: center;">
                      <p><small>Belum punya akun? <u><a href="{{ route('register') }}">Buat akun</a></u></small></p>
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