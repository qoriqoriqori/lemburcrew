<nav class="navbar navbar-expand-lg" style="background-color: #FCF6EB;">
  <div class="container">
    <a class="navbar-brand" style="color: #EA9A00; font-weight: bold" href="{{ url('/') }}">LEMBUR CREW</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link active" style="color: #333333;" aria-current="page" href="{{ url('/') }}">Beranda</a>
        </li>

        @guest
          @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" style="color: #333333" href="{{ route('login') }}">{{_('Login')}}</a>
            </li>
          @endif

          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" style="color: #333333" href="{{ route('register') }}">{{_('Register')}}</a>
            </li>
          @endif
        @else
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" style="color: #333333" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                    <a class="dropdown-item" href="{{ url('my-orders') }}">
                      Riwayat
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('my-profile') }}">
                        Data Diri
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Keluar') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
          </li>
        @endguest

      </ul>
    </div>
  </div>
</nav>

