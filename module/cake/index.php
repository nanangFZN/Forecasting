<h1>Products Data</h1>
<div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
        </div>
        <div class="card-body">
        <table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Category</th>
      <th scope="col">Name</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        include "action/connection.php";
        $query = mysqli_query($connection,"SELECT * FROM cake Order By kategori");
        $no=0;
        if ($query->num_rows > 0) {
          while ($data = $query->fetch_assoc()) {
            $no++;
    ?>
    <tr>
      <th scope="row"><?php echo $no;?></th>
      <td><?php echo $data['kategori'];?></td>
      <td><?php echo $data['name'];?></td>
      <td><a href="action/delete.php?action=deleteCake&id=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php } } ?>
  </tbody>
</table>
        </div>
</div>
