            <!-- Begin Page Content -->
                <div class="container-fluid">

<center> <b><h1 class="h3 mb-4 text-gray-800"><font face="Bookman Old Style">EDIT PROFIL ADMIN</font></h1></b></center>
  <div class="main-body">
   <div class="container-xl px-4 mt-4"> 
            <!-- Account details card-->
             <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
    <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" >
    </div>
    </div>
    <!-- Form Group (username)-->
    <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>" >
    </div>
    </div>
     <div class="row mb-3">
     <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
    </div>
    </div>
    <div class="row mb-3">
     <label for="no_telepon" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $user['no_telepon']; ?>" >
    </div>
    </div>
      <div class="row mb-3">
    <div class="col-sm-2">Picture</div>
    <div class="col-sm-10">
        <div class="row">
         <div class="col-sm-3">
         <img src="<?= base_url('assets/img/') . $user['image']; ?>" class="img-thumbnail">
    </div>

    <div class="col-sm-9">
        <div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image">
    <label class="custom-file-label" for="image">Choose file</label>
  </div>
    </div>
    </div>
    </div>
    </div>

    
   <div class="row mb-10">
    <div class="col-sm-3 text-secondary" >
     <input type="button" class="btn btn-primary px-4" value="Save Changes">
     
      </div>
    </div>
  </div>
</div></center>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
