<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
$enc = new Encryption();
ini_set('display_errors', 1); 
error_reporting(E_ALL);
if(!isset($_GET['title']))
{
    header("Location: ../");
    die;
}
$title = $_GET['title'];
$id = intval($_GET['id']);
$title = str_replace("-", " ", $title);     

            $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT *,DATE_FORMAT(`time`,'%H:%i') as `time` FROM `db1410151_Conor_thompson`.`blog` WHERE `b_id` = $id";
                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_assoc($result)) {

                $content = $row['content'];
                $title_main = Encryption::decrypt($row['title']);
                $tag = $row['tag'];
                $num_comments = $row['comments_num'];
                $time = $row['time'];
                if($tag == "Java" or $tag == "Python"){
                                $extension = ".png";
                            }
                            else{
                                $extension = ".jpg";
                            }
			}
		}else{
		    die("This is not a page.");
		}

		}else{
		    die("Something went horribly, horribly wrong!");
		}
?>
<!DOCTYPE html>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title_main;?> | Conor Thompson</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:title" content="<?php echo $title_main;?>">
		<meta property="og:image" content="http://example.com/main-image.png">
		<meta property="og:site_name" content="Conor Thompson">
		<meta property="og:description" content="<?php echo substr($content,0,80);?>">

        <!--bootstrap css-->
        <link href="./blog_post_files/bootstrap.min.css" rel="stylesheet">
        <!--custom css-->
        <link href="./blog_post_files/style.css" rel="stylesheet" type="text/css">
        <!--flex slider css-->
        <link href="./blog_post_files/flexslider.css" rel="stylesheet">
        <!--google web fonts css-->
        <link href="./blog_post_files/css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
           <!-- icons css-->
        <link href="./blog_post_files/font-awesome.min.css" rel="stylesheet">
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#navigation" data-offset="75" class=" pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '237718383253429',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
     FB.ui(
 {
  method: 'share',
  href: 'https://developers.facebook.com/docs/'
}, function(response){});
  };
</script>
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

      <section id="navigation">
            <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 60px;"><div class="navbar navbar-default navbar-static-top sticky" role="navigation">
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
                            <li class="active"><a href="../#home">Home</a></li>
                            <li ><a href="../#about">About</a></li>
                            <li class=""><a href="../#services">Services</a></li>
                            <li class=""><a href="../#work">Work</a></li>

                            <li class="dropdown">
                                <span data-toggle="dropdown" class="dropdown-toggle js-activated">Blog <b class="caret"></b></span>
                                <ul class="dropdown-menu">
                                    <li><a href="List/">Blog List</a></li>
                                </ul>
                            </li>
                            <li><a href=" #contact">Contact</a></li>

                        </ul>

                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </div>
    </section><!--navigation section end here-->

        <!--section blog post start here-->
        <section id="blog-post" class="padding-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-item-sec">
                            <img src=<?php echo '"./img/'.$tag.''.$extension.'"';?> class="img-responsive" alt="">
                            <div class="blog-item-head">
                                <h3><?php echo $title_main;?></h3>
                            </div><!--blog post item heading end-->
                            <div class="blog-item-post-info">
                                <span><a href="../../">By Conor</a> | on <?php echo $time;?> | <a href="../tags/?tag=<?php echo $tag;?>"><?php echo $tag;?></a> | <a href="#"> <?php echo $num_comments;?> comments</a> |  </span>
                            </div><!--blog post item info end-->
                            <div class="blog-item-post-desc">
                                <p>
                                   <?php echo $content; ?>
                                </p>
                                
                            </div><!--blog-item-post-desc end-->
                            <div class="blog-more-desc">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <ul class="list-inline social-colored">
                                            <li class="empty-text">Share:</li> 
                                            <li><a href="#" onclick="share_fb('<?php echo "http://$_SERVER[HTTP_HOST]".""."$_SERVER[REQUEST_URI]";?>;');return false;" rel="nofollow" share_url="<?php echo "http://$_SERVER[HTTP_HOST]".""."$_SERVER[REQUEST_URI]";?>" target="_blank"><i class="fa fa-facebook icon-fb" data-toggle="tooltip" title="" data-original-title="Facebook" data-placement="top"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter icon-twit" data-toggle="tooltip" title="" data-original-title="Twitter" data-placement="top"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus icon-plus" data-toggle="tooltip" title="" data-original-title="Google pluse" data-placement="top"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest icon-pin" data-toggle="tooltip" title="" data-original-title="Linkedin" data-placement="top"></i></a></li>

                                        </ul> <!--colored social-->
                                    </div>
                                    <div class="col-sm-6 col-xs-12 more-link">
                                        <a href="#">Next Post&gt;&gt;</a>
                                    </div>

                                </div>
                            </div><!--blog more desc end-->

                            <!--blog -post comment wrapper start-->
                            <div class="comment-wrapper">
                                <h4><? $num_comments; ?> Comments</h4>
                                <?php 
                                $sql ="SELECT *,DATE_FORMAT(`time`,'%H:%i') as `time` FROM `db1410151_Conor_thompson`.`comments` WHERE `b_id` = $id";
					       if($result = mysqli_query($con,$sql)){				        
					        if (mysqli_num_rows($result) >0) {
					            while($row = mysqli_fetch_assoc($result)) {

					                $comment = Encryption::decrypt($row['comment']);
					                $email = Encryption::decrypt($row['email']);
                                    $name = Encryption::decrypt($row['name']);
					                $time = $row['time'];

					                echo' <div class="comment-box">
                                    <div class="comment-list">
                                        <img src="./blog_post_files/default-photo.jpg" class="img-responsive" alt="">
                                        <h5><a href="mailto:'.$email.'">'.$name.'</a> On '.$time.'</h5>
                                        <p>
                                            '.$comment.'
                                        </p></div><!--comment list end-->
                                </div>';
								}
							}    
							else{

								echo "No comments on this blog.";
							}
						}
							?>
                                    
                                <div class="comment-form">
                                <div id="success"></div>
                                    <h4>Leave a Comment</h4>
                                    <form class="wow animated fadeInUp" style="visibility: hidden; animation-name: none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Name" id="name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" placeholder="Email" id="email">
                                            </div>
                                            <div class="col-md-12">
                                                <textarea class="form-control" placeholder="Your Comment" id="comment" rows="7"></textarea>
                                            </div>
                                            <div class="col-md-12 text-right">
                                                <button type="submit" class="btn btn-lg btn-theme-color" id="comment_submit">Send Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <!--blog post comment wrapper end-->
                        </div>  <!--blog-item section end-->
                    </div>

                    <!--sideabr-->
                    <div class="col-md-3">
                        <div class="sidebar-box">
                            <div class="widget-search">
                                <form class="search-form">
                                    <input type="text" class="form-control" placeholder="search here...">
                                    <i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="" data-original-title="hit enter to search"></i>
                                </form>
                            </div>
                        </div><!--sidebar box end-->


                        <div class="sidebar-box">
                            <h4>Latest Posts</h4>
                            <?php
                  $sql ="SELECT *,DATE_FORMAT(`time`,'%H:%i') as `time` FROM `db1410151_Conor_thompson`.`blog` ORDER BY `b_id` DESC LIMIT 4";
                  if($result = mysqli_query($con,$sql)){
        
                    if (mysqli_num_rows($result) >0) {
                        while($row = mysqli_fetch_assoc($result)) {

                            $id = $row['b_id'];
                            $content = substr($row['content'],0,50);
                            $content .= "...";
                            $title_main = Encryption::decrypt($row['title']);
                            $title_main_half = substr($title_main,0,20);
                            $tag = $row['tag'];
                            $num_comments = $row['comments_num'];
                            $time = $row['time'];

                            echo '<div class="popu-post-item">
                                <img src="./img/'.$tag.''.$extension.'" class="img-responsive" alt="">
                                <h5><a href="?title='.$title_main.'&id='.$id.'">'.$title_main_half.'</a></h5>
                                <span>Posted at '.$time.' by <a href="../../">Conor</a></span>
                                <p>
                                    '.$content.'
                                </p>
                            </div><!--popular post item end-->';
                        }
                    }else{
                        die("This is not a page.");
                    }
                }

                            ?>
                        </div><!--sidebar box end-->

                        <div class="sidebar-box">
                        <ul class="list-unstyled cat-list">
                            <h4>Categories</h4>
                            <?php

                            $sql = "SELECT tag, COUNT( * ) AS count
                                    FROM blog
                                    GROUP BY tag
                                    ORDER BY count DESC ";

                    if($result = mysqli_query($con,$sql)){
        
                    if (mysqli_num_rows($result) >0) {
                        while($row = mysqli_fetch_assoc($result)) {

                            $count = $row['count'];
                            $tag = $row['tag'];

                            echo '<li><a href="../tags/?tag='.$tag.'">'.$tag.' <span class="badge">'.$count.'</span></a></li>';
                        }
                    }else{
                        die("There is no tags.");
                    }
                }


                            ?></ul>
                        </div><!--sidebar-box end-->
                        <div class="sidebar-box">
                            <h4>Follow Me</h4>
                            <ul class="list-inline social-colored">
                                <li><a href="#"><i class="fa fa-facebook icon-fb" data-toggle="tooltip" title="" data-original-title="Facebook" data-placement="top"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter icon-twit" data-toggle="tooltip" title="" data-original-title="Twitter" data-placement="top"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus icon-plus" data-toggle="tooltip" title="" data-original-title="Google pluse" data-placement="top"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin icon-in" data-toggle="tooltip" title="" data-original-title="Linkedin" data-placement="top"></i></a></li>

                            </ul> <!--colored social-->
                        </div><!--sidebar-box-->
                    </div>                    


                    <!--sidebar end-->
                </div>
            </div>
        </section>
        <!--section blog post end here-->

        <section id="footer" class="padding-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 copyright">
                        <span>©<?php echo date("Y");?> Conor Thompson. All right reserved</span>
                    </div>
                    <div class="col-md-6 col-sm-6 footer-nav">
                        <ul class="list-inline">
                            <li><a href="../../">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!--footer end-->
         <!--back to top-->
        <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
        <!--back to top end-->

        <!--script files-->
        <script src="./blog_post_files/jquery.min.js" type="text/javascript"></script>
        <script src="./blog_post_files/moderniz.min.js" type="text/javascript"></script>
        <script src="./blog_post_files/jquery-migrate.min.js" type="text/javascript"></script> 
        <script src="./blog_post_files/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="./blog_post_files/bootstrap.min.js" type="text/javascript"></script>
        
        <script src="./blog_post_files/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="./blog_post_files/wow.min.js" type="text/javascript"></script>
        <script src="./blog_post_files/jquery.sticky.js" type="text/javascript"></script>        
        <script src="./blog_post_files/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="./blog_post_files/jquery.stellar.min.js" type="text/javascript"></script>
        <script src="./blog_post_files/owl.carousel.min.js" type="text/javascript"></script>
        <script src="./blog_post_files/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
        <script src="./blog_post_files/waypoints.min.js"></script>
        <script src="./blog_post_files/easypiechart.js"></script>
        <script src="./blog_post_files/jquery.isotope.min.js" type="text/javascript"></script>
        <!--image loads plugin -->
        <script src="./blog_post_files/jquery.imagesloaded.min.js" type="text/javascript"></script>
        <script src="./blog_post_files/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="./blog_post_files/jquery.countdown.js" type="text/javascript"></script>
        <script src="./blog_post_files/contact_me.js" type="text/javascript"></script>

        <script src="./blog_post_files/jqBootstrapValidation.js" type="text/javascript"></script>
        <script src="./blog_post_files/custom.js" type="text/javascript"></script>
<script src="./blog_post_files/pace.min.js" type="text/javascript"></script>
        <!--revolution slider plugins-->
        <script src="./blog_post_files/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="./blog_post_files/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="./blog_post_files/revolution-custom.js" type="text/javascript"></script>
        <script src="./blog_post_files/isotope-custom.js" type="text/javascript"></script>

    <script type="text/javascript">
        function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}


  $(document).ready(function(){
$('#comment_submit').click(function(){
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "comment.php",
data: {
    'name': $('#name').val(),
    'email': $('#email').val(),
    'comment': $('#comment').val(),
    'id': getParameterByName('id')
},
success: function(result){
document.getElementById('name').value = "";
document.getElementById('email').value = "";
document.getElementById('comment').value = "";
document.getElementById('success').innerHTML = "<b>Successfully posted.</b>";
}
});
return false;
});

});
    </script>
    <?php
$sql ="UPDATE blog SET views = views+1 WHERE `b_id` = $id";
                  if($result = mysqli_query($con,$sql)){
               return true;
    }else{
        die("Something went horribly, horribly wrong!");
    }



?>

</body></html>