    <div class="container-fluid">

                    <!-- Page Heading -->
<center> <b><h1 class="h3 mb-4 text-gray-800"><font face="Bookman Old Style"><?= $title1; ?></font></h1></b></center>
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
   
  <?php echo form_open_multipart('Penyiaran/edit');?>

            <!-- Account details card-->
            <div class="card mb-9">
                <div class="card-header">Informasi Penyiaran Details</div>
                <div class="card-body">

                    <form>
    <div class="row mb-3">
    <label for="nama_instansi" class="col-sm-2 col-form-label">Nama Instansi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" 
      value="<?= $detail['nama_instansi']; ?>" readonly >
      <?= form_error('nama_instansi','<small class="text-danger pl-3">','</small>'); ?>
    </div>
    </div>
    <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Jasa Siaran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat" name="alamat" 
      value="<?= $order['jasa_siaran']; ?>" readonly>
       <?= form_error('alamat','<small class="text-danger pl-3">','</small>'); ?>

    </div>
    </div>
    <div class="row mb-3">
     <label for="no_telepon" class="col-sm-2 col-form-label">Jenis Siaran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?=$info['jenis']; ?>" readonly>
    </div>
    </div>
     <div class="row mb-3">
     <label for="tgl_penyiaran" class="col-sm-2 col-form-label">Tanggal Penyiaran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tgl_penyiaran" name="tgl_penyiaran" 
      value="<?=$info['tgl_penyiaran']; ?>" >
    </div>
    </div>
     <div class="row mb-3">
     <label for="tgl_akhirpenyiaran" class="col-sm-2 col-form-label">Tanggal Akhir Penyiaran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tgl_akhirpenyiaran" name="tgl_akhirpenyiaran" 
      value="<?=$info['tgl_akhirpenyiaran']; ?>" >
    </div>
    </div>
    <div class="row mb-3">
     <label for="waktu_siaran" class="col-sm-2 col-form-label">Waktu Siaran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="waktu_siaran" name="waktu_siaran" 
      value="<?=$info['waktu_siaran']; ?>" >
    </div>
    </div>
   
  <div class="row mb-3">
     <label for="waktu_siaran" class="col-sm-2 col-form-label">Total Siaran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="waktu_siaran" name="waktu_siaran" 
      value="<?=$info['waktu_siaran']; ?>"readonly>
    </div>
    </div>
     <div class="row mb-3">
     <label for="waktu_siaran" class="col-sm-2 col-form-label">Programa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="waktu_siaran" name="waktu_siaran" 
      value="<?=$info['waktu_siaran']; ?>"readonly>
    
    
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
                      
                </div>
            </div>
        </div>

                </div>

             </div>


