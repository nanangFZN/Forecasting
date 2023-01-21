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
            <form method ="POST" action="action/create.php?action=createCake">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name Product</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nameCake" aria-describedby="emailHelp" placeholder="name product">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <select name="category" class="form-control">
                        <option value="reguler">Reguler</option>
                        <option value="mini">Mini</option>
                        <option value="es kopi susu">Es Kopi Susu</option>
                        <option value="non coffee">Non Coffee</option>
                        <option value="best deals">Best Deals</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save Data</button>
            </form>
            </div>
        </div>

        
</div>

</div>
<!-- /.container-fluid -->

</div>