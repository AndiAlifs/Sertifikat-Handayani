<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ config('app.name') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
    <!-- <li class="menu-header">Dashboard</li> -->
    <li class="{{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}"><i class="fas fa-columns"></i> <span>Daftar Sertifikat</span></a></li>
    <li class="{{ request()->is('/kursus/buat') ? 'active' : '' }}"><a href="{{ route('kursus.buat') }}"><i class="fas fa-table"></i> <span>Daftar Program</span></a></li>
    <li class="{{ request()->is('/kompetensi/buat') ? 'active' : '' }}"><a href="{{ route('kompetensi.buat') }}"><i class="fas fa-table"></i> <span>Daftar Kompetensi</span></a></li>
    <!-- <li class="menu-header">Users</li> -->
    <!-- <li><a class="nav-link" href=""><i class="fas fa-users"></i> <span>Users</span></a></li> -->
  </ul>
</aside>
