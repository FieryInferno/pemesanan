<!-- Topbar -->
<div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

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

                        <!-- Nav Item - Alerts -->
                    
                        <!-- Nav Item - Messages -->
                        <?php 
                        $keranjang = $this->cart->contents(); 
                        $jml_item = 0;
                        foreach($keranjang as $key=>$value)  {
                             $jml_item = $jml_item + $value['qty'];
                        }

                        ?>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"><?= $jml_item ?></span>
                            </a>
                            <!-- Pesanan - Messages -->

                       
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <?php if (empty($keranjang)) { ?>
                                  <a href="" class="dropdown-item d-flex align-items-center">
                                  <p>Kerang Belanja Kosong</p>
                                   </a>
                                
                               <?php } ?>


                                     <?php foreach ($keranjang as $key =>$value) {?>
                                <h1 class="dropdown-header">
                                    Cart Order
                                </h1>
                                <a class="dropdown-item d-flex align-items-center">
                                    <div class="dropdown-list-image mr-3">

                                        <img class="rounded-circle" src="<?=base_url(); ?>assets2/img/1.jpg"
                                            alt="...">
                                      
                                    </div>
                                    <div class="font-weight-bold">
                                      <div class="text-truncate"><?= $value['name'] ?> </div>
    <div class="small text-gray-500"><?= $value['qty'] ?> x Rp.<?= number_format($value['price'],0) ?></div>
     <p class="text-sm text-muted">
    <i class="fa fa-calculator"></i>&nbsp;Rp. <?= $this->cart->format_number($value['subtotal']);?>
    </p>
                                    </div>
                                </a>

                               <?php }?> 

                          <a class="dropdown-item d-flex align-items-center">
                                <tr>
        <td colspan="2"> </td>
        <td class="right"><strong>Total Pembayaran: </strong></td>
        <td class="right">&nbsp;Rp.<?= $this->cart->format_number($this->cart->total()); ?></td>
</tr>
                                </a> 

<center><a class="dropdown-item dropdown-footer" href="<?php echo base_url('memesan/cart'); ?>"> Check Out</a></center> 
                        </li>
                        <!-- Pesanan End-->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                         <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?=base_url('assets/img/profile/').$user['gambar']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo base_url('klien') ?>">
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
           