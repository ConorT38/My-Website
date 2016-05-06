<?php
session_start();
$dep1 = $_SESSION['dep-date'];
$pickup1 = $_SESSION['pickup1'];
$dropoff1 = $_SESSION['dropoff1'];
$people = $_SESSION['people'];

if(empty($_POST['name'])||empty($_POST['number'])){
	$_SESSION['book-error'] = "You didn't fill out the form properly.";
            header("Location: ../");
            die;
}
$name = $_POST['name'];
$number = $_POST['number'];
	$recipient = "conorthompson213@gmail.com";

        // Set the email subject.
        $subject = "$name requested a taxi";

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

                        <h1 style="font-size: 32px; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.25; max-width: 90%; text-transform: uppercase; margin: 0 auto; padding: 0;">Taxi for '.$name.'</h1>

                    </td>
                </tr><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="content" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: white; margin: 0; padding: 30px 35px;" bgcolor="white">

                        <h2 style="line-height: 1.25; font-size: 28px; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; margin: 0 0 20px; padding: 0;">Taxi request,</h2>

                        <p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;">
                        <label>Phone number: <strong>'.$number.'</strong></label><br/>
                        <label>______________________________</label><br/>
							<label>Departure time: <strong>'.$dep1.'</strong></label><br/>
							<label>Departure location: <strong>'.$pickup1.'</strong></label><br/>
							<label>Dropoff location: <strong>'.$dropoff1.'</strong></label><br/>
							<label>No. of Passengers: <strong>'.$people.'</strong></label><br/>
							<label>______________________________</label><br/>';
							if(isset($_SESSION['ret-date'])){
								$email_content.= '<label>Collection time: <strong>'.$_SESSION["ret-date"].'</strong></label><br/>
							<label>Collection location: <strong>'.$_SESSION['pickup2'].'</strong></label><br/>
							<label>Dropoff location: <strong>'.$_SESSION['dropoff2'].'</strong></label><br/>';
							}
							if(!empty($_POST['comment'])){
								$email_content.= '<br/><label>Comment: <strong>'.$_POST['comment'].'</strong></label><br/><br/><br/>';
							}

                       $email_content.=  '</p><table style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td align="center" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">
                                    <p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;">
                                        <a href="tel:'.$number.'" class="button" style="color: white; text-decoration: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; display: inline-block; font-weight: bold; border-radius: 4px; background: #71bc37; margin: 0; padding: 0; border-color: #71bc37; border-style: solid; border-width: 10px 20px 8px;">Contact me!</a>
                                    </p>
                                </td>
                            </tr></table>

                        <p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;"><em style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">–Tugger (Conor\'s Email AI)</em></p>

                    </td>
                </tr></table></td>
    </tr><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="container" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; display: block !important; clear: both !important; max-width: 580px !important; margin: 0 auto; padding: 0;">

            <!-- Message start -->
            <table style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="content footer" align="center" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: white none; margin: 0; padding: 30px 35px;" bgcolor="white">
                        <p style="font-size: 14px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; color: #888; text-align: center; margin: 0; padding: 0;" align="center">Sent by <a href="#" style="color: #888; text-decoration: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; font-weight: bold; margin: 0; padding: 0;">topmarkcabs@gmail.com</a>, on '.date("F j, Y, g:i a").'</p>
                        
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
            $_SESSION['book-error'] = "Request sent, we will contact you soon relative to your request time!";
            header("Location: ../");
            die;
            
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            
        }











?>