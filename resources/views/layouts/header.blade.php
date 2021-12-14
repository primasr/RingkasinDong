  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('homepage') }}" class="logo d-flex align-items-center">
        <!-- <img src="{{ asset(' tekno/assets/img/logo.png') }}" alt=""> -->
        <span>RingkasinDong</span>
      </a>

      <nav id="navbar" class="navbar">

        <!-- Right Side Of Navbar -->
        <ul>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('panduan_layanan') }}">{{ __('Panduan Layanan') }}</a>
            </li>

          <!-- Authentication Links -->
          @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif              
          @else

              <li class="nav-item">
                  <a class="nav-link" href="{{ route('layanan', ['id' => Auth::user()->id]) }}">{{ __('Layanan') }}</a>
              </li>

              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->email }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('profile', ['id' => Auth::user()->id]) }}">Profile</a>
                      <a class="dropdown-item" href="{{ route('topup', ['id' => Auth::user()->id]) }}">Top Up Koin</a>
                      {{-- <a class="dropdown-item" href="{{ route('history', ['id' => Auth::user()->id]) }}">History</a> --}}

                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->