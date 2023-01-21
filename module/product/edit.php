<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Product</h1>
<!-- Content Row -->
<div class="row">

    <div class="col-xl-12 col-lg-12">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form</h6>
            </div>
            <div class="card-body">
                <?php 
                      include 'action/connection.php';
                      $idProduct = $_GET["idProduct"];
                      $query = mysqli_query($connection,"SELECT * FROM product WHERE idProduct='$idProduct'");
                      while ($data = mysqli_fetch_array($query)) {
                        
                       
                ?>
            <form method ="POST" action="action/edit.php?action=editProduct&&idProduct=<?php echo $data['id'];?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name Product</label>
                    <input type="text" value="<?php echo $data['nameProduct'];?>" class="form-control" id="exampleInputEmail1" name="nameProduct" aria-describedby="emailHelp" placeholder="name product">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price Product</label>
                    <input type="number" name="priceProduct" value="<?php echo $data['priceProduct'];?>" class="form-control" id="exampleInputPassword1" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Stock</label>
                    <input type="number" name="stockProduct" value="<?php echo $data['stockProduct'];?>" class="form-control" id="exampleInputPassword1" placeholder="stock">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="descProduct" value="<?php echo $data['descProduct'];?>" class="form-control" id="exampleInputPassword1" placeholder="description">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Url Photo Product</label>
                    <input type="text" name="urlProduct" value="<?php echo $data['urlProduct'];?>" class="form-control" id="exampleInputPassword1" placeholder="url image">
                </div>
                <button type="submit" class="btn btn-primary">Save Data</button>
            </form>
            <?php } ?>
            </div>
        </div>

        
</div>

</div>
<!-- /.container-fluid -->

</div>