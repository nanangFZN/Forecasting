<h1>Product Data</h1>
<div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
        </div>
        <div class="card-body">
        <table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">ID Product</th>
      <th scope="col">Name Product</th>
      <th scope="col">Stock</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include "action/connection.php";
      $query = mysqli_query($connection,"SELECT * FROM product");
      $no=0;
      if ($query->num_rows > 0) {
        while ($data = $query->fetch_assoc()) {
          $no++;
        
    ?>
    <tr>
      <th scope="row"><?php echo $no;?></th>
      <td><?php echo $data['nameProduct'];?></td>
      <td><?php echo $data['stockProduct'];?></td>
      <td><?php echo 'Rp ' . number_format($data['priceProduct'], '0', ',', '.');?></td>
      <td>
        <div class="row justify-content-center">
          <a href="index.php?page=editProduct&&idProduct=<?php echo $data['idProduct'];?>" class="btn btn-warning m-2">Edit</a>
          <a href="action/delete.php?action=deleteProduct&&idProduct=<?php echo $data['idProduct'];?>" class="btn btn-danger m-2">Delete</a>
        </div>
      </td>
    </tr>
   <?php } } ?>
  </tbody>
</table>
        </div>
</div>
