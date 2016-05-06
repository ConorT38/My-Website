<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
session_start();
$time = $_POST['time'];
$ip = $_SESSION['ip'];
$time = intval($time);
   $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql1 ="INSERT INTO stats_time(time,last_visit,ip) VALUES('$time',NOW(),'$ip');";
    if($result = mysqli_query($con,$sql1)){
	return true;
    }

?>