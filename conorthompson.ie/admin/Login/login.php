<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/PassHash.php";
$email = $_POST['username'];

$username1 = hash_email($email);
$sql= "SELECT * FROM admin WHERE u='$username1'";
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if($res = mysqli_query($con,$sql)){
	if (mysqli_num_rows($res) > 0) {

while($row = mysqli_fetch_assoc($res)){
	$password2 = $row['p'];
if(validate_password($_POST['password'],$password2)){
	session_start();
	$_SESSION['admin'] = $email;
	$_SESSION['fname'] = $row['f'];
	echo "<div class='alert alert-success fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong></div>";
}
else{
	echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Wrong Password</strong></div>";
    }
  }
}
else{
	echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>User doesn't exist!</strong></div>";
}
}
else{
	echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>User doesn't exist!</strong></div>";
}
?>