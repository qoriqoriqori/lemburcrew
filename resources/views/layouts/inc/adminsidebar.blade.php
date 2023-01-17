<div class="sidebar" data-color="orange" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="{{ url('dashboard') }}" class="simple-text logo-normal" style="font-weight: bold; color: #EA9A00;">
          LEMBUR CREW <br>(ADMIN)
        </a>
    </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
          <li class="nav-item {{ Request::is('orders') ? 'active':'' }}">
            <a class="nav-link" href="{{ url('orders') }}">
              <i class="material-icons">receipt_long</i>
              <p>Pangajuan Lembur</p>
            </a>
          </li>

          <li class="nav-item {{ Request::is('users') ? 'active':'' }}">
            <a class="nav-link" href="{{ url('users') }}">
                <i class="material-icons">people</i>
              <p>Data Karyawan</p>
            </a>
          </li>

        </ul>
      </div>
    </div>