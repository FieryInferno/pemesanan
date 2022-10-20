

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <center><h1 class="h3 mb-2 text-gray-800"><font face="Bookman Old Style"><?= $title; ?></font></h1></center>
                    <br>
  <div class="col-lg-12">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                  
                   <?= $this->session->flashdata('message'); ?>
<h5><font face="Bookman Old Style">Role : <?= $role['role']; ?></font></h5>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                         
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr> <center>
                                            <td align = "center">No.</td>
                                            <td align = "center">Menu</td>
                                            <td align = "center" >Access</td>
                                            </center>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($menu as $m): ?>
  
                                        <tr>

                                          <td align = "center"> <?php echo $no++ ?></td>
                                     
                                            <td align = "center">
                                            <?php echo $m['menu']; ?></td>
                                            <td align="center">
<div class="form-check">
<input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']);?>
 data-role="<?= $role['id'];?> " data-role="<?= $role['id'];?>" data-menu="<?= $m['id']; ?>"  >

</div>
                                           
                                        </tr>
                                   
                                       <?php endforeach; ?>
                                       </tbody>
                                    </tbody>
                                </table>
                                </table>
                             
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






