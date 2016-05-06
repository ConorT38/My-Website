<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
   $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql1 ="SELECT COUNT(`id`) as `downloads` FROM `db1410151_Conor_thompson`.`stats_CV`;";
    if($result = mysqli_query($con,$sql1)){
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            $total = intval($row['downloads']);
        }
      }else{
        $total = 0;
      }
    }else{
        $total = "Failed to fetch...";
      }
  $time = date("H:i");

?>


<div class="panel panel-b-accent m-t-sm">
                            <div class="panel-body text-center p-m">
                                <h2 class="font-light">
                                    <?php echo $total;?> downloads
                                </h2>
                                <small>Total downloads since setup.</small>
                                <br>
                               <span class="slight"><i class="fa fa-play fa-rotate-270 c-white"> </i> <?php $t = intval($total)/100; echo$t?>%</span>
                                <div class="sparkline7 m-t-xs"><canvas width="488" height="75" style="display: inline-block; width: 488px; height: 75px; vertical-align: top;"></canvas></div>
                            </div>
                        </div>