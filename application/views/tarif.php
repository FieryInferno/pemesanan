<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800"><font face="Bookman Old Style"><?= $title; ?></font></h1>

                    <!-- Page Heading -->
                   <br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                  <?= form_error('menu','<div class="alert alert-danger" role="alert"> ','</div>'); ?>
                   <?= $this->session->flashdata('message'); ?>

 <?= $this->session->flashdata('pesan'); ?>
   <?=$this->session->flashdata('notif');?>
<a class="btn btn-outline-secondary shadow mb-2" href="<?php echo base_url('Daftar_tarif/print')?>"><i class="fa fa-print"></i>&nbsp; Print</a>
                        </div>
            
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr> 
                                            <th>No.</th>
                                            <th>Jasa Siaran Iklan</th>                                    
                                            <th>Satuan</th>
                                            <th>Tarif</th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Jasa Siaran Iklan</th>
                                            <th>Satuan</th>
                                            <th>Tarif</th>
                                          
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                     <?php $no = 1; ?>
                                    <?php foreach($daftarTarif as $dt): ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $dt['jasa_siaran'] ?></td>
                                            <td><?php echo $dt['satuan'] ?></td>
                                            <td><?php echo $dt['harga'] ?></td>
                                          
                                        </tr>
                             <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModal">Masukan Data Tarif</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('daftar_tarif'); ?>" method="post">
      <div class="modal-body">
       <div class="mb-3">
      <input type="text" class="form-control" id="jasa_siaran" name= "jasa_siaran"  placeholder="Nama Jasa Siaran">
    </div>
     <div class="form-group">
    <input type="text" class="form-control" id="satuan" name= "satuan"  placeholder="Masukan Satuan Iklan">  
    </div>
         <div class="form-group">
    <input type="text" class="form-control" id="tarif" name= "tarif"  placeholder="Masukan Tarif Iklan">   
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
    foreach($daftarTarif as $dt) : $no++;?>
<div class="modal fade" id="editmodal<?php echo $dt['id_tarif'];?>" tabindex="-1" aria-labelledby="editmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodal">Form Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('daftar_tarif/proses_edit_data'); ?>" method="post">
      <input type="hidden" name="id" value="<?php echo $dt['id_tarif'];?>"></input>
      <div class="modal-body">
       <div class="mb-3">
       <form action="<?= base_url('daftar_tarif'); ?>" method="post">
      <div class="modal-body">
       <div class="mb-3">
      <input type="text" class="form-control" id="jasa_siaran" name= "jasa_siaran" value="<?php echo $dt['jasa_siaran'];?>">
    </div>
     <div class="form-group">
    <input type="text" class="form-control" id="satuan" name= "satuan" value="<?php echo $dt['satuan'];?>">   
    </div>
         <div class="form-group">
    <input type="text" class="form-control" id="tarif" name= "tarif" value="<?php echo $dt['tarif'];?>">   
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
