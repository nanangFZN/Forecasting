<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Create Product</h1>
<!-- Content Row -->
<div class="row">

    <div class="col-xl-12 col-lg-12">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form</h6>
            </div>
            <div class="card-body">
            <form method ="POST" action="action/create.php?action=createProduct">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name Product</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nameProduct" aria-describedby="emailHelp" placeholder="name product">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price Product</label>
                    <input type="number" name="priceProduct" class="form-control" id="exampleInputPassword1" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Stock</label>
                    <input type="number" name="stockProduct" class="form-control" id="exampleInputPassword1" placeholder="stock">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="descProduct" class="form-control" id="exampleInputPassword1" placeholder="description">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Url Photo Product</label>
                    <input type="text" name="urlProduct" class="form-control" id="exampleInputPassword1" placeholder="url image">
                </div>
                <button type="submit" class="btn btn-primary">Save Data</button>
            </form>
            </div>
        </div>

        
</div>

</div>
<!-- /.container-fluid -->

</div>