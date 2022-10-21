<div class="container-fluid">
  <center>
    <h1 class="h3 mb-2 text-gray-800">
      <font face="Bookman Old Style">
        <?= $title1; ?>
      </font>
    </h1>
  </center>
  <br>
  <div class="col-lg-20">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#newSubMenuModal">Add New Submenu</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                  <td align = "center">Action</td>
                </center>                                            
              </tr>
            </thead>
          <tbody>
            <?php
              $no = 1;
              foreach($pesanan_user as $sm): ?>
                <tr>
                  <td align = "center"><?= $no++ ?></td>
                  <td align = "center"><?= $sm->nama_instansi ?></td>                                    
                  <td align = "center"><?= $sm->jasa_siaran ?></td> 
                  <td align = "center"><?= $sm->jenis?></td>                  
                  <td align = "center"><?= $sm->qty  ?></td> 
                  <td align = "center"> Rp.<?= number_format($sm->detail_tarif, 0,',','.'); ?></td>
                  <td align = "center"> Rp.<?= number_format($sm->detail_tarif_subtotal, 0,',','.'); ?></td>
                  <td>
                    <?php
                      if ($sm->bukti_pembayaran) { ?>
                        <a href="<?= base_url('upload/' . $sm->bukti_pembayaran); ?>" class="badge badge-primary" target="blank">Lihat</a>
                      <?php } else { ?>
                        <a href="" class="badge badge-primary" data-bs-toggle="modal" data-bs-target="#uploadPembayaran<?= $sm->id_detail;?>">Upload Pembayaran</a>
                        <div class="modal fade" id="uploadPembayaran<?= $sm->id_detail;?>" tabindex="-1" aria-labelledby="uploadPembayaran<?= $sm->id_detail;?>" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="uploadPembayaran<?= $sm->id_detail;?>">Upload Bukti Pembayaran</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="<?= base_url('riwayat/upload/' . $sm->id_detail); ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="bukti_pembayaran" name="bukti_pembayaran" required>
                                    <label class="custom-file-label" for="bukti_pembayaran">Choose file</label>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      <?php }
                    ?>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
                              

                                    </tbody>

                                </table>
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
