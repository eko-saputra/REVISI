<?php include('templates/header.php') ?>
<div class="container-scroller">
  <!-- partial:partials/_sidebar.html -->
  <?php include('templates/sidebar.php') ?>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="container-fluid border border-1 border-muted bg-dark text-light my-3 d-flex justify-content-center align-items-center">
          <marquee>Selamat Datang di Panel Admin Skordigital - Versi 2.0 - Eko Saputra <?= date('Y'); ?></marquee>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
              <div class="navbar-profile">
                <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
              <h6 class="p-3 mb-0">Profile</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-logout text-danger"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Log out</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <p class="p-3 mb-0 text-center">Advanced settings</p>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-format-line-spacing"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
            <div class="card corona-gradient-card">
              <div class="card-body py-0 px-0 px-sm-3">
                <div class="row align-items-center">
                  <div class="col-4 col-sm-3 col-xl-2">
                    <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                  </div>
                  <div class="col-5 col-sm-7 col-xl-8 p-0">
                    <h4 class="mb-1 mb-sm-0">SKORDIGITAL PENCAKSILAT</h4>
                    <p class="mb-0 font-weight-normal d-none d-sm-block">Lebih mudah, efisien dan transparan.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        $page = @$_GET['page'];

        if ($page) {
          include('pages/' . $page . '.php');
        } else {
          include('pages/dashboard.php');
        }

        ?>
        <!-- content-wrapper ends -->
        <?php include('templates/footer.php') ?>