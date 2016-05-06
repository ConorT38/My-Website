<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";


class Newsletter{

public function Signup($email){
	
	$recipient = "$email";

        // Set the email subject.
        $subject = "Thanks for signing up to my newsletter!";

        // Build the email content.
        $email_content = '<!-- Inliner Build Version 4380b7741bb759d6cb997545f3add21ad48f010b -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
<!-- For development, pass document through inliner -->
  </head>
  <body style="width: 100% !important; height: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: #efefef; margin: 0; padding: 0;" bgcolor="#efefef">
<table class="body-wrap" style="width: 100% !important; height: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: #efefef; margin: 0; padding: 0;" bgcolor="#efefef"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="container" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; display: block !important; clear: both !important; max-width: 580px !important; margin: 0 auto; padding: 0;">

            <!-- Message start -->
            <table style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td align="center" class="masthead" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; color: white; background: #71bc37; margin: 0; padding: 80px 0;" bgcolor="#71bc37">

                        <h1 style="font-size: 32px; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.25; max-width: 90%; text-transform: uppercase; margin: 0 auto; padding: 0;">Hey there!</h1>

                    </td>
                </tr><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="content" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: white; margin: 0; padding: 30px 35px;" bgcolor="white">

                        <h2 style="line-height: 1.25; font-size: 28px; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; margin: 0 0 20px; padding: 0;">Message from Conor,</h2>

                        <p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;">Every now and again I\'ll update you with a newsletter on various topics and categories! Hope you enjoy!</p>

                        <table style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td align="center" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">
                                    <p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;">
                                        <a href="mailto:conorthompson213@gmail.com" class="button" style="color: white; text-decoration: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; display: inline-block; font-weight: bold; border-radius: 4px; background: #71bc37; margin: 0; padding: 0; border-color: #71bc37; border-style: solid; border-width: 10px 20px 8px;">Contact me!</a>
                                    </p>
                                </td>
                            </tr></table><p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;">Want to get a look at some blog posts? <a href="http://conorthompson.ie/Blog/" style="color: #71bc37; text-decoration: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">Go To Blog</a>.</p>

                        <p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;"><em style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">– Tuggah Mate (Conor\'s Email AI)</em></p>

                    </td>
                </tr></table></td>
    </tr><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="container" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; display: block !important; clear: both !important; max-width: 580px !important; margin: 0 auto; padding: 0;">

            <!-- Message start -->
            <table style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="content footer" align="center" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: white none; margin: 0; padding: 30px 35px;" bgcolor="white">
                        <p style="font-size: 14px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; color: #888; text-align: center; margin: 0; padding: 0;" align="center">Sent by <a href="#" style="color: #888; text-decoration: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; font-weight: bold; margin: 0; padding: 0;">info@conorthompson.ie</a>, on '.date("F j, Y, g:i a").'</p>
                        
                    </td>
                </tr></table></td>
    </tr></table></body>
</html>
';

        // Build the email headers.
        $email_headers = "From: Conor <info@conorthompson.ie>\r\n";
        $email_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        // Send the email.
        if (mail($recipient, $subject, $email_content,$email_headers,'-f '."info@conorthompson.ie")) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            return true;

            
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            $_SESSION['result'] = "Oops! Something went wrong and we couldn\'t send your message.";
            header("Location: ../#contact");
            die;
        }



}

public function newsletterUp($title,$content){

$enc = new Encryption();
$title = Encryption::encrypt($title);
$content = Encryption::encrypt($content);
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

             $sql ="INSERT INTO `db1410151_Conor_thompson`.`newsletter` ( `title`,`content`) VALUES ('$title','$content')";
			    if(mysqli_query($con,$sql)){
			    	
			    	//take emails from newsletter_emails and send them on mass
			    	 $sql1 ="SELECT email FROM `db1410151_Conor_thompson`.`newsletter_emails`";
				    if($result = mysqli_query($con,$sql1)){
				        
				        if (mysqli_num_rows($result) > 0) {
				            while($row = mysqli_fetch_assoc($result)) {
				            $email = Encryption::decrypt($row['email']);
				            $this->send_newsletter($email,$title,$content);
				    }
				    return true;
				    }
				}
			    	
			else{
				return false;
			}


}
}


public function send_newsletter($email,$title,$content){

	
	$enc = new Encryption();
	$title = Encryption::decrypt($title);
	$content = Encryption::decrypt($content);
	$recipient = "$email";

        // Set the email subject.
        $subject = "Newsletter";

        // Build the email content.
        $email_content = '<!-- Inliner Build Version 4380b7741bb759d6cb997545f3add21ad48f010b -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
<!-- For development, pass document through inliner -->
  </head>
  <body style="width: 100% !important; height: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: #efefef; margin: 0; padding: 0;" bgcolor="#efefef">
<table class="body-wrap" style="width: 100% !important; height: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: #efefef; margin: 0; padding: 0;" bgcolor="#efefef"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="container" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; display: block !important; clear: both !important; max-width: 580px !important; margin: 0 auto; padding: 0;">

            <!-- Message start -->
            <table style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td align="center" class="masthead" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; color: white; background: #71bc37; margin: 0; padding: 80px 0;" bgcolor="#71bc37">

                        <h1 style="font-size: 32px; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.25; max-width: 90%; text-transform: uppercase; margin: 0 auto; padding: 0;">Hey there!</h1>

                    </td>
                </tr><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="content" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: white; margin: 0; padding: 30px 35px;" bgcolor="white">

                        <h2 style="line-height: 1.25; font-size: 28px; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; margin: 0 0 20px; padding: 0;">'.$title.'</h2>

                        <p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;">'.$content.'</p>

                        <table style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td align="center" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">
                                    <p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;">
                                        <a href="mailto:conorthompson213@gmail.com" class="button" style="color: white; text-decoration: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; display: inline-block; font-weight: bold; border-radius: 4px; background: #71bc37; margin: 0; padding: 0; border-color: #71bc37; border-style: solid; border-width: 10px 20px 8px;">Contact me!</a>
                                    </p>
                                </td>
                            </tr></table><p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;">Want to get a look at some blog posts? <a href="http://conorthompson.ie/Blog/" style="color: #71bc37; text-decoration: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">Go To Blog</a>.</p>

                        <p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;"><em style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">– Tuggah Mate (Conor\'s Email AI)</em></p>

                    </td>
                </tr></table></td>
    </tr><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="container" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; display: block !important; clear: both !important; max-width: 580px !important; margin: 0 auto; padding: 0;">

            <!-- Message start -->
            <table style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="content footer" align="center" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: white none; margin: 0; padding: 30px 35px;" bgcolor="white">
                        <p style="font-size: 14px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; color: #888; text-align: center; margin: 0; padding: 0;" align="center">Sent by <a href="#" style="color: #888; text-decoration: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; font-weight: bold; margin: 0; padding: 0;">info@conorthompson.ie</a>, on '.date("F j, Y, g:i a").'</p>
                        
                    </td>
                </tr></table></td>
    </tr></table></body>
</html>
';

        // Build the email headers.
        $email_headers = "From: Conor <info@conorthompson.ie>\r\n";
        $email_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        // Send the email.
        if (mail($recipient, $subject, $email_content,$email_headers,'-f '."info@conorthompson.ie")) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            return true;

            
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
           return false;
        }

}

}




?>