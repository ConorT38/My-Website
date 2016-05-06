   <?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
   $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql1 ="SELECT COUNT(`m_id`) as `users` FROM `db1410151_Conor_thompson`.`stats_mobile`;";
    if($result = mysqli_query($con,$sql1)){
      if (mysqli_num_rows($result) > 0) {
        
            while($row = mysqli_fetch_assoc($result)) {
            $view1 = intval($row['users']);
        }
      }else{
        $view1 = 0;
      }
    }

    $sql1 ="SELECT COUNT(`d_id`) as `users` FROM `db1410151_Conor_thompson`.`stats_desktop`;";
    if($result = mysqli_query($con,$sql1)){
      if (mysqli_num_rows($result) > 0) {
        
            while($row = mysqli_fetch_assoc($result)) {
            $view2 = intval($row['users']);
        }
      }else{
        $view2 = 0;
      }
    }
$views = $view1 + $view2;
  ?>

  <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body">
                                <h1 class="m-t-md m-b-xs" style="margin-top: 30px">
                                    <i class="pe pe-7s-global text-warning"> </i>
                                    <?php echo $views;?> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span>
                                </h1>
                                <div class="small">
                                    <span class="c-white">Total users</span>
                                </div>
                                <div class="m-t-sm">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <small class="c-white">
                                            </small>
                                            <div class="sparkline3"><canvas width="498" height="70" style="display: inline-block; width: 498px; height: 70px; vertical-align: top;"></canvas></div>
                                            <small class="slight">
                                            </small>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>