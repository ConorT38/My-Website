  <?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
   $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql1 ="SELECT COUNT(`m_id`) as `users`, DATE_FORMAT(`last_visit`,'%H:%i') as `time` FROM `db1410151_Conor_thompson`.`stats_mobile`  WHERE DATE(last_visit) = DATE(NOW());";
    if($result = mysqli_query($con,$sql1)){
      if (mysqli_num_rows($result) > 0) {
        
            while($row = mysqli_fetch_assoc($result)) {
            $view1 = intval($row['users']);
            $time1 = $row['time'];
        }
      }else{
        $view1 = 0;
      }
    }

    $sql1 ="SELECT COUNT(`d_id`) as `users`,DATE_FORMAT(`last_visit`,'%H:%i') as `time` FROM `db1410151_Conor_thompson`.`stats_desktop`  WHERE DATE(last_visit) = DATE(NOW());";
    if($result = mysqli_query($con,$sql1)){
      if (mysqli_num_rows($result) > 0) {
        
            while($row = mysqli_fetch_assoc($result)) {
            $view2 = intval($row['users']);
            $time2 = $row['time'];
        }
      }else{
        $view2 = 0;
      }
    }
$views = $view1 + $view2;
if($time1 == ""){
  $time = $time2;
}else if($time2==""){
  $time = $time1;
}else{
  $time = date("H:i");
}

  ?>


<div class="col-lg-2 col-xs-6">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                <h2 class="m-b-none">
                                    <?php echo $views;?> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span>
                                </h2>
                                <div class="small">Todays users</div>
                                <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white"><?php echo $time;?></span> </div>
                            </div>
                        </div>
                    </div>