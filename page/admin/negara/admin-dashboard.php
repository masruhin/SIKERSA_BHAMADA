<?php
include "../layout/header.php";
?>
<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">

  <!-- BEGIN: Header-->
  <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
    </div>
    <div class="navbar-container d-flex content">
      <div class="bookmark-wrapper d-flex align-items-center">
        <ul class="nav navbar-nav d-xl-none">
          <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END: Header-->


  <!-- BEGIN: Main Menu-->
  <div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="../../vendor/html/ltr/horizontal-menu-template/index.html"><span class="brand-logo">
                <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                  <defs>
                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                      <stop stop-color="#000000" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </lineargradient>
                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                      <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </lineargradient>
                  </defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                      <g id="Group" transform="translate(400.000000, 178.000000)">
                        <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                        <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                        <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                        <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                      </g>
                    </g>
                  </g>
                </svg></span>
              <h2 class="brand-text mb-0">Vuexy</h2>
            </a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <!-- Horizontal menu content-->
      <div class="navbar-container main-menu-content" data-menu="menu-container">
        <!-- include ../../vendor/includes/mixins-->
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
          <li data-menu="">
            <a class="dropdown-item d-flex align-items-center" href="member-dashboard.php">
              <i data-feather="home"></i><span data-i18n="Documentation">Home</span>
            </a>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown">
            <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
              <i data-feather="box"></i>
              <span data-i18n="Misc">Master Data</span></a>
            <ul class="dropdown-menu">
              <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="negara/negara.php" data-toggle="dropdown" data-i18n="Raise Support">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Data Negara</span></a>
              </li>
              <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Raise Support" target="_blank">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Data Unit</span></a>
              </li>
              <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Raise Support" target="_blank">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Data Universitas</span></a>
              </li>
              <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Raise Support" target="_blank">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Data Fakultas</span></a>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown">
            <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
              <i data-feather="paperclip"></i>
              <span data-i18n="Misc">Kerjasama</span></a>
            <ul class="dropdown-menu">
              <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Raise Support" target="_blank">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Jenis Lembaga</span></a>
              </li>
              <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Raise Support" target="_blank">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Bentuk Kerjasama</span></a>
              </li>
              <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Raise Support" target="_blank">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Jenis Dokumen Kerjasama</span></a>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown">
            <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
              <i data-feather="database"></i>
              <span data-i18n="Misc">Laporan</span></a>
            <ul class="dropdown-menu">
              <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Raise Support" target="_blank">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Laporan Kerjasama</span></a>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown">
            <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
              <i data-feather="settings"></i>
              <span data-i18n="Misc">Pengaturan</span></a>
            <ul class="dropdown-menu">
              <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Raise Support" target="_blank">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Pengaturan akun</span></a>
              </li>
              <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Raise Support" target="_blank">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Pengaturan Website</span></a>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown">
            <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
              <i data-feather="settings"></i>
              <span data-i18n="Misc">Users</span></a>
            <ul class="dropdown-menu">
              <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Raise Support" target="_blank">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Pengaturan Users</span></a>
              </li>
            </ul>
          </li>
          <li data-menu="">
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i data-feather="log-in"></i>
              <span data-i18n="Documentation">Log In</span>
            </a>
          </li>
        </ul>

      </div>
    </div>
  </div>
  <!-- END: Main Menu-->

  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h2 class="content-header-title float-start mb-0">Master Negara</h2>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="https://porma.uisu.ac.id/public/dashboard">Home</a>
                  </li>
                  </li>
                  <li class="breadcrumb-item active">Daftar
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="content-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header border-bottom">
                <h4 class="card-title"></h4>
                <div class="demo-inline-spacing">
                  <button type="button" class="btn btn-sm btn-gradient-info" data-bs-toggle="modal" data-bs-target="#default" id="tambah"><i data-feather="plus"></i>
                    Tambah
                  </button>
                </div>
              </div>
              <div class="card-datatable card-body">
                <table id="myTable" class="table table-striped ">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Negara</th>
                      <th>Dibuat (Wib)</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!--/ Column Search -->

        <!-- Modal -->
        <div class="modal fade text-start" id="default" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="judulModal">Inline Login Form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="" method="post">
                <input type="hidden" name="_token" value="TBBYZ7LMNSxhBmonxlWK3ECRa6LGTURPNVY58bQt">
                <input type="hidden" name="id" id="id" class="form-control" />
                <div class="modal-body">
                  <label>Nama Negara</label>
                  <div class="mb-1">
                    <input type="text" name="nama_negara" id="nama_negara" placeholder="Masukkan Nama Negara" class="form-control" required />
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <?php
  include "../layout/footer.php";
  ?>


</body>
<!-- END: Body-->

</html>