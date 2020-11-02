<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
    {{-- <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div> --}}
    <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item @if (request()->route()->getName() == 'home') active @endif">
    <a class="nav-link" href="{{ url('/dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <hr class="sidebar-divider">

  @include('sidebar.partials.department')

  <div class="sidebar-heading">
    Einheiten
  </div>

  @if (Auth::user()->hasRole(['superadmin', 'admin']))

  <hr class="sidebar-divider">

  <div class="sidebar-heading">
    Admin
  </div>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
      aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Administration</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Verwaltung</h6>
        <a class="collapse-item" href="buttons.html">Rollen & Rechte</a>
        <a class="collapse-item" href="cards.html">Benutzer</a>
        <h6 class="collapse-header">Spieldaten</h6>
        <a class="collapse-item" href="cards.html">Allgemein</a>
        <a class="collapse-item" href="cards.html">Ränge</a>
        <a class="collapse-item" href="cards.html">Posten</a>
      </div>
    </div>
  </li>

  @endif

</ul>
<!-- End of Sidebar -->