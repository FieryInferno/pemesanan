<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Pemesanan Iklan</title>
     <link href="<?=base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?=base_url(); ?>assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-primary">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/swiper.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
    
    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo.png">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarExample">
    
    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
    
    <a class="navbar-brand" href="#page-top">Pemesanan Iklan RRI Jayapura</a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Zinc</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php/utama') ?>">Beranda</a>
                    </li>                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="article.html">Profil LPP RRI</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="terms.html">Struktur LPP RRI Jayapura</a></li>                                       
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Tarif Iklan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Informasi Lain</a>
                    </li>
                    
                </ul>
                <span class="nav-item">
                    <a class="btn-solid-sm" href="<?php echo base_url('index.php/auth') ?>">Login/Register</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

      
<br>
<br>
<br>
    
                   
                    

<div class="container">

      <br>
      <br>
      <br>  <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           <center>
                            <div class="col-lg-11">
                                <div class="p-5">
                                    <div class="text-center">

                                     <h4 class="h4 text-gray-900 mb-4"><font face="Comic Sans MS">SISTEM INFORMASI PEMESANAN IKLAN STASIUN RRI JAYAPURA</font></h4>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>

                            <form class="user" method="post" action="<?= base_url('auth');?>">
                             <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                             id="email" name="email" 
                             placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                    <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>    
                                        </div>
                                        <button type ="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                       </button>                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('auth/registration'); ?>">Create an Account!</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</center>
            </div>

        </div>

    </div>


 


    <!-- Footer -->
   


    <!-- Copyright -->
  
    

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->
        
    <!-- Scripts -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?php echo base_url(); ?>assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?php echo base_url(); ?>assets/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script> <!-- Custom scripts -->
       <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>
</html>