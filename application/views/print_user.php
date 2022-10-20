   <!-- Begin Page Content -->
                <div class="container-fluid">

<center><h1 class="h1 mb-2 text-gray-800"> <font face="Bookman Old Style"><?= $title; ?></h1></font></center>
                  
                    <br>
                    <br>
                

               
                  
                       
                

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               

  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Role</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Active</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
   <?php $no = 1; ?>
   <?php foreach($print as $sm): ?>
    <tr>
      <td> <?php echo $no++ ?></td>
      <td><?= $sm->name ?></td>
      <td><?= $sm->email ?></td>
<td ><img alt="image" height="70" width="70" class="img-profile rounded-circle" src =" <?=base_url('assets/img/profile/').  $sm->image ?>"></td>
     
      <td><?= $sm->role_id ?></td>
      <td><?= $sm->alamat ?></td>
        <td><?= $sm->no_telepon ?></td>
      
      <td><?= $sm->is_active ?></td>
    </tr>
      <?php endforeach; ?>
    
  </tbody>
</table>