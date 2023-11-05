<body class="hold-transition sidebar-mini">
    <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          {{-- </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('data') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li> --}}
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ url('index3.html') }}" class="brand-link">
          <img src="{{ asset('assets/templates/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('assets/templates/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                  <li class="nav-item">
                    <a href="/home" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>dashboard</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/kost" class="nav-link">
                      <i class="nav-icon fas fa-users"></i>
                      <p>Data Kos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('data')}}" class="nav-link">
                      <i class="nav-icon fas fa-user"></i>
                      <p>rincian(data)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('data')}}" class="nav-link">
                      <i class="nav-icon fas fa-user"></i>
                      <p>manajemen data kos</p>
                    </a>
                  </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
               <!-- <h1 class="m-0">{{ $title ?? '' }}</h1>-->
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                  <li class="breadcrumb-item active">{{ $title ?? '' }}</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <!-- Your content here -->
            @yield('content')
            <div class="col-md-26 col-26">
                <div class="card">
                    <div class="bg-white py-4 card-header">
                        <h4 class="mb-0">Daftar Penyewa</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama Penyewa</th>
                                    <th>Tipe Kamar</th>
                                    <th>Tingkat Kemajuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3 lh-1">
                                                <h5 class="mb-1"><a class="text-inherit" href="/#">Dropbox Design System</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        Medium
                                    </td>
                                    <td class="align-middle">
                                        34%
                                    </td>
                                </tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3 lh-1">
                                                <h5 class="mb-1"><a class="text-inherit" href="/#">Dropbox Design System</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        Medium
                                    </td>
                                    <td class="align-middle">
                                        34%
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->




      <!-- Footer -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b></b>
        </div>
        <strong> &copy;  <a href="https://adminlte.io"></a>.</strong>
      </footer>
      <!-- /.footer -->

    </div>
    <!-- /.wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/templates/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/templates/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables & Plugins -->
    <script src="{{ asset('assets/templates/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/templates/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/templates/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/templates/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/templates/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script
