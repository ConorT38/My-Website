<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
$enc = new Encryption();
ini_set('display_errors', 1); 
error_reporting(E_ALL);
$name = Encryption::encrypt($_POST['name']);
$email = Encryption::encrypt($_POST['email']);
$comment = Encryption::encrypt($_POST['comment']);
$id = $_POST['id'];     

            $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="INSERT INTO comments(`comment`,`b_id`,`email`,`name`,`time`) VALUES('$comment','$id','$email','$name',NOW())";
                  if($result = mysqli_query($con,$sql)){
                    echo "success!";
    }else{
        die("Something went horribly, horribly wrong!");
    }




?>