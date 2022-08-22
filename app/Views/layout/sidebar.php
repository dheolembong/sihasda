<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/'); ?>">
    <div class="sidebar-brand-icon ">
      <img class="img-fluid " src="<?= base_url("si/img/logo.png"); ?>" alt="">
    </div>
    <div class="sidebar-brand-text mx-3">SIHASDA SULUT</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">


  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Nav Item - Collapse Menu Profil Biro-->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-solid fa-building"></i>
      <span>PROFIL BIRO</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Biro Perekonomian : </h6>
        <a class="collapse-item" href="<?= base_url('/pages/struktur'); ?>">STRUKTUR</a>
        <a class="collapse-item" href="<?= base_url('pegawai'); ?>">DATA PEGAWAI</a>

      </div>
    </div>
  </li>

  <!-- Nav Item - Collapse Menu Data SDA -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-database"></i>
      <span>DATA SDA</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">SDA :</h6>
        <a class="collapse-item" href="<?= base_url('Kehutanan'); ?>">Kehutanan</a>
        <a class="collapse-item" href="<?= base_url('pertanian'); ?>">Pertanian</a>
        <a class="collapse-item" href="<?= base_url('peternakan'); ?>">Peternakan</a>

        <a class="collapse-item" href="<?= base_url('/sda/pikan'); ?>">Perikanan</a>
        <a class="collapse-item" href="<?= base_url('/sda/ptmbg'); ?>">Pertambangan</a>
        <a class="collapse-item" href="<?= base_url('/sda/lh'); ?>">Lingkungan Hidup</a>
        <a class="collapse-item" href="<?= base_url('/sda/energi'); ?>">Energi</a>
        <a class="collapse-item" href="<?= base_url('/sda/air'); ?>">Air</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Lainnya
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Settings</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Login Settings:</h6>
        <a class="collapse-item" href="<?= base_url('login'); ?>">Login</a>
        <a class="collapse-item" href="<?= base_url('/login/register'); ?>">Mendaftar</a>
        <a class="collapse-item" href="<?= base_url('/login/forgot-password'); ?>">Lupa Password</a>
        <div class="collapse-divider"></div>

      </div>
  </li>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('/pages/charts'); ?>">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>


</ul>
<!-- End of Sidebar -->