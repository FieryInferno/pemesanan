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
                    <a class="btn-solid-sm" href="<?php echo base_url('auth') ?>">Login/Register</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    <div class="container">
    <div class="container">
<br>
      <br>
      <br>
       <br>
        <br>
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
                         <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" 
                                    name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                                <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" 
                                    name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password1" name="password1" placeholder="Password">
                                <?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" name="password2" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>                                
                            </form>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth'); ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>