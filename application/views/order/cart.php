
                 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <center>  <h1 class="h3 mb-2 text-gray-800"> <font face="Bookman Old Style"><?= $title; ?></h1></font></center>

                   <?= $this->session->flashdata('message'); ?>
<br>
<br>
   <div class="col-sm-12">
                <div class="card position-relative">
                                
                                <div class="card-body">
                                    <div class="mb-3">
                                    <ul class="breadcrumb">
<li><a href="<?php echo base_url('pesan'); ?>">Tarif Iklan</a></li>
  <li>Cart</li>
  <li><a href="#">Konfirmasi</a></li>
  <li><a href="#">Selesai</a></li>
</ul>
                        </ul>
<?php
    if ($cart = $this->cart->contents())
        {
 ?>

<?php echo form_open('pesan/update'); ?>

<table class="table " cellpadding="6" cellspacing="1" style="width:100%" align="center">

<tr>    
        <td align="center"><b>Total Siaran Iklan</b></td>
        <td align="center"><b>Jasa Siaran Iklan</b></td>
         <td align="center"><b>ID Tarif Iklan</b></td>
        <td align="center"><b>Tarif Iklan</b></td>
        <td align="center"><b>Total Harga</b></td>
        <td align="center"><b>Action</b></td>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>
      
        <tr>

<td align="center"><?php echo form_input(array(
'name' => $i.'[qty]', 
'value' => $items['qty'], 
'maxlength' => '3',
'min' => '0',
'size' => '5',
'type'=>'number',
'class'=>'form-control')); ?>
</td>

  <td align="center"><?php echo $items['name']; ?></td>
   <td align="center"><?php echo $items['id']; ?></td>
 <td align="center">Rp.<?php echo number_format($items['price'], 0,',','.'); ?></td>
 <td align="center">Rp.<?php echo number_format($items['subtotal'], 0,',','.'); ?></td>
<td align = "center"><a href="<?= base_url('pesan/delete/' .$items['rowid'])?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
        </tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>

      
         <td colspan="3"> </td>
       <h4> <td ><strong><h5> Total Pembayaran:&nbsp;&nbsp;</strong>Rp.<?php echo number_format($this->cart->total(), 0,',','.'); ?></h5></td>
</tr>

</table>
<br>

 <div class="cart-footer text-center">
<button type="submit" class="btn btn-info my-1"><i class="ri-save-line mr-2"></i>Update Cart</button>
<a href="<?= base_url('order/clear') ?>" class="btn btn-success my-1" ><i class="fa fa-recycle"></i>&nbsp;Clear Cart</a>
<a href="<?php echo base_url('Checkout'); ?>" class="btn btn-success my-1">Konfirmasi<i class="ri-arrow-right-line ml-2"></i></a>
<?php echo form_close()?>


</div>
</div>

</div>
</div>
</div>
</div>
<?php
        }
    else
        {
            echo "<h3>Keranjang Belanja masih kosong</h3>";
        }
?>