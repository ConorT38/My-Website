<!DOCTYPE html>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Blogs | Conor Thompson</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap css-->
        <link href="./blog_list_files/bootstrap.min.css" rel="stylesheet">
        <!--custom css-->
        <link href="./blog_list_files/style.css" rel="stylesheet" type="text/css">
        <!--flex slider css-->
        <link href="./blog_list_files/flexslider.css" rel="stylesheet">
        <!--google web fonts css-->
        <link href="./blog_list_files/css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
        <!-- icons css-->
        <link href="./blog_list_files/font-awesome.min.css" rel="stylesheet">
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#navigation" data-offset="75" class=" pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
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
                            <li class="active"><a href="../../#home">Home</a></li>
                            <li ><a href="../../#about">About</a></li>
                            <li class=""><a href="../../#services">Services</a></li>
                            <li class=""><a href="../../#work">Work</a></li>

                            <li class="dropdown">
                                <span data-toggle="dropdown" class="dropdown-toggle js-activated">Blog <b class="caret"></b></span>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Blog List</a></li>
                                </ul>
                            </li>
                            <li><a href=" #contact">Contact</a></li>

                        </ul>

                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </div>
    </section><!--navigation section end here-->
        <section id="blog-list" class="padding-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
        
         <?php
            ini_set('display_errors', 1); 
            error_reporting(E_ALL);
                require_once $_SERVER['DOCUMENT_ROOT'] . "../../details/details.php";
            require_once $_SERVER['DOCUMENT_ROOT'] . "../../src/encryption.php";
            $enc = new Encryption();
            $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT * FROM `db1410151_Conor_thompson`.`blog`";
                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            $id = $row['b_id'];
            $title = Encryption::decrypt($row['title']);
            $title_nav = str_replace(" ","-",$title);
            $content = substr($row['content'],0,200);
            $content.="....";
            $time = $row['time'];
            $image = $row['image'];
            $views = $row['views'];
            $tag = $row['tag'];
             if($tag == "Java" or $tag == "Python"){
                                $extension = ".png";
                            }
                            else{
                                $extension = ".jpg";
                            }
            $comments = $row['comments_num'];
            echo '<div class="blog-item-sec">
                            <a href="../?title='.$title_nav.'&id='.$id.'">
                                <img src="./img/'.$tag.''.$extension.'" class="img-responsive" height="300" width="450" alt="">
                            </a>
                            <div class="blog-item-head">
                                <h3><a href="../?title='.$title_nav.'&id='.$id.'">'.$title.'</a> </h3>
                            </div><!--blog post item heading end-->
                            <div class="blog-item-post-info">
                                <span><a href="../../">By Conor</a> | on '.$time.' | <a href="../?title='.$title_nav.'&id='.$id.'">'.$tag.'</a> | <a href="../?title='.$title_nav.'&id='.$id.'"> '.$comments.' comments</a> |  </span>
                            </div><!--blog post item info end-->
                            <div class="blog-item-post-desc">
                              '.$content.'
                            </div><!--blog-item-post-desc end-->
                            <div class="blog-more-desc">
                                <div class="row">
                                    <div class="col-sm-7 col-xs-12">
                                        <ul class="list-inline social-colored">
                                            <li class="empty-text">Share:</li> 
                                            <li><a href=""><i class="fa fa-facebook icon-fb" data-toggle="tooltip" title="" data-original-title="Facebook" data-placement="top"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter icon-twit" data-toggle="tooltip" title="" data-original-title="Twitter" data-placement="top"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus icon-plus" data-toggle="tooltip" title="" data-original-title="Google pluse" data-placement="top"></i></a></li>
                                            <li><a href=""><i class="fa fa-pinterest icon-pin" data-toggle="tooltip" title="" data-original-title="Linkedin" data-placement="top"></i></a></li>

                                        </ul> <!--colored social-->
                                    </div>
                                    <div class="col-sm-5 text-right col-xs-12">
                                        <a href="../?title='.$title_nav.'&id='.$id.'" class="btn btn-theme-color">Read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!--blog more desc end-->
                        </div>  <!--blog-item section end-->';
    }
    }else{
        echo "<h2>No Blogs, something must have gone terribly wrong!</h2>";
    }
}



    ?>    
        
                       
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="pagination codeon-pagination">
                                    <li><a href="">«</a></li>
                                    <li><a href="">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">»</a></li>
                                </ul>
                            </div>

                        </div>
                    </div><!--blog left content end-->


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
                            if($tag == "Java" or $tag == "Python"){
                                $extension = ".png";
                            }
                            else{
                                $extension = ".jpg";
                            }

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
                        die("There is no posts, here.");
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
                            <h4>Follow Us</h4>
                            <ul class="list-inline social-colored">
                                <li><a href=""><i class="fa fa-facebook icon-fb" data-toggle="tooltip" title="" data-original-title="Facebook" data-placement="top"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter icon-twit" data-toggle="tooltip" title="" data-original-title="Twitter" data-placement="top"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus icon-plus" data-toggle="tooltip" title="" data-original-title="Google pluse" data-placement="top"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin icon-in" data-toggle="tooltip" title="" data-original-title="Linkedin" data-placement="top"></i></a></li>

                            </ul> <!--colored social-->
                        </div><!--sidebar-box-->
                    </div>                    


                    <!--sidebar end-->

                </div>
            </div>

        </section><!--blog list page end-->
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
        <a href="#" class="scrollToTop" style="display: none;"><i class="fa fa-angle-up"></i></a>
        <!--back to top end-->

        <!--script files-->
        <script src="./blog_list_files/jquery.min.js" type="text/javascript"></script>
        <script src="./blog_list_files/moderniz.min.js" type="text/javascript"></script>
        <script src="./blog_list_files/jquery-migrate.min.js" type="text/javascript"></script> 
        <script src="./blog_list_files/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="./blog_list_files/bootstrap.min.js" type="text/javascript"></script>
        
        <script src="./blog_list_files/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="./blog_list_files/wow.min.js" type="text/javascript"></script>
        <script src="./blog_list_files/jquery.sticky.js" type="text/javascript"></script>        
        <script src="./blog_list_files/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="./blog_list_files/jquery.stellar.min.js" type="text/javascript"></script>
        <script src="./blog_list_files/owl.carousel.min.js" type="text/javascript"></script>
        <script src="./blog_list_files/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
        <script src="./blog_list_files/waypoints.min.js"></script>
        <script src="./blog_list_files/easypiechart.js"></script>
        <script src="./blog_list_files/jquery.isotope.min.js" type="text/javascript"></script>
        <!--image loads plugin -->
        <script src="./blog_list_files/jquery.imagesloaded.min.js" type="text/javascript"></script>
        <script src="./blog_list_files/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="./blog_list_files/jquery.countdown.js" type="text/javascript"></script>
        <script src="./blog_list_files/contact_me.js" type="text/javascript"></script>

        <script src="./blog_list_files/jqBootstrapValidation.js" type="text/javascript"></script>
        <script src="./blog_list_files/custom.js" type="text/javascript"></script>
<script src="./blog_list_files/pace.min.js" type="text/javascript"></script>
        <!--revolution slider plugins-->
        <script src="./blog_list_files/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="./blog_list_files/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="./blog_list_files/revolution-custom.js" type="text/javascript"></script>
        <script src="./blog_list_files/isotope-custom.js" type="text/javascript"></script>

    

</body></html>