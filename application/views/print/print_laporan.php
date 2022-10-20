   

                <!-- Begin Page Content -->
                <div class="container-fluid">

 <center><h1 class="h1 mb-2 text-gray-800"> <font face="Bookman Old Style"><?= $title; ?></h1></font></center>
                    <br>
               
  <div class="col-lg-12">
                    <!-- DataTales Example -->
                   <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tables Laporan Pemesanan Iklan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               

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
                                    <?php foreach($pesanan as $sm):  ?>

                                   

  
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
                                     
<!-- Akhir  Edit Data-->

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</script>
<script type="text/javascript">
  window.print();
</script>









