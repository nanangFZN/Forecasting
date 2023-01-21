<h1>Data User</h1>
<div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
        </div>
        <div class="card-body">
        <table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">ID User</th>
      <th scope="col">Name User</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include 'action/connection.php';
      $sql = mysqli_query($connection,"SELECT * FROM users");
      while ($data=mysqli_fetch_array($sql)){
        
      
    ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $data['name'];?></td>
      <td><?php echo $data['username'];?></td>
    </tr>
    <?php }?>
    
  </tbody>
</table>
        </div>
</div>
