<?php
//ini_set('display_errors', 1); 
//error_reporting(E_ALL);
include_once $_SERVER['DOCUMENT_ROOT']."/../src/Authentication.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/../src/PassHash.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
$srv = new Authentication();
session_start();
$_SESSION['ip'] = $srv->getUserIP();
if($srv->isMobile()){
    $srv->updateMobile($_SESSION['ip'],$_SERVER["HTTP_USER_AGENT"]);
}
else{
    $srv->updateDesktop($_SESSION['ip'],$_SERVER["HTTP_USER_AGENT"]);
}
?>
<!DOCTYPE html>
<!-- saved from url=(0077)  -->
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><link type="text/css" rel="stylesheet" href="./Codeon - Agency_files/css"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}.gm-style img{max-width:none}</style>
        <title>Conor Thompson - Developer</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap css-->
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <!--custom css-->
        <link href="./css/style.css" rel="stylesheet" type="text/css">
        <!--flex slider css-->
        <link href="./css/flexslider.css" rel="stylesheet">
        <!--google web fonts css-->
        <link href="./css/css(1)" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- icons css-->
        <link href="./css/font-awesome.min.css" rel="stylesheet">
        <!--animated css-->
        <link href="./css/animate.css" rel="stylesheet">
        <!--owl carousel css-->
        <link href="./css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="./css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!--Revolution slider css-->
        <link href="./css/settings.css" rel="stylesheet" type="text/css" media="screen">
     
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    <script type="text/javascript" charset="UTF-8" src="./js/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./js/map.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./js/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./js/marker.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./js/onion.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./js/stats.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./js/infowindow.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./js/controls.js"></script>

    </head>
    <body onkeydown="keyCode(event);" data-spy="scroll" data-target="#navigation" data-offset="80" class=" pace-done">
    <div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
        <section id="navigation" class="fixed-navigation">
            <div class="navbar navbar-default navbar-static-top navbar-transparent navbar-bg" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="../">conor thompson</a>
                    </div>
                    <div class="navbar-collapse collapse" style="max-height: 869px;">

                        <ul class="nav navbar-nav navbar-right scrollto">
                            <li class="active"><a href=" #home">Home</a></li>
                            <li ><a href=" #about">About</a></li>
                            <li class=""><a href=" #services">Services</a></li>
                            <li class=""><a href=" #work">Work</a></li>

                            <li class="dropdown">
                                <span data-toggle="dropdown" class="dropdown-toggle js-activated">Blog <b class="caret"></b></span>
                                <ul class="dropdown-menu">
                                    <li><a href="Blog/List/">Blog List</a></li>
                                </ul>
                            </li>
                            <li><a href=" #contact">Contact</a></li>

                        </ul>

                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </div>
    </section><!--navigation section end here-->
<div id="const" style="height:100%;">

<canvas id="canvas"></canvas>
<div id="t">
<br/>
<br/>

<!--END MODAL CODE -->
<center><h1 class="header-content-inner b0ss" style="color:white;position: relative;
    margin: 0 auto;
    z-index: 2;
    font-size:500%;
    ">Conor Thompson</h1><p style="color:white;position: relative;
    margin: 0 auto;
    z-index: 2;
    font-size:150%;
    ">-Web Developer-</p><a href="#" id="cv" class="btn btn-lg btn-theme-color wow animated bounceIn animated scrollto" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;"><i class="fa fa-file-o"></i> MY CV</a></center>
</div>

</div>

        <div style="position: absolute; top: 459px; margin-top: -55px; left: 0px;" class="tp-leftarrow hidearrows tparrows default preview4"><div class="tp-arr-allwrapper"><div class="tp-arr-iwrapper"><div class="tp-arr-imgholder" style="transform: matrix(1, 0, 0, 1, 0, 0); background-image: url(&quot;img/typing-cover.jpg&quot;);"></div><div class="tp-arr-imgholder2" style="transform: matrix(1, 0, 0, 1, 0, 0); background-image: url(&quot;img/typing-cover.jpg&quot;);"></div><div class="tp-arr-titleholder">Quick Results</div><div class="tp-arr-subtitleholder"></div></div></div></div><div style="position: absolute; top: 459px; margin-top: -55px; right: 0px;" class="tp-rightarrow hidearrows tparrows default preview4 hashoveralready"><div class="tp-arr-allwrapper"><div class="tp-arr-iwrapper"><div class="tp-arr-imgholder" style="transform: matrix(1, 0, 0, 1, 0, 0); background-image: url(&quot;img/typing-cover.jpg&quot;);"></div><div class="tp-arr-imgholder2" style="transform: matrix(1, 0, 0, 1, 0, 0); background-image: url(&quot;img/typing-cover.jpg&quot;);"></div><div class="tp-arr-titleholder">Quick Results</div><div class="tp-arr-subtitleholder"></div></div></div></div></div>    <!--video slider-->


 <section id="about" class="padding-80">

            <!--about page content-->
            <div class="about-section">
                <div class="container">
                    <div class="section-heading text-center">
                        <h4 class="small section-title"><span>What I'm all about</span></h4>
                        <h2 class="large section-title">About me</h2>
                    </div><!--section heading-->

                </div><!--container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown animated" data-wow-duration="0.3s" style="visibility: visible; animation-duration: 0.3s; animation-name: fadeInDown;">
                                <div class="about-box-icon">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Creative Applications</h4>
                                    <p>
                                        I've always looked at things from a different angle, this is no exception when it comes to development!
                                    </p>
                                </div>
                            </div><!--about us box end-->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown animated" data-wow-delay="0.5" style="visibility: visible; animation-name: fadeInDown;">
                                <div class="about-box-icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Fast Development</h4>
                                    <p>
                                        I pride myself in building applications as sturdy and securely, in as fast as time possible.
                                    </p>
                                </div>
                            </div><!--about us box end-->
                        </div>
                    </div><!--about services row end-->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;">
                                <div class="about-box-icon">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Modern Sleek Design</h4>
                                    <p>
                                        Aesthetics goes a long way when it comes to building the right application. I use only modern frameworks and libraries to help keep your application up to the competition standards.
                                    </p>
                                </div>
                            </div><!--about us box end-->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInDown;">
                                <div class="about-box-icon">
                                    <i class="fa fa-diamond"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Quality Applications</h4>
                                    <p>
                                        Professional and sustainable applications that are modularly built and tailored to your preference.
                                    </p>
                                </div>
                            </div><!--about us box end-->
                        </div>
                    </div><!--about services row end-->
                    <div class="about-section-more">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="about-more-info wow animated fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <p>
                                     Welcome to my website! My name is Conor Thompson, and I'm a developer for both websites and software systems. I am currently a student in my Third year of college in NCI (National College of Ireland), and I'm primarily skilled in Object Oriented languages such as Java, C++, Python and PHP,  but also use a lot of Grails, C#.NET, ASP and XSLT. I'm a music nut, and am currently the drummer in a band! Ever have a question on the Tolkien universe? I will provide the answers.  
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="skills-wrapper wow animated bounceIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;">
                                    <h3 class="heading-progress">Web Development <span class="pull-right">90%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar">
                                        </div>
                                    </div>
                                    <h3 class="heading-progress">Web Design <span class="pull-right">78%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 78%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="78" role="progressbar">
                                        </div>
                                    </div>
                                    <h3 class="heading-progress">Software Development <span class="pull-right">82%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 82%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="82" role="progressbar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row easy-pie-chart-row">
                            <div class="col-sm-3 text-center">
                                <div class="progress-circle">

                                    <div class="chart" data-percent="95" data-scale-color="#9eca45">
                                        <span>95%</span>
                                        <canvas height="120" width="120"></canvas>
                                    <canvas height="120" width="120"></canvas></div>
                                    <p class="progress-text">PHP</p>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center">
                                <div class="progress-circle">

                                    <div class="chart" data-percent="85" data-scale-color="#9eca45">
                                        <span>85%</span>
                                        <canvas height="120" width="120"></canvas>
                                    <canvas height="120" width="120"></canvas></div>
                                    <p class="progress-text">Java</p>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center">
                                <div class="progress-circle">

                                    <div class="chart" data-percent="75" data-scale-color="#9eca45">
                                        <span>75%</span>
                                        <canvas height="120" width="120"></canvas>
                                    <canvas height="120" width="120"></canvas></div>
                                    <p class="progress-text">Grails</p>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center">
                                <div class="progress-circle">

                                    <div class="chart" data-percent="95" data-scale-color="#9eca45">
                                        <span>95%</span>
                                        <canvas height="120" width="120"></canvas>
                                    <canvas height="120" width="120"></canvas></div>
                                    <p class="progress-text">Python</p>
                                </div>
                            </div>

                        </div>

                    </div><!--section about 3 end-->
                </div>
            </div>

            <div class="purchase-now parallax" data-stellar-background-ratio="0.5" style="background-position: 50% 581px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="wow animated fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">What I can <strong>Do</strong> for <strong>You</strong></h1>
                        </div>
                        <div class="col-sm-4">
                            <a href="#services" class="btn btn-lg btn-theme-color wow animated bounceIn animated scrollto" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;">Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--page about content end here-->
        </section>
        <!--about section end here-->

        <!--section services start here-->

        <section id="services" class="padding-80">


            <div class="services-section-1">
                <div class="container">
                    <div class="section-heading text-center">
                        <h4 class="small section-title"><span>What I do?</span></h4>
                        <h2 class="large section-title">My Services</h2>
                    </div><!--section heading-->

                </div><!--container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="margin-btm-40">
                                <h4>Modular Systems</h4>
                                <p>
                                    Building modular systems allow for adding and subtracting features to tailor your needs for your application, this makes the user experience as fluid and appealing as possible.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 wow animated fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">

                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-image"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Website design</h3>
                                        <p>
                                            I have designed a number of applications with new styling frameworks such as Bootstrap and Foundation.
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-terminal"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Software Design</h3>
                                        <p>
                                            Software aesthetics can be an important aspect of a great product, GUI development is one of the number of services I can provide.
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-cubes"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>IT Solutions</h3>
                                        <p>
                                            Need help setting up a system? Building a network? I can provide solutions many problems!
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-cloud"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Server Solutions</h3>
                                        <p>
                                            Many applications are now moving to cloud servers, I can provide solutions to a number of products including AWS, Microsoft Cloud and Google Cloud.
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                        </div>
                        <div class="col-md-6 wow animated fadeInRight animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">

                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-code"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Website Development</h3>
                                        <p>
                                            I have been building websites since I was a teenager, I have a taste for building secure sites using Ruby on Rails, PHP and Grails. This ranges from a simple portfolio site, to a fully functional e-commerce site.
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-cog fa-spin"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Software Development</h3>
                                        <p>
                                            I have a passion for building challenging software applications, I have made a number of products in Java, C, Python, C#.net, JSON, PHP and more.
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-shield"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Web Security</h3>
                                        <p>
                                            Web security is one of the fastest changing elements of the internet, I can build your application up to an industry standard of security.
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-line-chart"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Data Analytics - Dashboards</h3>
                                        <p>
                                            A lot of data can flow through applications, managing and monitoring this data can help you bring your app to the next level. Having a dashboard is an excellent attribute to your software, I can integrate this into your application.
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                        </div>
                    </div>
                </div>
            </div><!--services section 1 end-->
            <?php if(isset($_SESSION['newsletter'])){echo ' <div class="alert alert-warning">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    '.$_SESSION['newsletter'].' 
  </div>';session_unset($_SESSION['newsletter']);} ?>
            <div class="services-section-2 parallax" data-stellar-background-ratio="0.5" style="background-position: 50% 1624.5px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Subscribe to my Newsletter</h1>
                            <form method="post" action="src/newsletter_signup.php">
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-4">
                                        <div class="input-group">
                                            <label class="sr-only" for="subscribe-email">Email address</label>
                                            <input type="email" class="form-control" id="subscribe-email" name="email" placeholder="Enter your email">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-theme-color btn-lg">OK</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--services section 1 end-->
        </section>
        <!--section services end here-->




        <!--our work section start here-->
        <section id="work" class="padding-80">

            <div class="work-section-1">
                <div class="container">
                    <div class="section-heading text-center">
                        <h4 class="small section-title"><span>Latest portfolio</span></h4>
                        <h2 class="large section-title">My work</h2>
                    </div><!--section heading-->
                </div>
                <div class="container">
                    <ul class="filter list-inline">
                        <li><a class="active" href=" #" data-filter="*">Show All</a></li>
                        <li><a href=" #" data-filter=".Software">Software</a></li>
                        <li><a href=" #" data-filter=".Security">Security</a></li>
                        <li><a href=" #" data-filter=".Development">Development</a></li>
                        <li><a href=" #" data-filter=".web-design">Web Design</a></li>
                    </ul>
                    <div class="row">
                        <div class="portfolio-box iso-call work-col-4" style="position: relative; height: 378px;">
                            <div class="project-post Security Development" style="position: absolute; left: 0px; top: 0px;">
                                <a href="work/?type=web-security">
                                        <div class="image-wrapper">
                                            <img src="./img/sec-img2.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            Web Security
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->
                            <div class="project-post  web-design" style="position: absolute; left: 187px; top: 0px;">
                               <a href="work/?type=responsive-sites">
                                        <div class="image-wrapper">
                                            <img src="./img/sec-img2.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            Responsive sites
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->
                            <div class="project-post Development Software web-design" style="position: absolute; left: 375px; top: 0px;">
                               <a href="work/?type=Python">
                                        <div class="image-wrapper">
                                            <img src="./img/sec-img3.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            Python
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->

                            <div class="project-post Software Security" style="position: absolute; left: 562px; top: 0px;">
                                <a href="work/?type=PHP">
                                        <div class="image-wrapper">
                                            <img src="./img/sec-img4.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            PHP
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->
                            <div class="project-post  illustration" style="position: absolute; left: 0px; top: 189px;">
                                <a href="#">
                                        <div class="image-wrapper">
                                            <img src="./img/sec-img5.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->

                            <div class="project-post  web-design" style="position: absolute; left: 187px; top: 189px;">
                                <a href="work/?type=Grails">
                                        <div class="image-wrapper">
                                            <img src="./img/sec-img6.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            Grails
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->


                            <div class="project-post   Software" style="position: absolute; left: 375px; top: 189px;">
                                <a href="work/?type=Java">
                                        <div class="image-wrapper">
                                            <img src="./img/sec-img7.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                           Java
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->

                            <div class="project-post  Development" style="position: absolute; left: 562px; top: 189px;">
                                 <a href="#">
                                        <div class="image-wrapper">
                                            <img src="./img/sec-img8.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            Wordpress
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->
                        </div>
                    </div>
                </div><!--container-->


            </div><!--work section 1-->
            <!--testimonials-->
              <div class="testi parallax " data-stellar-background-ratio="0.5" style="background-position: 50% 2168px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div id="testi-carousel" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4320px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 720px;"><div>
                                    <img src="img/Niall.png"  height="140" width="140" alt="">
                                    <h4>
                                        <i>"Whatever Niall planned on saying"</i>
                                    </h4>
                                    <p>Niall Curran</p>-<i>MasterCard</i>
                                </div></div></div></div>
                                </div>
                         </div>
                    </div>
                </div>
            </div>
            <!--testimonials-->
            <div class="work-section-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center margin-btm-40">
                            <div class="section-heading text-center">
                                <h4 class="small section-title"><span>Who I Am?</span></h4>
                                <h2 class="large section-title">About Me</h2>
                            </div>
                        </div>
                    </div><!--.row-->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="person">
                            </div>
                        </div><!--team-col-->
                        <div class="col-sm-4">
                            <div class="person">
                                <img src="./img/Conor.jpg" class="img-responsive" alt="">
                                <div class="person-desc">
                                    <h4>Conor Thompson</h4>
                                    <em>Developer</em>
                                    <p>
                                       "<i>My name is Conor Thompson, and I love building applications, I specialise in designing and building websites, as well as software.</i>"
                                    </p>
                                </div>
                            </div>
                        </div><!--team-col-->
                        <div class="col-sm-4">
                            <div class="person">
                            </div>
                        </div><!--team-col-->
                    </div>
                </div><!--.container-->
            </div><!--team section end-->
            <!--fun facts-->
            <div class=" fun-facts parallax" id="numbers" data-stellar-background-ratio="0.5" style="background-position: 50% 2747.5px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 margin-btm-20">
                            <div class="fact-inner">
                                <h2 class="counter">48</h2>
                                <h4>Projects Complete</h4>
                            </div>
                        </div><!--fun col-->
                        <div class="col-md-3 margin-btm-20">
                            <div class="fact-inner">
                                <h2 class="counter">30</h2>
                                <h4>Happy Customers</h4>
                            </div>
                        </div><!--fun col-->
                        <div class="col-md-3 margin-btm-20">
                            <div class="fact-inner">
                                <h2 class="counter">1</h2>
                                <h4>Years left in College</h4>
                            </div>
                        </div><!--fun col-->
                        <div class="col-md-3 margin-btm-20">
                            <div class="fact-inner">
                                <h2 class="counter">40000</h2>
                                <h4>Future Projects</h4>
                            </div>
                        </div><!--fun col-->
                    </div>
                </div>
            </div>
            <!--fun facts-->
        </section><!--#work-section-->

        <!--our work section end-->

        <section id="contact" class="padding-80">


            <div class="contact-sec-1">
                <div class="container">
                    <div class="section-heading text-center">
                        <h4 class="small section-title"><span>I'd Love to here from you  </span></h4>
                        <h2 class="large section-title">Get In Contact</h2>
                    </div><!--section heading-->
                </div><!--.container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Get in touch</h4>
                            <div id="result"><?php if(isset($_SESSION['result'])){echo ' <div class="alert alert-warning">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    '.$_SESSION['result'].' 
  </div>';session_unset($_SESSION['result']);} ?></div>
                            <form  method="post" action="src/email.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 controls">
                                                <label>Name<span></span></label>
                                                <input type="text" class="form-control" placeholder="Name" id="name"  name="name"  >
                                                
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 controls">
                                                <label>Email Address<span></span></label>
                                                <input type="email" class="form-control" placeholder="Email Address"  name="email" id="email" >
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label>Message<span></span></label>
                                        <textarea rows="5" class="form-control" placeholder="Message" name="message" id="message" ></textarea>
                                        
                                    </div>
                                </div>
                                <br>
                                <div id="success"></div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <button type="submit" class="btn btn-theme-color btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <!--contact form-->
                        </div>
                        <div class="col-md-4">
                            <h4>Contact info</h4>
                            <div class="contact-info wow animated fadeInRight" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                                <p><i class="fa fa-home"></i> Email for further info</p>
                                <p><i class="fa fa-phone"></i> Email for further info</p>
                                <p><i class="fa fa-envelope"></i> <a href=" #">conorthompson213@gmail.com</a></p>
                                <p><i class="fa fa-clock-o"></i> Monday-Sunday 9:30-5:30pm</p>
                                <hr>
                                <h4>Elsewhere</h4>
                                <ul class="list-inline social-colored">
                                    <li><a href=" #" target="_blank"><i class="fa fa-facebook icon-fb" data-toggle="tooltip" title="" data-original-title="Facebook" data-placement="top"></i></a></li>
                                    <li><a href="https://www.twitter.com/cothompson16" target="_blank"><i class="fa fa-twitter icon-twit" data-toggle="tooltip" title="" data-original-title="Twitter" data-placement="top"></i></a></li>
                                    <li><a href="https://plus.google.com/u/0/104886392696520558175" target="_blank"><i class="fa fa-google-plus icon-plus" data-toggle="tooltip" title="" data-original-title="Google+" data-placement="top"></i></a></li>
                                    <li><a href="https://ie.linkedin.com/in/conorthompson123" target="_blank"><i class="fa fa-linkedin icon-in" data-toggle="tooltip" title="" data-original-title="LinkedIn" data-placement="top"></i></a></li>

                                </ul> <!--colored social-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--Contact-sec-1 end-->

        </section>
        <div id="map-canvas" style="width:100%; height: 350px;"></div><div class="contact-sec-2">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                            <i class="fa fa-phone"></i>
                            <p>Email for further info</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                            <i class="fa fa-envelope"></i>
                            <p>conorthompson213@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                            <i class="fa fa-home"></i>
                            <p>Email for further info</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--Contact-sec-1 end-->


        <section id="footer" class="padding-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 copyright">
                        <span>© Conor Thomspon -<?php echo date("Y");?></span>
                    </div>
                    <div class="col-md-6 col-sm-6 footer-nav">
                        <ul class="list-inline">
                            <li><a href="../">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!--footer end-->
        <!--back to top-->
        <a href=" #" class="scrollToTop" style="display: inline;"><i class="fa fa-angle-up"></i></a>
        <!--back to top end-->

        <!--script files-->
        
        <script src="./js/jquery.min.js" type="text/javascript"></script>
        <script src="./js/moderniz.min.js" type="text/javascript"></script>
        <script src="./js/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="./js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="./js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./js/jquery.flexslider-min.js" type="text/javascript"></script>
        
        <script src="./js/wow.min.js" type="text/javascript"></script>
        <script src="./js/jquery.sticky.js" type="text/javascript"></script>
        <script src="./js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="./js/jquery.stellar.min.js" type="text/javascript"></script>
        <script src="./js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="./js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
        <script src="./js/waypoints.min.js"></script>
        <script src="./js/easypiechart.js"></script>
        <script src="./js/jquery.isotope.min.js" type="text/javascript"></script>
        <!--image loads plugin -->
        <script src="./js/jquery.imagesloaded.min.js" type="text/javascript"></script>
        <script src="./js/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="./js/jquery.countdown.js" type="text/javascript"></script>
       <!-- <script src="./js/contact_me.js" type="text/javascript"></script>-->
        <script src="./js/jqBootstrapValidation.js" type="text/javascript"></script>
        <script src="./js/custom.js" type="text/javascript"></script>
        <!--revolution slider plugins-->
        <script src="./js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="./js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="./js/revolution-custom.js" type="text/javascript"></script>
        <script src="./js/isotope-custom.js" type="text/javascript"></script>
        <script src="./js/pace.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="./js/js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript">

            var myLatlng;
            var map;
            var marker;

            function initialize() {
                myLatlng = new google.maps.LatLng(53.3244431,-6.3857854);

                var mapOptions = {
                    zoom: 8,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: false
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p>Dublin, Ireland</p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Marker'
                });

                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <script>
        document.cookie = "admin_typed=false;";
        var counter = 0;

        setInterval(function () {
          ++counter;
          document.cookie = "time="+parseInt(counter)+";";
        }, 1000);
        
        var admin ="";
        function keyCode(event) {
        var x = event.keyCode;
        var num = [65,68,77,73,78];
        var letter =["a","d","m","i","n"];

for(var i=0;i<=num.length;i++){
    if(x==num[i]){
        admin=admin+letter[i];
        console.log(admin);
    }
}
 
if(admin=="admin"){
    admin="";
    document.cookie = "admin_typed=true; u_id=<?php echo str_replace(".","",$_SESSION['ip']); ?>;";
    window.location ="http://conorthompson.ie/admin/";
} 
}
</script>
<script>
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}
 window.onbeforeunload =function(){
        $.ajax({
type: "POST",
url: "src/time.php",
async:false,
data: {
        'time':parseInt(getCookie("time"))
    },
success: function(result){
return document.cookie;
},
error: function(xhr, errorThrown){
       return'request failed';
    }
});
        
    };
    $(document).ready(function() {
        $('a[rel!=ext]').click(function() { window.onbeforeunload = null; });
        $('form').submit(function() { window.onbeforeunload = null; });

    });


</script>

<script type="text/javascript">

        $('#cv').click(function(){
$.ajax({
type: "POST",
url: "src/cv_download.php",
success: function(result){
window.location.href = result;
},
error: function(xhr, errorThrown){
 window.location.href = "http://www.conorthompson.ie/cv/CV.pdf";
    }
});
        });

</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/stats.js/r11/Stats.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/zepto/1.0/zepto.min.js" type="text/javascript"></script>
<script src="js/const.js" type="text/javascript"></script>

   <style>
#canvas{
    overflow: hidden;
    background: #111;
    width:100%;
    height:100%;
    position: absolute;
    z-index: 0;
}
.b0ss {
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
    z-index: 1;
}
#t{
    line-height: 1050%;
}
        </style>


</body></html>
