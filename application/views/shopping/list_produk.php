<h2>Daftar Produk</h2>
<?php
    foreach ($produk as $row) {
?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="kotak">
              <form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf-8">
                <a href="#"><img class="img-thumbnail" src="<?php echo base_url() . 'assets/images/'.$row['gambar']; ?>"/></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $row['jasa_siaran'];?></a>
                  </h4>
                  <h5>Rp. <?php echo number_format($row['tarif'],0,",",".");?></h5>
                  <p class="card-text"><?php echo $row['satuan']; ?></p>
                </div>
                <div class="card-footer">
                  <a href="<?php echo base_url();?>shopping/detail_produk/<?php echo $row['id_produk'];?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i> Detail</a> 
 
 
                  <input type="hidden" name="id_tarif" value="<?php echo $row['id_tarif']; ?>" />
                  <input type="hidden" name="jasa_siaran" value="<?php echo $row['jasa_siaran']; ?>" />
                  <input type="hidden" name="satuan " value="<?php echo $row['satuan ']; ?>" />
                  <input type="hidden" name="tarif" value="<?php echo $row['tarif']; ?>" />                  
                  <input type="hidden" name="qty" value="1" />
                  <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli</button>
                </div>
                </form>
              </div>
            </div>
<?php
    }
?>