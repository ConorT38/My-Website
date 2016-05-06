
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="Leixlip, TopMark Cabs, Hotels, Night">
	<meta name="description" content="Taxi cab company, Leixlip website ">
	<meta name="author" content="Conor Thompson ">
	
	<title>TopMark Cabs - Contact</title>
	
	<link rel="stylesheet" href="./Transfers - Home_files/styler.css">
	<link rel="stylesheet" href="./Transfers - Home_files/theme-pink.css" id="template-color">
	<link rel="stylesheet" href="./Transfers - Home_files/style.css">
	<link rel="stylesheet" href="./Transfers - Home_files/animate.css">
	<link href="./Transfers - Home_files/css" rel="stylesheet" type="text/css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body onload="initialize()">
	<!-- Preloader -->
	<div class="preloader">
		<div id="followingBallsG">
			<div id="followingBallsG_1" class="followingBallsG"></div>
			<div id="followingBallsG_2" class="followingBallsG"></div>
			<div id="followingBallsG_3" class="followingBallsG"></div>
			<div id="followingBallsG_4" class="followingBallsG"></div>
		</div>
	</div>
	<!-- //Preloader -->
	
    <!-- Header -->
	<header class="header" role="banner">
		<div class="wrap">
			<!-- Logo -->
			<div class="logo">
					<a href="../" title="Transfers"><img src="./Transfers - Home_files/images/logo.png" alt="Top Mark Cabs" class="img-responsive" height="40"></a>
				</div>
			<!-- //Logo -->
			
			<!-- Main Nav -->
			<nav role="navigation" class="main-nav">
					<ul>
						<li class="active"><a href="../" title="">Home</a></li>
						<li class="active"><a href="" title="">Contact</a></li>
						<li><a href="tel:(01) 624 7500" title="number"><span class="fa fa-phone"></span> (01) 624 7500</a>
						</li>
						
					</ul>
				</nav>
			<!-- //Main Nav -->
		</div>
	</header>
	<!-- //Header -->
	
	<!-- Main -->
	<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Contact us</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="../" title="Home">Home</a></li>
							<li>Contact</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- //Page info -->
		
		<!--- Google map -->
		<div id="map_canvas" class="gmap"></div>
		<!--- //Google map -->
		
		<div class="wrap">

			<div class="row"

				
				<!--- Content -->
				<div class="full-width content textongrey">
						<?php session_start(); if(isset($_SESSION['book-confirm'])){echo'<div id="alert" style="z-index:9;">
    <a class="alert" href="#alert">'.$_SESSION["book-confirm"].'</a>
</div>';session_unset(); }  ?>
					<h2>Send us a message</h2>
					<p>Get in contact with us and we can answer any questions you may have or other, we will respond to you as soon as we can!</p>
				</div>
				<!--- //Content -->
				
				<!-- Form -->
				<div class="three-fourth">
					<form method="post" action="src/contact.php" >
						<div id="message"></div>
						<div class="f-row">
							<div class="one-half">
								<label for="name">Name and surname</label>
								<input type="text" name="name" />
							</div>
							<div class="one-half">
								<label for="email">Email address</label>
								<input type="email" name="email" />
							</div>
						</div>
						<div class="f-row">
							<div class="full-width">
								<label for="comments">Message</label>
								<textarea name="comments"></textarea>
							</div>
						</div>
						<div class="f-row">
							<input type="submit" value="Submit" id="submit" name="submit" class="btn color medium right" />
						</div>
					</form>
				</div>
				<!-- //Form -->
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
					<!-- Widget -->
					<div class="widget">
						<h4>Need help booking?</h4>
						<div class="textwidget">
							<p>Don't hesitate to call us, we can help you book online or offline for a taxi at any time.</p>
							<p class="contact-data"><span class="fa fa-phone"></span><a href="tel: 01 624 7500"> (01) 624 7500</a></p>
						</div>
					</div>
					<!-- //Widget -->
					
				</aside>
				<!--- //Sidebar -->
			</div>
		</div>
	</main>
	<!-- //Main -->
	
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
	<script src="./Transfers - Home_files/jquery.slicknav.min.js"></script>
	<script src="./Transfers - Home_files/wow.min.js"></script>
	<script src="./Transfers - Home_files/scripts.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
	<script src="./Transfers - Home_files/infobox.js"></script>

	
	<script type="text/javascript">
		function initialize() {
			var secheltLoc = new google.maps.LatLng(53.3637876,-6.4898394);

			var myMapOptions = {
				 zoom: 15
				,center: secheltLoc
				,mapTypeId: google.maps.MapTypeId.ROADMAP
				,scrollwheel: false
			};
			var theMap = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);

			var myIcon = new google.maps.MarkerImage('');
			
			var marker = new google.maps.Marker({
				map: theMap,
				draggable: true,
				position: new google.maps.LatLng(53.3637876,-6.4898394),
				visible: true,
				icon: myIcon
			});

			var boxText = document.createElement("div");
			boxText.innerHTML = "<span>TopMark Cabs</span><br>Main St, Leixlip, Co. Kildare";

			var myOptions = {
				 content: boxText
				,disableAutoPan: false
				,maxWidth: 0
				,pixelOffset: new google.maps.Size(-140, 0)
				,zIndex: null
				,closeBoxURL: ""
				,infoBoxClearance: new google.maps.Size(1, 1)
				,isHidden: false
				,enableEventPropagation: false
			};

			google.maps.event.addListener(marker, "click", function (e) {
				ib.open(theMap, this);
			});

			var ib = new InfoBox(myOptions);

			ib.open(theMap, marker);
		}
	</script>
  </body>
</html>