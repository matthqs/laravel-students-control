<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center " href="home">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3">Students Control</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->

  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('cursos') }}">
      <i class="fas fa-fw fa-book"></i>
      <span>Cursos</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('alunos') }}">
      <i class="fas fa-fw fa-users"></i>
      <span>Alunos</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('matriculas') }}">
      <i class="fas fa-fw fa-address-card"></i>
      <span>Matrículas</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>