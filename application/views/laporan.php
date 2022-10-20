<div class="container-fluid">
  <center> <h1 class="h3 mb-2 text-gray-800"> <font face="Bookman Old Style"><?= $title1; ?></h1></font></center>
  <br>
  <div class="col-lg-50">
    <div class="card shadow mb-4">
      <div class="card-header py-3">                
        <a class="btn btn-outline-secondary shadow mb-2" href="<?php echo base_url('laporan/print')?>"><i class="fa fa-print"></i>&nbsp; Print</a>
      </div>
      <div class="card-body">
        <form>
          <div class="row mb-3">
            <label for="name" class="col-sm-12 col-form-label">Filter By Tanggal Order</label>
          </div>
          <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Tanggal Awal</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal">
            </div>
          </div>
          <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Tanggal Akhir</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir">
            </div>
          </div>
          <button class="btn btn-primary mb-2" type="submit">Filter</button>
        </form>
        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
                                    <thead>
                                        <tr> <center>
                                            <td align = "center">No.</td>
                                            <td align = "center">Nama Instansi</td>
                                            <td align = "center">Jasa Siaran</td>
                                            <td align = "center">Total Siaran Iklan</td>
                                            <td align = "center">Tarif Iklan</td>
                                            <td align = "center">Jumlah Pembayaran</td>
                                            <td align = "center">Programa</td>
                                            <td align = "center">No Telepon</td>
                                            <td align = "center">Email</td>
                                            <td align = "center">Catatan</td>
                                            <td align = "center">Tanggal & Waktu Order</td>
                                            <td align = "center">Tanggal Penyiaran</td>
                                            <td align = "center">Tanggal Akhir Penyiaran</td>
                                            

                                            </center>                                            
                                        </tr>
                                        </thead>
                                    <tfoot>
                                                                
                                    <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($pesanan as $sm):
                                 ?>                                                                 

  
                                        <tr>
<td><?php echo $no++ ?></td>
<td><?php echo $sm->nama_instansi ?></td>                                    
<td><?php echo $sm->jenis ?></td>                  
<td><?php echo $sm->qty  ?></td> 
<td>Rp.<?php echo number_format($sm->detail_tarif, 0,',','.'); ?> </td>
<td>Rp.<?php echo number_format($sm->detail_tarif_subtotal, 0,',','.'); ?> </td>
<td><?php echo $sm->programa  ?></td> 
<td><?php echo $sm->no_telepon ?></td>              
<td><?php echo $sm->email ?></td>
<td> <?php echo $sm->catatan  ?></td>
<td> <?php echo $sm->waktu_order  ?></td> 
<td><?php echo $sm->tgl_penyiaran ?></td>
<td><?php echo $sm->tgl_akhirpenyiaran ?></td>  
                                          
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
