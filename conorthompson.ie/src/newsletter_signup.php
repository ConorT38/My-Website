<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/newsletter.php";
$new = new Newsletter();
$enc = new Encryption();
$email = $_POST['email'];
$emailenc = Encryption::encrypt($email);
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

             $sql ="INSERT INTO `db1410151_Conor_thompson`.`newsletter_emails` ( `email`) VALUES ('$emailenc')";
			    if(mysqli_query($con,$sql)){
			    	session_start();
			    	if($new->Signup($email)){
			    	$_SESSION['newsletter'] = "<center><b>Thanks!</b> You will receive a newsletter every once in a while from my bot!</center>";
			    	header("Location:../#services");
			    return true;
			}
            die;
			}
			else{
				die("Mysql Error");
			}

?>