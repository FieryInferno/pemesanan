<center> <b><h1 class="h3 mb-4 text-gray-800"><font face="Bookman Old Style">PROFIL ADMIN</font></h1></b></center>
<br>
<div class="container">
    <div class="main-body">
    
          
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url(); ?>assets/img/profile/default.jpg" alt="Admin" class="rounded-circle" width="200">
                    <div class="mt-3">
                      <h4><?=$user['name'];?></h4>
                      <br>
          
           
                  
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                
                  </li>
                 
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$user['name'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?=$user['alamat'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$user['email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$user['no_telepon'];?>
                    </div>
                  </div>
                  <hr>
                
                
                  <div class="row">
                    <div class="col-sm-12">
<a class="btn btn-info " target="__blank" href="<?=base_url(); ?> Profil_klien/edit">Edit</a>



                    </div>

                  </div>
                </div>
              </div>

           </div>
</div>