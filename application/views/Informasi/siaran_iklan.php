<div class="container-fluid">
  <center>
    <h1 class="h3 mb-2 text-gray-800">
      <font face="Bookman Old Style">
        <?= $title1; ?>
      </font>
    </h1>
  </center>
  <br>
  <div class="col-lg-16">
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
        <a class="btn btn-outline-secondary shadow mb-2" href="<?php echo base_url('Penyiran/print')?>"><i class="fa fa-print"></i>&nbsp; Print</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">                    
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
            <thead>
              <tr>
                <center>
                  <td align = "center">No.</td>
                  <td align = "center">Nama Instansi</td>
                  <td align = "center">Jasa Siaran</td>
                  <td align = "center">Jenis Siaran</td>
                  <td align = "center">Tanggal Penyiaran</td>
                  <td align = "center">Tanggal Akhir Penyiaran</td>
                  <td align = "center">Waktu Siaran</td>
                  <td align = "center">Total Siaran</td>
                  <td align = "center">Programa</td>
                  <?php
                    if ($this->session->role_id === '1') { ?>
                      <td align = "center">Action</td>
                    <?php }
                  ?>
                </center>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach($pesanan as $sm): ?>
                  <tr>
                    <td align = "center"><?php echo $no++ ?></td>           
                    <td align = "center"><?php echo $sm->nama_instansi ?></td>
                    <td align = "center"><?php echo $sm->jasa_siaran ?></td>
                    <td align = "center"><?php echo $sm->jenis ?></td>
                    <td><?php echo $sm->tgl_penyiaran ?></td>
                    <td align = "center"><?php echo $sm->tgl_akhirpenyiaran ?></td>  
                    <td align = "center"><?php echo $sm->waktu_siaran ?></td>   
                    <td align = "center"><?php echo $sm->qty ?></td>  
                    <td align = "center"><?php echo $sm->programa ?></td>  
                    <?php
                      if ($this->session->role_id === '1') { ?> 
                        <td>
                          <a href="" class="badge badge-primary" data-bs-toggle="modal" data-bs-target="#editInformasi<?php echo $sm->id_detail ?>"><i class="fas fa-pen">&nbsp;Edit</i></a>                                 
                          <a href="<?= base_url(); ?>penyiaran/delete/<?php echo $sm->id_detail ?>" class="badge badge-danger " onclick="return confirm('yakin');" ><i class="fas fa-trash">&nbsp;Delete</i></a>
                        </td>
                      <?php }
                    ?>
                  </tr>
                <?php endforeach;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  foreach ($pesanan as $sm) { ?>
    <div class="modal fade" id="editInformasi<?= $sm->id_detail; ?>" tabindex="-1" aria-labelledby="editInformasi<?= $sm->id_detail; ?>" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editInformasi">Form Edit Data Informasi Penyiaran</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="<?= base_url('penyiaran/update/' . $sm->id_detail); ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="mb-3">
                <label>Nama Instansi</label>
                <input type="text" class="form-control" id="title" name= "title" value="<?php echo $sm->nama_instansi ?>" readonly>
              </div>    
              <div class="mb-3">
                <label>Jasa Siaran</label>
                <input type="text" class="form-control" id="title" name= "title" value="<?php echo $sm->jasa_siaran ?>" readonly>
              </div>    
              <div class="mb-3">
                <label>Jenis Siaran</label>
                <input type="text" class="form-control" id="title" name= "title" value="<?php echo $sm->jenis ?>" readonly>
              </div>    
              <div class="mb-3">
                <label>Tanggal Penyiaran</label>
                <input type="date" class="form-control" id="tgl_penyiaran" name= "tgl_penyiaran" value="<?php echo $sm->tgl_penyiaran?>" >
              </div> 
              <div class="mb-3">
                <label>Tanggal Akhir Penyiaran</label>
                <input type="date" class="form-control" id="tgl_akhirpenyiaran" name= "tgl_akhirpenyiaran" value="<?php echo $sm->tgl_akhirpenyiaran ?>">
              </div> 
              <div class="mb-3">
                <label>Waktu Siaran</label>
                <input type="time" class="form-control" id="waktu_siaran" name= "waktu_siaran" value="<?php echo $sm->waktu_siaran ?>">
              </div> 
              <div class="mb-3">
                <label>Total Siaran</label>
                <input type="text" class="form-control" id="title" name= "title" value="<?php echo $sm->qty ?>" readonly>
              </div> 
              <div class="mb-3">
                <label >Programa</label>
                <input type="text" class="form-control" id="title" name= "title" value="<?php echo $sm->programa ?>" readonly>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php }
?>
