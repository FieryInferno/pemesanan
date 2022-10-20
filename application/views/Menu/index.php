

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                    <br>
  <div class="col-lg-12">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                    
                  <?= form_error('menu','<div class="alert alert-danger" role="alert"> ','</div>'); ?>
                   <?= $this->session->flashdata('message'); ?>

 <?= $this->session->flashdata('pesan'); ?>
   <?=$this->session->flashdata('notif');?>
<a href="" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#newMenuModal">Add New Menu</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                         
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr> <center>
                                            <td align = "center">No.</td>
                                            <td align = "center">Menu</td>
                                            <td align = "center" >Action</td>
                                            </center>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($menu as $dt): ?>
  
                                        <tr>

                                          <td align = "center" > <?php echo $no++ ?></td>
                                     
                                            <td align = "center">
                                            <?php echo $dt['menu'] ?></td>
                                            <td align="center">
                                            
<a href="" class="badge badge-primary" data-bs-toggle="modal" data-bs-target="#editmodal<?php echo $dt['id'];?>">Edit</a>

                                  
    <a href="<?= base_url(); ?>menu/delete/<?= $dt['id']; ?>" class="badge badge-danger " onclick="return confirm('yakin');" >Delete</a>
                                            </td>
                                           
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

<!-- Modal Tambah Data-->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModal">Add New Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('menu'); ?>" method="post">
      <div class="modal-body">
       <div class="mb-3">
      <input type="text" class="form-control" id="menu" name= "menu" placeholder="Menu name">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit Data-->
   <?php $no = 0;
    foreach($menu as $dt) : $no++;?>
<div class="modal fade" id="editmodal<?php echo $dt['id'];?>" tabindex="-1" aria-labelledby="editmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodal">Form Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('menu/proses_edit_data'); ?>" method="post">
      <input type="hidden" name="id" value="<?php echo $dt['id'];?>"></input>
      <div class="modal-body">
       <div class="mb-3">
      <input type="text" class="form-control" id="menu" name= "menu" value="<?php echo $dt['menu'];?>" >
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

 
                                     
<!-- Akhir  Edit Data-->

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

  <?php endforeach; ?>








