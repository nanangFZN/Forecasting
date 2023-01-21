<h1>Order Data</h1>
<div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
        </div>
        <div class="card-body">
        <table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">ID Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">Date</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
        include "action/connection.php";
        $query = mysqli_query($connection,"SELECT * FROM soldproduct join cake on cake.id=soldproduct.id_product");
        $no=0;
        if ($query->num_rows>0) {
          while ($data=mysqli_fetch_assoc($query)) {
          $no++;
          
        
    ?>
    <tr>
      <th scope="row"><?php echo $no;?></th>
      <td><?php echo $data['name'];?></td>
      <td><?php echo $data['quantity'];?></td>
      <td><?php echo date('d-M-y',strtotime($data['date']));?></td>
      <td><?php echo $data['id'];?></td>
    </tr>
    <?php } } ?>
   
  </tbody>
</table>
        </div>
</div>
