<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Entry Selling</h1>
<!-- Content Row -->
<div class="row">

    <div class="col-xl-12 col-lg-12">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form</h6>
            </div>
            <div class="card-body">
            <form method ="POST" action="action/create.php?action=createSoldProduct">
                <label>Menu</label>
                <select name="menuSold" class="form-control mb-2">
                <?php
                include "action/connection.php";
                $query = mysqli_query($connection,"SELECT * FROM cake");
                $no=0;
                if ($query->num_rows > 0) {
                    while ($data = $query->fetch_assoc()) {
                    $no++;
                    
                ?>
                <option value="<?php echo $data['id'];?>"><?php echo $data['name'];?></option>
                <?php } } ?>
                </select>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Sold (pcs)</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="soldProduct" aria-describedby="emailHelp" placeholder="0">
                </div>
                <label>Month</label>
                <!--<select name="month" class="form-control mb-2">
                    <option value="January">January</option>
                    <option value="februari">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="June">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                </select>-->
                <input type="date" min="2022-01" class="form-control mb-2" name="dateSold">
                
                <button type="submit" class="btn btn-primary">Save Data</button>
            </form>
            </div>
        </div>

        
</div>

</div>
<!-- /.container-fluid -->

</div>