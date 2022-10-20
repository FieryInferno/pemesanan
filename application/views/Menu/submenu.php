
                 

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
                                            <td align = "center">Title</td>
                                            <td align = "center" >Menu</td>
                                            <td align = "center" >Url</td>
                                            <td align = "center" >Icon</td>
                                            <td align = "center" >Active</td>
                                            <td align = "center" >Action</td>
                                            </center>                                            
                                        </tr>
                                        </thead>
                                    <tfoot>
                                                                
                                    <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($subMenu as $sm): ?>                                   

  
                                        <tr>

                    <td align = "center" > <?php echo $no++ ?></td>
                                     
               <td align = "center"><?= $sm['title']; ?></td>
                <td align = "center"><?=  $sm['menu']; ?></td>
                   <td align = "center"><?=  $sm['url']; ?></td>
                    <td><?= $sm['icon']; ?></td>
                      <td align = "center"><?= $sm['is_active']; ?>   
                      <td>                       
<a href="" class="badge badge-primary" data-bs-toggle="modal" data-bs-target="#editSubMenu<?php echo $sm['id'];?>">Edit</a>

                                  
    <a href="<?= base_url(); ?>menu/delete1/<?= $sm['id']; ?>" class="badge badge-danger " onclick="return confirm('yakin');" >Delete</a>
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
        <h5 class="modal-title" id="newSubMenuModal">Add New Sub Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('menu/subMenu'); ?>" method="post">
      <div class="modal-body">
       <div class="mb-3">
      <input type="text" class="form-control" id="title" name= "title" placeholder="Sub Menu Title">
    </div>
    <div class="form-group">
      <select name="menu_id" id="menu_id" class="form-control"> 
        <option value="">Select Menu</option>
        <?php foreach($subMenu as $m) :?>
          <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
        <?php endforeach; ?>
      </select>        
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="url" name= "url" placeholder="Sub Menu Url">   
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="icon" name= "icon" placeholder="Sub Menu Icon">   
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
    foreach($subMenu as $dt) : $no++;?>

<div class="modal fade" id="editSubMenu<?php echo $dt['id'];?>" tabindex="-1" aria-labelledby="editSubMenu" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editSubMenu">Form Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('menu/proses_edit_data_submenu'); ?>" method="post">
       <input type="hidden" name="id" value="<?php echo $dt['id'];?>"></input>
      <div class="modal-body">
       <div class="mb-3">
      <input type="text" class="form-control" id="title" name= "title" value="<?php echo $dt['title'];?>">
    </div>
    <div class="form-group">
    <select name="menu_id" id="menu_id" class="form-control"> 
    <option value="">Select Menu</option>
    <?php foreach($subMenu as $m) :?>
    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
    <?php endforeach; ?>
    </select>        
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="url" name= "url"  value="<?php echo $dt['url'];?>">   
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="icon" name= "icon" value="<?php echo $dt['icon'];?>">   
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









