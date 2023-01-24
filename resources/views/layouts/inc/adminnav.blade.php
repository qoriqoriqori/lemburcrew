<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent"  >
  <div class="container-fluid" >
    <div class="navbar-wrapper">
      <!-- <h2 class="navbar-brand" style="font-weight: bold;">Dashboard<h2> -->
    </div>
      
    <div class=" justify-content-end">
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #555555">
        <i class="material-icons">person</i> {{ __(' Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </div>
  </div>
</nav>
<!-- End Navbar -->