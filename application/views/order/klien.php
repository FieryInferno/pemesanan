
                 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <center>  <h1 class="h3 mb-2 text-gray-800"> <font face="Bookman Old Style"><?= $title; ?></h1></font></center>
                    <br>
                    <!-- DataTales Example -->
                  <div class="card shadow mb-">
                                <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Memesan Iklan</h6>
                                </div>
                                <div class="card-body">
                                 <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-9 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                               <h5 class="display-6 mb-3">Jasa Penyiaran</h5>

                <p>Jasa siaran pada LPP RRI Jayapura terdiri atas 2 hal yaitu Prime Time & Reguler Time.</p>
                                </div>
                            </div>
                               </div>

     <?php foreach($tarif as $sm): ?>

<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">

            <?php echo form_open('pesan/add');

            echo form_hidden('id_tarif', $sm['id_tarif'] );
             echo form_hidden('qty', 1);
             echo form_hidden('price',  $sm['tarif']);
              echo form_hidden('name',  $sm['jasa_siaran']);
 echo form_hidden('redirect_page',str_replace('index.php/','',current_url()));




            ?>
            <div class="row p-2 bg-white border rounded mt-6">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?=base_url('assets2/img/time.jpg'); ?>"></div>
                <div class="col-md-6 mt-1">
                    <h5><?php echo $sm['jasa_siaran'] ?></h5>
                    <div class="d-flex flex-row">
                      
                    </div>
        
                    <p class="text-justify text-truncate para mb-0"><?php echo $sm['keterangan'] ?><br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">Rp.<?= number_format($sm['tarif'], 0,',','.') ?></h4>
                    </div>

     <div class="d-flex flex-column mt-4"><a class="btn btn-outline-primary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#editSubMenu<?php echo $sm['id_tarif'];?>">
     <i class="fas fa-eye">&nbsp; Detail</i></a>
     <button type="submit" class="btn btn-outline-primary btn-sm mt-2 swalDefaultSuccess" > 
<i class="fas fa-cart-plus">&nbsp; Pesan</i></button>
     </div>

    
     </div>
      <?php echo form_close(); ?>  
                </div>          
         

                        
                           
 
                     
  </div>   

<?php endforeach ; ?>

</div>
</div>
    <?php foreach($tarif as $sm): ?>

<div class="modal fade" id="editSubMenu<?php echo $sm['id_tarif'];?>" tabindex="-1" aria-labelledby="editSubMenu" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editSubMenu">Detail Tarif <?php echo $sm['jasa_siaran'] ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
       <input type="hidden" name="id_tarif" value="<?php echo $sm['id_tarif'];?>"></input>
      <div class="modal-body">
       <div class="mb-3">
         <center><div class="col-md-6 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?=base_url('assets2/img/1.jpg'); ?>"></div></center>
                

           <center> <p><?php echo $sm['keterangan'] ?></p></center>
          
                       <center><h4 class="mr-1"><?php echo $sm['harga'] ?></h4></center>

  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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




