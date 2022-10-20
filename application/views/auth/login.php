 <a class="navbar-brand" href="#page-top">Pemesanan Iklan RRI Jayapura</a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Zinc</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('utama') ?>">Beranda</a>
                    </li> 
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('profile1'); ?>">Profil LPP RRI</a>
                    </li>                   
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('tarif') ?>">Tarif Iklan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('informasi') ?>">Informasi Lain</a>
                    </li>
                    
                </ul>
                <span class="nav-item">
                    <a class="btn-solid-sm" href="<?php echo base_url('auth') ?>">Login/Register</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
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

                                     <h4 class="h4 text-gray-900 mb-4"><font face="Comic Sans MS">SISTEM INFORMASI PEMESANAN IKLAN LEMBAGA PENYIARAN PUBLIK RRI JAYAPURA</font></h4>
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


 