<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
    <link href="<?=base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?=base_url(); ?>assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"  rel="stylesheet">
       <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo.png">

    <!-- Custom styles for this template-->
    <link href="<?=base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="bi bi-broadcast"></i>
                </div>
               <div class="sidebar-brand-text mx-4">PEMESANAN IKLAN </div>
            </a>

            <!-- Divider -->
              <hr class="sidebar-divider">

            <!-- Query Menu -->
            <?php
            $role_id = $this->session->userdata('role_id');
             $queryMenu = "SELECT `user_menu`.`id`,`menu`
                           FROM `user_menu` JOIN `user_access_menu`
                           ON `user_menu`.`id` =  `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                           ORDER BY  `user_access_menu`.`menu_id` ASC
                           ";
            $menu = $this->db->query($queryMenu)->result_array();
            var_dump($menu);
            die;
            ?>


             <div class="sidebar-heading">
               Admin
            </div>

            <!-- Nav Item - Dashboard -->
               <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/index') ?>">
                    <i class="fas fa-fw fa-tachometer-alt" h1 style="font-size:1rem;"></i>
                    <span><b>Dashboard</b></span></a>
            </li>            
        
          
<li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('profil') ?>">
                  <i class="fas fa-fw fa-user" h1 style="font-size:1rem;"></i>
                    <span><b>Profil Saya</b></span></a>

                <hr class="sidebar-divider">

            
             <li class="nav-item menu-open">

                <a class="nav-link active" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table" h1 style="font-size:1rem;"></i>
                    <span><b>Data Master</b></span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Registrasi</h6>
                        <a class="collapse-item" href="utilities-color.html">Data Tarif Iklan</a>
                        <a class="collapse-item" href="utilities-border.html">Data Pemesanan</a>
                        <a class="collapse-item" href="utilities-animation.html">Data Informasi Penyiaran</a>
                        <a class="collapse-item" href="utilities-other.html">Data Informasi Pembayaran</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

          


        
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Pemesanan_iklan/assets/tables.html">
                    <i class="fas fa-fw fa-table" h1 style="font-size:1rem;"></i>
                    <span><b>Tarif Iklan</b></span></a>
                      <hr class="sidebar-divider">

            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Pemesanan_iklan/assets/tables.html">
                   <i class="bi fa-fw bi-basket3" h1 style="font-size:1rem;"></i> 
                    <span><b>Pesanan Iklan</b></span></a>
                      <hr class="sidebar-divider">
           
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Pemesanan_iklan/assets/tables.html">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">                
                    <i class="fas fa-fw fa-info-circle" h1 style="font-size:1rem;"></i>
                    <span><b>Infromasi Penyiaran </b></span></a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Pemesanan_iklan/assets/tables.html">  
                    <link rel="stylesheet" href="https://fontawesome/css/all.css">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">                           
                        <i class="fas fa-fw fa-info-circle" h1 style="font-size:1rem;"></i>        
                    <span><b>Infromasi Pembayaran</b></span></a>
                      <hr class="sidebar-divider">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Pemesanan_iklan/assets/tables.html">              
                     <link rel="stylesheet" href="https://fontawesome/css/all.css">
                    <i class="fas fa-fw fa-envelope" h1 style="font-size:1rem;"></i>
                    <span><b>Surat Perjanjian </b></span></a>
                         </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Pemesanan_iklan/assets/tables.html">
           <i class="bi bi-chat-text-fill" h1 style="font-size:1rem;"></i>

                    <span><b>Saran & Masukan</b></span></a>

                    
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            
<a class="nav-link dropdown-toggle" href="#" id="dropdown01" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?=base_url(); ?>assets/img/profile/default.jpg">
                                     </a>
                                
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                            
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url(); ?>auth/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

           <div class="container-fluid">

                    <!-- Page Heading -->
                        <center> <b><h1 class="h3 mb-4 text-gray-800">Selamat Datang Admin</h1></b></center>
<br>
<center><div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?=base_url(); ?>assets/img/profile/default.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$user['name'];?></h5>
        <p class="card-text">olivia@gmail.com</p>
        <p class="card-text"><small class="text-muted">Member Since 21 March 2022</small></p>
      </div>
    </div>
  </div>
</div></center>
                </div>

            </div>
            <!-- Footer -->
           <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sistem Informasi Pemesanan Iklan Stasiun RRI Jayapura 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End 
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=base_url(); ?>auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url(); ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?=base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>