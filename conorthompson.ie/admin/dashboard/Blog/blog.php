<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

$title=$_POST['title'];
$content = $_POST['content'];
$enc = new Encryption();
$title = Encryption::encrypt($title);
$tag = $_POST['tag'];
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

             $sql ="INSERT INTO `db1410151_Conor_thompson`.`blog` ( `title`,`content`,`tag`) VALUES ('$title','$content','$tag')";
			    if(mysqli_query($con,$sql)){
				}	    	
			else{
				return false;
			}


?>


