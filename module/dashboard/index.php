<?php
    include 'action/connection.php';
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                       
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Sold Product</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                        $soldQuery = "SELECT SUM(quantity) AS total FROM soldproduct";
                                                        $exe       = mysqli_query($connection,$soldQuery);
                                                        $data      = mysqli_fetch_array($exe);
                                                        echo $data['total'];
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-information text-uppercase mb-1">
                                                Products</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $product    = "SELECT COUNT(name) AS result FROM cake";
                                                    $exeProduct = mysqli_query($connection,$product);
                                                    $dataProduct= mysqli_fetch_array($exeProduct);
                                                    echo $dataProduct['result'];
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-industry fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    </div>

                    <!-- Content Row -->

                    <div class="col-md-12 col-md-12 ">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Chart Menu</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        <canvas id="myChart" style="position: relative; height:40vh; width:80vw"></canvas>
                                       
                                       
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        
                
