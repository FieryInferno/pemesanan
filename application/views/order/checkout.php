<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <center>  <h1 class="h3 mb-2 text-gray-800"> <font face="Bookman Old Style"><?= $title; ?></h1></font></center>
                    <br>
                           

<form class="form-horizontal" action="<?php echo base_url()?>Checkout/proses_order" method="post" name="frmCO" id="frmCO">
<div class=" container-fluid my-7 ">
    <div class="row justify-content-center ">
        <div class="col-xl-12">
            <div class="card shadow-lg ">
                <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                    <div class="col">
                          
                    </div>
                    <div class="col">
                        <div class="row justify-content-start ">
                            <div class="col">
                                <img class="irc_mi img-fluid cursor-pointer " src="<?php echo base_url(); ?>assets/img/logo.png"  width="70" height="70" >
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <img class="irc_mi img-fluid bell" src="https://i.imgur.com/uSHMClk.jpg" width="30" height="30"  >
                    </div>
                </div>
                <div class="row  mx-auto justify-content-center text-center">
                    <div class="col-12 mt-3 ">
                        <nav aria-label="breadcrumb" class="second ">
                                                              <ul class="breadcrumb">
<li><a href="<?php echo base_url('pesan'); ?>">Tarif Iklan</a></li>
  <li><a href="<?php echo base_url('pesan/cart'); ?>">Cart</a></li>
  <li>Konfirmasi</li>
  <li><a href="#">Selesai</a></li>
</ul>
                            </ol>
                        </nav>
                    </div>
                </div>
            
                <div class="row justify-content-around">
                    <div class="col-md-5">
                        <div class="card border-0">
                            <div class="card-header pb-0">

                                <h2 class="card-title space ">Checkout</h2>
                                <p class="card-text text-muted mt-4  space">Pesanan Iklan</p>
                                <hr class="my-0">
                            </div>
                            <div class="card-body">
                            <form action="<?= base_url('Checkout'); ?>" method="post">
                        
                                <div class="form-group">
                                    <label for="NAME" class="small text-muted mb-1">Nama Instansi</label>
                                    <input type="text" class="form-control form-control-sm" name="nama_instansi" id="nama_instansi" aria-describedby="helpId" placeholder="Masukan Nama Instansi Anda">
                                </div>

                               
                                <div class="form-group">
                                    <label for="validationTooltip04" class="form-label">Programa</label>
                                    <input type="text" class="form-control form-control-sm" name="programa" id="programa" aria-describedby="helpId" placeholder="Pilih Programa 1,2 atau 4">
                                </div> 
          <div class="form-group">
          <label for="validationTooltip04" class="form-label">Jenis Siaran Iklan</label>
         <input type="text" class="form-control form-control-sm" name="jenis" id="jenis" aria-describedby="helpId" placeholder="Pilih Jenis Siaran Iklan:Spot/Jingle/Filler/Advertorial">
         <p>Pilih Jenis Siaran Iklan:Spot/Jingle/Filler/Advertorial</p>
          </div>

                                <div class="form-group">
                                    <label for="NAME" class="small text-muted mb-1">catatan</label>
                                    <input type="text" class="form-control form-control-sm" name="catatan" id="catatan" aria-describedby="helpId" placeholder="Berikan Catatan 1 hari berapa kali Tayang">
                                </div>


                                <div class="form-group">
                                    <label for="NAME" class="small text-muted mb-1">Email</label>
                                    <input type="text" class="form-control form-control-sm" name="email" id="email" aria-describedby="helpId" placeholder="Masukan Email Instansi Yang dapat dihubungi">
                                </div>
                              <div class="form-group">
                         <label for="NAME" class="small text-muted mb-1">No Telepon</label>
             <input type="text" class="form-control form-control-sm" name="no_telepon" id="no_telepon" aria-describedby="helpId" placeholder="Masukan No Telepon Yang Dapat Dihubungi">
                                        </div>

                                <div class="row no-gutters">
                                    <div class="col-sm-6 pr-sm-2">
                                        <div class="form-group">
<label for="NAME" class="small text-muted mb-1">Keterangan Berkas</label>
<input type="text" class="form-control form-control-sm" name="keterangan_berkas" id="keterangan_berkas" aria-describedby="helpId" placeholder="Masukan Keterangan Berkas">
                                    
                                        </div>
                                    </div>
                                    
                                   <div class="col-sm-6">
                                  
<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Checkout">
                                        <div class="form-group">
<label for="NAME" class="small text-muted mb-1">Masukan Data Iklan</label>
 <input type="file" class="form-control form-control-sm" name="isi_iklan" id="isi_iklan" aria-label="file example" placeholder="Masukan Data Yang ada Dipromosikan/Di iklan kan">
   
                                        </div>
                                        </form>

         <?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>
                          
                                

                                    </div>
                                     <div class="form-group  has-success has-feedback">
            <div class="col-xs-offset-3 col-xs-9">
                <center><button type="submit" class="btn btn-primary">Proses Order</button></center>
            </div>
        </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card border-0 ">
                            <div class="card-header card-2">
                                <p class="card-text text-muted mt-md-4  mb-2 space">YOUR ORDER  </p>
                              
                            </div>
                     
                                <div class="row  justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row">
                                           
                                            <div class="media-body  my-auto">
                                                <div class="row ">
         <div class="col-auto"><p class="mb-4">Jasa Siaran Iklan:<b> <?php echo $items['name']; ?></b></p>
                                                    <p class="mb-0">Tarif Iklan:<b> Rp.<?php echo number_format($items['price'], 0,',','.'); ?></b></p><br>
                                                      <p class="mb-0">Total Penayangan Iklan:<b>&nbsp;<?php echo $items['qty']; ?></b></p></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                             
   <?php $i++; ?>

<?php endforeach; ?>                          
                                <hr class="my-2">
                                <div class="row ">
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col-4"><p class="mb-1"><b></b></p></div>
                                            <div class="flex-sm-col col-auto"><p class="mb-1"><b>
     
         

  </b></p> </div>                                 
 
                                           
                                        <div class="row justify-content-between">
                                            <div class="col-4"><p ><b>Total Pembayaran: </b></p></div>
                                            <div class="flex-sm-col col-auto"><p  class="mb-1"><b> <?php
$grand_total = 0;
if ($cart = $this->cart->contents())
    {
        foreach ($cart as $item)
            {
                $grand_total = $grand_total + $item['subtotal'];
            }
        echo " <h4>Rp.".number_format($grand_total,0,",",".")."</h4>";
?>    </b></p> </div>
                                        </div><hr class="my-0">
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 <?php
    }
    else
        {
            echo "<h5>Shopping Cart masih kosong</h5>";
        }
    ?>
