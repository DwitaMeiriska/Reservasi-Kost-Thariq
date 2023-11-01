
 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('landing/assets/') }}img/logo.png" alt=""> -->
        <h1>KOST THARIQ<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('index')  }}" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>Tipe Kamar</span> <i
            class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
          <li><a href="#">Kamar A</a></li>
          <li><a href="#">kamar B</a></li>
          <li><a href="#">kamar C</a></li>
        </ul>
      </li>
          <li><a href="">Riwayat Transaksi</a></li>
          <li><a href="{{ route('portofolio.index')  }}">Portofolio</a></li>
          <li><a href="{{ route('about.index')  }}">Tentang Kami</a></li>
          <li><a href="{{ route('contact.index')  }}">Contact</a></li>
          <li><a href="{{ route('home')  }}">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

