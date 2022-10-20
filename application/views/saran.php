
                 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <center>  <h1 class="h3 mb-2 text-gray-800"> <font face="Bookman Old Style"><?= $title; ?></h1></font></center>
                    <br>
  <div class="col-lg-12">
                    <!-- DataTales Example -->
                 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif;?>
                 
                   <?= $this->session->flashdata('message'); ?>

 <?= $this->session->flashdata('pesan'); ?>
   <?=$this->session->flashdata('notif');?>
<a href="" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#newSubMenuModal">Add New Submenu</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                          
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
                                    <thead>
                                        <tr> <center>
                                            <td align = "center">No.</td>
                                            <td align = "center">Nama Institusi</td>
                                            <td align = "center">Kritik</td>
                                            <td align = "center" >Saran</td>
                                            <td align = "center" >Action</td>
                                            </center>                                            
                                        </tr>
                                        </thead>
                                    <tfoot>
                                                                
                                    <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($saran as $sm): ?>

                                   

  
                                        <tr>

                    <td align = "center" > <?php echo $no++ ?></td>
                <td align = "center"><?= $sm['nama_klien']; ?></td>                     
               <td align = "center"><?= $sm['kritik']; ?></td>
                <td align = "center"><?=$sm['saran']; ?></td>
                      <td>                       
<a href="" class="badge badge-primary" data-bs-toggle="modal" data-bs-target="#editSubMenu<?php echo $sm['id'];?>">Edit</a>

                                  
    <a href="<?= base_url(); ?>saran_masukan/delete/<?= $sm['id']; ?>" class="badge badge-danger " onclick="return confirm('yakin');" >Delete</a>
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

     <!-- modal -->

<!-- Modal Tambah Data-->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModal">Masukan Kritik & Saran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('saran_masukan'); ?>" method="post">
      <div class="modal-body">
       <div class="modal-body">
      <div class="form-group">
    <input type="text" class="form-control" id="nama_klien" name= "nama_klien" placeholder="Masukan Nama Institusi Anda">   
    </div>
       <div class="mb-3">
      <input type="text" class="form-control" id="kritik" name= "kritik" placeholder="Masukan Kritik Anda">
    </div>
    <div class="form-group">     
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="saran" name= "saran" placeholder="Masukan Saran Anda">   
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
    foreach($saran as $sm) : $no++;?>

<div class="modal fade" id="editSubMenu<?php echo $sm['id'];?>" tabindex="-1" aria-labelledby="editSubMenu" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editSubMenu">Form Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('saran_masukan/proses_edit_data'); ?>" method="post">
       <input type="hidden" name="id" value="<?php echo $sm['id'];?>"></input>
      <div class="modal-body">
       <div class="mb-3">
      <div class="form-group">
    <input type="text" class="form-control" id="nama_klien" name= "nama_klien" value="<?php echo $sm['nama_klien'];?>">   
    </div>
    <div class="form-group">
       <div class="mb-3">
      <input type="text" class="form-control" id="kritik" name= "kritik" value="<?php echo $sm['kritik'];?>">
        
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="saran" name= "saran" value="<?php echo $sm['saran'];?>">   
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









