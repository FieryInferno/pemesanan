   <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <center>  <h1 class="h3 mb-2 text-gray-800"> <font face="Bookman Old Style"><?= $title; ?></h1></font></center>
                    <br>
  <div class="col-lg-12">
                    <!-- DataTales Example -->
                     <div class="card shadow mb-3">
                        <div class="card-header py-3">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif;?>
                 
                   <?= $this->session->flashdata('message'); ?>

 <?= $this->session->flashdata('pesan'); ?>
   <?=$this->session->flashdata('notif');?>
<a class="btn btn-outline-secondary shadow mb-2" href="<?php echo base_url('user/print')?>"><i class="fa fa-print"></i>&nbsp; Print</a>

                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                          
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
                                    <thead>
                                        <tr> <center>
                                            <td align = "center">No.</td>
                                            <td align = "center">Name</td>
                                            <td align = "center" >Email</td>
                                            <td align = "center" >Image</td>
                                            <td align = "center" >Role</td>
                                            <td align = "center" >Alamat</td>
                                            <td align = "center" >No Telepon</td>
                                            <td align = "center" >Active</td>
                                            <td align = "center" >Action</td>
                                            </center>                                            
                                        </tr>
                                        </thead>
                                    <tfoot>
                                                                
                                    <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($User as $sm): ?>

                                   

  
                                        <tr>

                    <td align = "center"><?php echo $no++ ?></td>
                                     
               <td ><?= $sm['name']; ?></td>
                <td ><?=  $sm['email']; ?></td>

                
           <td ><img alt="image" height="70" width="70" class="img-profile rounded-circle" src =" <?=base_url('assets/img/profile/'). $sm['gambar']; ?>"></td>
                    <td><?= $sm['role']; ?></td>
                        <td><?= $sm['alamat']; ?> 
                          <td ><?= $sm['no_telepon']; ?> 
                            <td align = "center"><?= $sm['is_active']; ?> 
                      <td>                       

                                  
    <a href="<?= base_url(); ?>user/delete/<?= $sm['id']; ?>" class="badge badge-danger " onclick="return confirm('yakin');" >Delete</a>
    </td>

                                  
                                           
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

<!-- Modal Tambah Data-->
<div class="modal fade" id="newuserModal" tabindex="-1" aria-labelledby="newuserModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newuserModal">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('user'); ?>" method="post">
      <div class="modal-body">
       <div class="mb-3">
     <input type="text" class="form-control" id="name" name= "name" placeholder="Masukan Nama">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">   
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="Masukan No Telepon">     
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="role_id" name="role_id" placeholder="Masukan Role">     
    </div>
    <div class="form-group">
   <input type="text" class="form-control" id="email" name= "email" placeholder="Masukan Email">  
    </div>
<div class="form-group row">
    <div class="col-sm-2">Picture</div>
    <div class="col-sm-10">
        <div class="row">
         <div class="col-sm-3">
         <img src="<?= base_url('assets/img/profile/');  ?>" class="img-thumbnail">
    </div>
     
      <!-- Modal Tambah Data-->
<div class="col-sm-9">
        <div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image">
    <label class="custom-file-label" for="image">Choose file</label>

 </div>
 </div>
  </div>
    </div>
 <div class="form-group">
        <div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" name= "is_active" id="is_active" checked>
  <label class="form-check-label" for="is_active">
   Active?
  </label>
</div>

        </div>
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
    foreach($dataklien as $dt) : $no++;?>

<div class="modal fade" id="edituser<?php echo $dt['id'];?>" tabindex="-1" aria-labelledby="edituser" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edituser">Form Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('user/proses_edit_data'); ?>" method="post">
       <input type="hidden" name="id" value="<?php echo $dt['id'];?>"></input>
      <div class="modal-body">
       <div class="mb-3">
      <input type="text" class="form-control" id="name" name= "name" value="<?php echo $dt['name'];?>">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="alamat" name= "alamat"  value="<?php echo $dt['alamat'];?>">   
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="email" name= "email"  value="<?php echo $dt['email'];?>">   
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="role_id" name= "role_id"  value="<?php echo $dt['role_id'];?>">   
    </div>
    <div class="form-group row">
    <div class="col-sm-2">Picture</div>
    <div class="col-sm-10">
        <div class="row">
         <div class="col-sm-3">
         <img src="<?= base_url('assets/img/profile/') . $dt['image']; ?>" class="img-thumbnail">
    </div>
<!-- Modal Tambah Data-->
<div class="col-sm-9">
        <div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image">
    <label class="custom-file-label" for="image">Choose file</label>

</div>
      </div>
       <div class="form-group">
        <div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" name= "is_active" id="is_active" checked>
  <label class="form-check-label" for="is_active">
   Active?
  </label>
</div>
</div>
</div>
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
















 

