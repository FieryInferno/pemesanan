<div class="container-fluid">
  <center>  <h1 class="h3 mb-2 text-gray-800"> <font face="Bookman Old Style"><?= $title; ?></h1></font></center>
  <br>
  <div class="col-lg-25">
    <div class="card shadow mb-4">
      <div class="card-header py-3">                
        <a href="" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#newSubMenuModal">Add New Submenu</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
            <thead>
              <tr>
                <center>
                  <td align = "center">No.</td>
                  <td align = "center">Nama Instansi</td>
                  <td align = "center">Jasa Siaran</td>
                  <td align = "center">Jenis Siaran</td>
                  <td align = "center">Total Siaran Iklan</td>
                  <td align = "center">Tarif Iklan</td>
                  <td align = "center">Jumlah Pembayaran</td>
                  <td align = "center">Programa</td>
                  <td align = "center">No Telepon</td>
                  <td align = "center">Email</td>
                  <td align = "center">Catatan</td>
                  <td align = "center">Waktu Order</td>
                  <td align = "center">isi_iklan</td>
                </center>                                            
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach($pesanan as $sm): ?>
                <tr>
                  <td align = "center"><?= $no++ ?></td>
                  <td align = "center"><?= $sm->nama_instansi ?></td>                                    
                  <td align = "center"><?= $sm->jasa_siaran ?></td> 
                  <td align = "center"><?= $sm->jenis?></td>                  
                  <td align = "center"><?= $sm->qty  ?></td> 
                  <td align = "center"> Rp.<?= number_format($sm->detail_tarif, 0,',','.'); ?> </td>
                  <td align = "center"> Rp.<?= number_format($sm->detail_tarif_subtotal, 0,',','.'); ?> </td>
                  <td align = "center"><?= $sm->programa  ?></td> 
                  <td align = "center"><?= $sm->no_telepon ?></td>              
                  <td align = "center"><?= $sm->email ?></td>
                  <td align = "center"><?= $sm->catatan  ?></td>
                  <td align = "center"><?= $sm->waktu_order  ?></td>  
                  <td align = "center"><a href="<?= base_url('upload/' . $sm->isi_iklan); ?>" download>Download<i class="fas fa-fw fa-solid fa-file"></i></a></td>                                          
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <br>
                              </center>
                            </div>
  
                        </div>
                    </div>
</div>
                </div>
</div>
  
</div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
     </div>

     <!-- modal -->
