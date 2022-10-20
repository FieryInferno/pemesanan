<div class="container-fluid">
  <center> <b><h1 class="h3 mb-4 text-gray-800"><font face="Bookman Old Style">EDIT PROFIL ADMIN</font></h1></b></center>
  <div class="container-xl px-4 mt-4">
    <?php echo form_open_multipart('admin/editprofile');?>
      <div class="card mb-9">
        <div class="card-header">Account Details</div>
          <div class="card-body">
            <form>
              <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" >
                  <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                </div>
              </div>
              <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>" >
                  <?= form_error('alamat','<small class="text-danger pl-3">','</small>'); ?>
                </div>
              </div>
              <div class="row mb-3">
                <label for="no_telepon" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $user['no_telepon']; ?>" >
                  <?= form_error('no_telepon','<small class="text-danger pl-3">','</small>'); ?>
                </div>
              </div>
              <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-3">
                    <?php if($user['gambar'] !=null) { ?>
                      <img src="<?= base_url('assets/img/profile/'.$user['gambar'])?>" class="img-thumbnail">
                  </div>
                  <?php } ?>
                    <div class="col-sm-9">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Choose file</label>
                      </div>
    </div>
    </div>
    </div>
    </div>
    <form action="<?php echo base_url().'index.php/upload/upload_image'?>" method="post" enctype="multipart/form-data">
       
<center>
<div class="form-group justify-content-end">
    <div class="col-sm-10 " >
    <button type="submit" class="btn btn-primary ">Edit</button>
</div>
    </div>
    </center>
    <?php echo form_close(); ?> 
                      
                </div>
            </div>
        </div>


                </div>

             </div>