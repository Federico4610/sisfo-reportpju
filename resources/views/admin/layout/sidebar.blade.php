<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="#">E-Reporting Lampu PJU</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#">PJU</a>
    </div>
      <ul class="sidebar-menu">
        {{-- Dashboard --}}
        @if (Auth::guard('admin')->user()->status == 'admin')
        <li class="@yield('dashboard')"><a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        @elseif (Auth::guard('admin')->user()->status == 'tatausaha')
        <li class="@yield('dashboard')"><a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        @elseif (Auth::guard('admin')->user()->status == 'kepala')
        <li class="@yield('dashboard')"><a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        @endif

        {{-- Entry data --}}
        @if (Auth::guard('admin')->user()->status == 'admin')
        <li class="menu-header">Entry data</li>
        <li class="@yield('petugas')"><a class="nav-link" href="/petugas"><i class="fas fa-user"></i> <span>Petugas</span></a></li>
        <li class="@yield('masyarakat')"><a class="nav-link" href="/masyarakat"><i class="fas fa-user"></i> <span>Masyarakat</span></a></li>
        <li class="@yield('stok')"><a class="nav-link" href="/stok"><i class="fas fa-database"></i> <span>Stock Lampu</span></a></li>
        @endif

        {{-- Pengaduan --}}
        @if (Auth::guard('admin')->user()->status == 'tatausaha')
        <li class="menu-header">Pengaduan</li>
        <li class="@yield('pengaduan')"><a class="nav-link" href="/pengaduan"><i class="fas fa-database"></i> <span>Entry pengaduan</span></a></li>
        <li class="@yield('tanggapan')"><a class="nav-link" href="/tanggapan"><i class="fas fa-database"></i> <span>Entry tanggapan</span></a></li>
        @endif

        {{-- Laporan --}}
        @if (Auth::guard('admin')->user()->status == 'kepala')
        <li class="menu-header">Laporan</li>
        <li class="@yield('laporan')"><a class="nav-link" href="/laporan"><i class="fas fa-print"></i> <span>Rekap laporan</span></a></li>
        @endif

      </ul>
  </aside>
</div>
