<h1>Forecast</h1>
<div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
        </div>
       <!-- <div class="card-body">
            <form class="mb-3">
                <input type="hidden" name="page" value="forecastData">
            <select name="cake" class="form-control">
            <?php 
                 include 'action/connection.php';
                 $sql = mysqli_query($connection,"SELECT * FROM cake");
                 foreach ($sql as $key) {
                    
                ?>
                <option value="<?php echo $key['id'];?>"><?php echo $key['name'];?></option>
                <?php } ?>
            </select>
            <div class="row mt-2">
            <button type="submit" class="btn btn-primary m-2">Submit</button>
            <a href="?page=forecastData" class="btn btn-warning m-2">Reset</a>
            </form>
            </div>-->
            
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Month</th>
      <th scope="col">QTY</th>
      <th scope="col">Forecast</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $data = array();
    $year = "2022";
      include 'action/connection.php';
      for ($i=1; $i <= 12; $i++) {
        $month = $i < 10 ? "0".$i : $i;
        if (isset($_GET['cake'])) {
            $sql = mysqli_query($connection,"SELECT * FROM soldproduct where id_product = '".$_GET['cake']."' and date like '".$year."-".$month."%'");
        }else{
            $sql = mysqli_query($connection,"SELECT * FROM soldproduct where date like '".$year."-".$month."%'");
        }
      $qty = 0;
      foreach ($sql as $row) {
        $qty += $row['quantity'];
      }
      $data['qty'][$i] = $qty;
    ?>
    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $year."-".$month;?></td>
      <td><?php echo $qty;?></td>
      <td>
        <?php
            $request = 2;
            $tempqty = 0;
            for ($m = ($i - $request); $m < $i; $m++) { 
                $tempqty += @$data['qty'][$m] == null ? 0 : $data['qty'][$m];
                // echo @$data['qty'][$m];
                // echo " ";
            }
            echo round($tempqty/$request);
        ?>
      </td>
    </tr>
    <?php 
      }
?>
    
  </tbody>
  </table>
        </div>
</div>
