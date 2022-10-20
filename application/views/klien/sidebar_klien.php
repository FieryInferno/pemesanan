        <!-- Sidebar Admin -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
    <i class="bi bi-broadcast"></i>
                </div>
                <div class="sidebar-brand-text mx-2">PEMESANAN IKLAN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-2">
  <?php
            $role_id = $this->session->userdata('role_id');
             $queryMenu = "SELECT `user_menu`.`id`,`menu`
                           FROM `user_menu` JOIN `user_access_menu`
                           ON `user_menu`.`id` =  `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                           ORDER BY  `user_access_menu`.`menu_id` ASC
                           ";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>

             <!-- Looping Menu -->

            <?php foreach ($menu as $m ) : ?>
                 <div class="sidebar-heading">
                <?= $menu['menu']; ?>
            </div>
        <?php endforeach; ?>
           
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt" h1 style="font-size:1rem;"></i>
                    <span><b>Dashboard</b></span></a>
            </li>

            <!-- Divider -->
          

            <!-- Heading -->
         
          
<li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Profil_klien') ?>">
                  <i class="fas fa-fw fa-user" h1 style="font-size:1rem;"></i>
                    <span><b>Profil Saya</b></span></a>

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
                    <i class="bi fa-fw bi-basket3"  h1 style="font-size:1rem;"></i>
                       <span><b>Memesan Iklan</b></span></a>
                      <hr class="sidebar-divider">
           
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Pemesanan_iklan/assets/tables.html">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">                
                    <i class="fas fa-fw fa-info-circle" h1 style="font-size:1rem;"></i>
                    <span><b>Infromasi Penyiaran Iklan</b></span></a>
                
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
                    <span><b>Surat Perjanjian</b></span></a>
                         </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Pemesanan_iklan/assets/tables.html">
                    <i class="bi fa-fw bi-chat-text-fill"></i>
                    <span><b>Saran & Masukan</b></span></a>
                      <hr class="sidebar-divider">
            </li>
          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->  