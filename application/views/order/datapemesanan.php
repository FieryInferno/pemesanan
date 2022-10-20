
                 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <center>  <h1 class="h3 mb-2 text-gray-800"> <font face="Bookman Old Style"><?= $title; ?></h1></font></center>
                    <br>
  <div class="col-lg-25">
                    <!-- DataTales Example -->
                 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                    
<a href="" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#newSubMenuModal">Add New Submenu</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
                                    <thead>
                                        <tr> <center>
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
                                    <tfoot>
                                                                
                                    <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($pesanan as $sm):
                                 ?>                                                                 

  
                                        <tr>
<td align = "center"> <?php echo $no++ ?></td>
<td align = "center"> <?php echo $sm->nama_instansi ?></td>                                    
<td align = "center"><?php echo $sm->jasa_siaran ?></td> 
<td align = "center"><?php echo $sm->jenis?></td>                  
<td align = "center"> <?php echo $sm->qty  ?></td> 
<td align = "center"> Rp.<?php echo number_format($sm->detail_tarif, 0,',','.'); ?> </td>
<td align = "center"> Rp.<?php echo number_format($sm->detail_tarif_subtotal, 0,',','.'); ?> </td>
<td align = "center"> <?php echo $sm->programa  ?></td> 
<td align = "center"> <?php echo $sm->no_telepon ?></td>              
<td align = "center"> <?php echo $sm->email ?></td>
<td align = "center"> <?php echo $sm->catatan  ?></td>
<td align = "center"> <?php echo $sm->waktu_order  ?></td>  
<td align = "center"> <a href="" ><i class="fas fa-fw fa-solid fa-file"></i></a></td>                                          
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
