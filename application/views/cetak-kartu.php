<<!DOCTYPE html>
<html><head>
  <title></title>
</head><body>
 <center><h1 class="h1 mb-2 text-gray-800"> <font face="Bookman Old Style"><?= $title; ?></h1></font></center>
<table>
     <table class="tabel-info" id="dataTable" width="100%" cellspacing="0"  >
                                    <thead>
                                        <tr> <center>
                                            <th>No.</th>
                                            <th>Nama Institusi</th>
                                            <th>Kritik</th>
                                            <th>Saran</th>
                                  
                                            </center>                                            
                                        </tr>
                                        </thead>
                                    <tfoot>
                                                                
                                    <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($kritik as $sm): ?>

                                   

  
                                        <tr>

                   <td align = "center" > <?php echo $no++ ?></td>
                <td align = "center"><?= $sm->nama_klien ?></td>                     
               <td align = "center"><?= $sm->kritik ?></td>
                <td align = "center"><?=$sm->saran ?></td>
                                     
                                 
                                           
                                        </tr>
                                   
                                       <?php endforeach; ?>
                                      
                             
                                </table>
                              </table>
                              </center>
                            </div>
</table>
</body></html>