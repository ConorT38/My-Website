<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
session_start();
$ip = $_SESSION['ip'];


$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

             $sql ="INSERT INTO `db1410151_Conor_thompson`.`stats_CV` ( `ip`) VALUES ('$ip')";
			    if(mysqli_query($con,$sql)){
			    	
			    echo "http://www.conorthompson.ie/cv/CV.pdf";
            die;
			}
			else{
				return false;
			}

?>