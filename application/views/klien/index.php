            <!-- Begin Page Content -->
                <div class="container-fluid">
<br><br>

                    <!-- Page Heading -->

        <center> <b><h1 class="h3 mb-4 text-gray-800"><?= $title; ?> </h1></b></center>
<br>
<center><div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?=base_url(); ?>assets/img/profile/default.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$user['name'];?></h5>
        <p class="card-text"><?=$user['email'];?></p>
        <p class="card-text"><small class="text-muted">Member Since 21 March 2022</small></p>
      </div>
    </div>
  </div>
</div></center>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
