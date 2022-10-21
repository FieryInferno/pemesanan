<div class="container-fluid">
  <center>
    <h1 class="h3 mb-2 text-gray-800">
      <font face="Bookman Old Style">
        <?= $title; ?>
      </font>
    </h1>
  </center>
  <br>
  <div class="col-lg-12">
    <div class="card shadow mb-3">
      <div class="card-header py-3">
      <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php endif;?>
      <?= $this->session->flashdata('message'); ?>
      <?= $this->session->flashdata('pesan'); ?>
      <?= $this->session->flashdata('notif');?>
      <?php
        if ($this->session->role_id === '1') { ?>
          <a href="" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#tambahSuratPerjanjian">Tambah</a>
        <?php }
      ?>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
          <thead>
            <tr>
              <center>
                <td align="center">No.</td>
                <td align="center">Nama</td>
                <td align="center">Surat Perjanjian</td>
                <?php
                  if ($this->session->role_id === '1') { ?>
                    <td align="center">Action</td>
                  <?php }
                ?>
              </center>                                            
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              foreach($surat as $sm): ?>
                <tr>
                  <td align = "center"><?= $no++ ?></td>
                  <td ><?= $sm['name']; ?></td>
                  <td ><a href="<?= base_url('upload/' . $sm['surat_perjanjian']); ?>" download>Download <i class="fas fa-fw fa-solid fa-file"></i></a></td>
                  <?php
                    if ($this->session->role_id === '1') { ?>
                      <td>
                        <a href="" class="badge badge-primary" data-bs-toggle="modal" data-bs-target="#editSuratPerjanjian<?= $sm['id'];?>">Edit</a>
                        <a href="<?= base_url('spk/delete/' . $sm['id']); ?>" class="badge badge-danger " onclick="return confirm('yakin');" >Delete</a>
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

<div class="modal fade" id="tambahSuratPerjanjian" tabindex="-1" aria-labelledby="tambahSuratPerjanjian" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahSuratPerjanjian">Tambah Surat Perjanjian</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('spk/create'); ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <select name="user_id" id="user_id" class="form-control" required>
              <option value="">Select Klien</option>
              <?php foreach($klien as $m) :?>
                <option value="<?= $m['id']; ?>"><?= $m['name']; ?></option>
              <?php endforeach; ?>
            </select>        
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="surat_perjanjian" name="surat_perjanjian" required>
            <label class="custom-file-label" for="surat_perjanjian">Choose file</label>
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

<?php
  foreach ($surat as $sm) { ?>
    <div class="modal fade" id="editSuratPerjanjian<?= $sm['id']; ?>" tabindex="-1" aria-labelledby="editSuratPerjanjian<?= $sm['id']; ?>" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editSuratPerjanjian<?= $sm['id']; ?>">Edit Surat Perjanjian</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="<?= base_url('spk/update/' . $sm['id']); ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group">
                <select name="user_id" id="user_id" class="form-control" required>
                  <option value="">Select Klien</option>
                  <?php foreach($klien as $m) :?>
                    <option value="<?= $m['id']; ?>" <?= $sm['user_id'] === $m['id'] ? 'selected' : ''; ?>><?= $m['name']; ?></option>
                  <?php endforeach; ?>
                </select>        
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="surat_perjanjian" name="surat_perjanjian">
                <label class="custom-file-label" for="surat_perjanjian">Choose file</label>
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
