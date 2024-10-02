<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ env('APP_NAME') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Backend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('Backend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('Backend/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">{{ env('APP_NAME') }}</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    {{-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar --> --}}

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            {{-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->first_name ?? 'Admin' }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- Sidebar -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        {{-- <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#usersCollapse">
                <i class="bi bi-grid-3x3"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="usersCollapse" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li><a href="{{ url('users') }}"><i class="bi bi-circle"></i><span>All User</span></a></li>
                <li><a href="{{ url('add-user') }}"><i class="bi bi-circle"></i><span>Create User</span></a></li>
                <li><a href="{{ url('trashed-users') }}"><i class="bi bi-circle"></i><span>Trash User</span></a></li>
            </ul>
        </li>

        <!-- Payments Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#paymentsCollapse">
                <i class="bi bi-grid-3x3"></i><span>Payment Methods</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="paymentsCollapse" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li><a href="{{ url('payments') }}"><i class="bi bi-circle"></i><span>All Payment Method</span></a></li>
            </ul>
        </li><!-- End Payments Nav -->

        <!-- Cities Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#citiesCollapse">
                <i class="bi bi-grid-3x3"></i><span>Cities</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="citiesCollapse" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li><a href="{{ url('cities') }}"><i class="bi bi-circle"></i><span>All City</span></a></li>
            </ul>
        </li><!-- End Cities Nav -->

        <!-- Ads Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#adsCollapse">
                <i class="bi bi-grid-3x3"></i><span>Ads</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="adsCollapse" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li><a href="{{ url('ads') }}"><i class="bi bi-circle"></i><span>All Ad</span></a></li>
                <li>
                    <a href="{{ url('ads?publication_status=pending') }}">
                        <i class="bi bi-circle"></i><span>Pending Ads</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('ads?ads_listing_payment_status=waiting_for_approvel') }}">
                        <i class="bi bi-circle"></i><span>Waiting for Approvel</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('ads?ads_listing_type=gold') }}">
                        <i class="bi bi-circle"></i><span>Gold Ads</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('ads?ads_listing_type=free') }}">
                        <i class="bi bi-circle"></i><span>Free Ads</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Ads Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#settingsCollapse">
                <i class="bi bi-grid-3x3"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="settingsCollapse" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li><a href="{{ url('add-setting') }}"><i class="bi bi-circle"></i><span>Create Setting</span></a></li>
                <li><a href="{{ url('settings') }}"><i class="bi bi-circle"></i><span>All Setting</span></a></li>
            </ul>
        </li>

    </ul>
</aside>

    <!-- Ads Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#settings" data-bs-toggle="collapse" href="#">
        <i class="bi bi-grid-3x3"></i><span>Ads</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="settings" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ url('ads') }}">
                    <i class="bi bi-circle"></i><span>All Ads</span>
                </a>
            </li>

            <li>
                <a href="{{ url('ads?publication_status=pending') }}">
                    <i class="bi bi-circle"></i><span>Pending Ads</span>
                </a>
            </li>

            <li>
                <a href="{{ url('ads?ads_listing_payment_status=waiting_for_approvel') }}">
                    <i class="bi bi-circle"></i><span>Waiting for Approvel</span>
                </a>
            </li>
        </ul>
    </li><!-- End Ads Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>{{ env('APP_NAME') }}</span></strong>. All Rights Reserved
    </div>
    {{-- <div class="credits">
      Designed by <a href="#">BootstrapMade</a>
    </div> --}}
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/php-email-form/validate.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('Backend/assets/js/main.js') }}"></script>

</body>

</html>
