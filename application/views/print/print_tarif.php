   

                <!-- Begin Page Content -->
                <div class="container-fluid">

 <center><h1 class="h1 mb-2 text-gray-800"> <font face="Bookman Old Style"><?= $title; ?></h1></font></center>
                    <br>
               
  <div class="col-lg-12">
                    <!-- DataTales Example -->
                   <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tables Tarif Iklan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               

                                    <thead>
                                        <tr> <center>
                                            <tr> 
                                            <th>No.</th>
                                            <th>Jasa Siaran Iklan</th>                                    
                                            <th>Satuan</th>
                                            <th>Tarif</th>
                                        
                                        </tr>
                                    </thead> 
                                            </center>                                            
                                        </tr>
                                        </thead>
                                    <?php $no = 1; ?>
                                    <?php foreach($daftarTarif as $dt): ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $dt['jasa_siaran'] ?></td>
                                            <td><?php echo $dt['satuan'] ?></td>
                                            <td><?php echo $dt['harga'] ?></td>
                                          
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









