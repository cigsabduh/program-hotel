<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="/">
      <span class="align-middle">Perhotelan</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Main Menu
      </li>

      <li class="sidebar-item {{ str_contains(request()->path(), '/') ? 'active' : null }}">
        <a class="sidebar-link" href="/">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>

      <li class="sidebar-item {{ str_contains(request()->path(), 'pengunjung') ? 'active' : null }}">
        <a class="sidebar-link" href="/pengunjung">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">Pengunjung</span>
        </a>
      </li>
  </div>
</nav>