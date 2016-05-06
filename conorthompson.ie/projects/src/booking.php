<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
if(!empty($_POST['dep-date']) && !empty($_POST['pickup']) && !empty($_POST['dropoff']) && !empty($_POST['people'])){
session_start();
$dep1 = $_POST['dep-date'];
$pickup1 = $_POST['pickup'];
$dropoff1 = $_POST['dropoff'];
$people = $_POST['people'];

$_SESSION['dep-date'] = $dep1;
$_SESSION['pickup1'] = $pickup1;
$_SESSION['dropoff1'] = $dropoff1;
$_SESSION['people'] = $people;

if(!empty($_POST['ret-date']) && !empty($_POST['pickup2']) && !empty($_POST['dropoff2'])){
$dep2 = $_POST['ret-date'];
$pickup2 = $_POST['pickup2'];
$dropoff2 = $_POST['dropoff2'];
$_SESSION['ret-date'] = $dep2;
$_SESSION['pickup2'] = $pickup2;
$_SESSION['dropoff2'] = $dropoff2;
}
}else{
	session_start();
	$_SESSION['book-error'] = "Please fill in the form correctly!";
	header("Location: ../");
	die;
}


?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="Leixlip, TopMark Cabs, Hotels, Night">
	<meta name="description" content="Taxi cab company, Leixlip website ">
	<meta name="author" content="Conor Thompson ">
	
	<title>TopMark Cabs - Leixlip</title>
	
	<link rel="stylesheet" href="../Transfers - Home_files/styler.css">
	<link rel="stylesheet" href="../Transfers - Home_files/theme-pink.css" id="template-color">
	<link rel="stylesheet" href="../Transfers - Home_files/style.css">
	<link rel="stylesheet" href="../Transfers - Home_files/animate.css">
	<link href="../Transfers - Home_files/css" rel="stylesheet" type="text/css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">
</style></head>
  
  <body class="home">

		<!-- Preloader -->
		<div class="preloader" style="display: none;">
			<div id="followingBallsG">
				<div id="followingBallsG_1" class="followingBallsG"></div>
				<div id="followingBallsG_2" class="followingBallsG"></div>
				<div id="followingBallsG_3" class="followingBallsG"></div>
				<div id="followingBallsG_4" class="followingBallsG"></div>
			</div>
		</div>
		<header class="header" role="banner">
			<div class="wrap"> 
				<!-- Logo -->
				<div class="logo">
					<a href="../" title="Transfers"><img src="../Transfers - Home_files/images/logo.png" alt="Top Mark Cabs" class="img-responsive" height="40"></a>
				</div>
				<!-- //Logo -->
				
				<!-- Main Nav -->
				<nav role="navigation" class="main-nav">
					<ul>
						<li class="active"><a href="../" title="">Home</a></li>
						<li class="active"><a href="../contact.php" title="">Contact</a></li>
						<li><a href="tel:(01) 624 7500" title="number"><span class="fa fa-phone"></span> (01) 624 7500</a>
						</li>
						
					</ul>

				</nav>

				<!-- //Main Nav -->
			</div>
		</header>
<!-- Search -->
<main class="main" role="main">
		<div class="advanced-search color" id="booking">
			<div class="wrap"><br/><br/><br/>
			<h1>Request a taxi</h1>
				<form role="form" action="email.php" method="post">
					<!-- Row -->
					<div class="f-row">
						<div class="form-group datepicker one-third">
						<label>______________________________</label>
							<label>Departure time: <strong><?php echo $dep1; ?></strong></label>
							<label>Collection location: <strong><?php echo $pickup1; ?></strong></label>
							<label>Dropoff location: <strong><?php echo $dropoff1; ?></strong></label>
							<label>No. of Passengers: <strong><?php echo $people; ?></strong></label>
							<label>______________________________</label>
							<br/><br/>
							<?php if(isset($dep2)) echo "<label>Collection time: <strong>$dep2</strong></label>
							<label>Collection location: <strong>$pickup2</strong></label>
							<label>Dropoff location: <strong>$dropoff2</strong></label>";?>

						</div>
						<div class="form-group select one-third">
							<label>Full Name:*</label>
							<input type="text" name="name">
						</div>
						<div class="form-group select one-half">
						<br/>
							<label>Additional Comment:</label>
							<textarea style="height:200px;" name="comment"></textarea>
						</div>
					</div>
					<!-- //Row -->
					
					<!-- Row -->
					<div class="f-row">
						<div class="form-group one-half">
							<input type="text" name="number" placeholder="Enter in your Phone Number here:">
						</div>
						<div class="form-group right">
							<button type="submit" class="btn large black">Request a taxi</button>
						</div>
					</div>
					<!--// Row -->
				</form>
			</div>
		</div>
		<!-- //Search -->  
</main>
		<!-- Footer -->
	<footer class="footer black" role="contentinfo">
		<div class="wrap">
			<div class="row">
				<!-- Column -->
				<article class="one-half">
					<h6>About us</h6>
					<p>Topmark Cabs is a 24 hour Taxi / Hackney service based in Leixlip, County Kildare, Ireland.  We pride ourselves in providing outstanding Corporate and Leisure transport. <br/><br/>Our prime location guarantees that you get to and from your destination without delay, being only 20 minutes from Dublin Airport and Dublin City Centre.  We are located on the Main Street in the heart of Leixlip village at the entrance to the Courtyard Hotel car park.</p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<!-- //Column -->

				<!-- Column -->
				<article class="one-half">
					<h6>Need help?</h6>
					<p>Contact us via phone or email:</p>
					<p class="contact-data"><span class="fa fa-phone"></span> <a href="tel:01 624 7500" title="number"> (01) 624 7500</a></p>
					<p class="contact-data"><span class="fa fa-envelope"></span><a href="mailto:topmarkcabs@gmail.com"> topmarkcabs@gmail.com</a></p>
				</article>
				<!-- //Column -->
				
				
			</div>
			
			<div class="copy">
				<p>Copyright <?php echo date("Y");?>, TopMark Cabs. All rights reserved. </p>
				
				<nav role="navigation" class="foot-nav">
					<ul>
						<li><a href="../" title="Home">Home</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</footer>
	<!-- //Footer -->
	
	 <!-- jQuery -->
    <script src="./Transfers - Home_files/jquery.min.js"></script>
	<script src="./Transfers - Home_files/jquery.uniform.min.js"></script>
	<script src="./Transfers - Home_files/jquery.datetimepicker.js"></script>
	<script src="./Transfers - Home_files/jquery.slicknav.min.js"></script>
	<script src="./Transfers - Home_files/wow.min.js"></script>
	<script src="./Transfers - Home_files/search.js"></script>
	<script src="./Transfers - Home_files/scripts.js"></script>
	</body></html>