<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manajemen Perpustakaan</title>

  <!-- SB Admin 2 CSS -->
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">

<div id="wrapper">
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('buku.index') }}">
      <div class="sidebar-brand-icon"><i class="fas fa-book"></i></div>
      <div class="sidebar-brand-text mx-3">Perpustakaan</div>
    </a>

    <hr class="sidebar-divider">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('buku.index') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Buku</span>
      </a>
    </li>
  </ul>

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <h4 class="m-0 font-weight-bold text-primary">Sistem Manajemen Perpustakaan</h4>
      </nav>

      <!-- Main Content -->
      <div class="container-fluid">
        @include('admin.partials.alert')
        @yield('content')
      </div>
    </div>

    <!-- Footer -->
    <footer class="sticky-footer bg-white text-center">
      <div class="my-auto">
        <span>© {{ date('Y') }} Perpustakaan</span>
      </div>
    </footer>
  </div>
</div>

<!-- JS -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
