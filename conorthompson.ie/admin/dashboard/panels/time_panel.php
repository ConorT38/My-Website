  <?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
   $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql1 ="SELECT SUM(`time`) as `time`,last_visit FROM `db1410151_Conor_thompson`.`stats_time`  WHERE DATE(last_visit) = DATE(NOW());";
    if($result = mysqli_query($con,$sql1)){
        
            while($row = mysqli_fetch_assoc($result)) {
            $seconds = intval($row['time']);
        }
    }
$hours = floor($seconds / 3600);
$mins = floor(($seconds - ($hours*3600)) / 60);
$secs = floor($seconds % 60);
$time = $hours.":".$mins.":".$secs;
  ?>
<div class="col-lg-2 col-xs-6">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                <h2 class="m-b-none">
                                    <?php echo $time;?> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span>
                                </h2>
                                <div class="small">Time visited Today:</div>
                                <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white"><?php echo date('H:i');?></span> </div>
                            </div>
                        </div>
                    </div>