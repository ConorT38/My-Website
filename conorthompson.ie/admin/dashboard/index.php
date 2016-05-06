<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: ../");
    die();
}

?>
<!DOCTYPE html>
<!-- saved from url=(0050)http://webapplayers.com/luna_admin-v1.1/index.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./LUNA _Dashboard_files/css" rel="stylesheet" type="text/css">

    <!-- Page title -->
    <title>Dashboard | Conor Thompson</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="./LUNA _Dashboard_files/font-awesome.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="./LUNA _Dashboard_files/animate.css">
    <link rel="stylesheet" href="./LUNA _Dashboard_files/bootstrap.css">
    <link rel="stylesheet" href="./LUNA _Dashboard_files/toastr.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="./LUNA _Dashboard_files/style.css">
    <link rel="stylesheet" href="./icons/pe-icon-7-stroke/css/helper.css">
    <link rel="stylesheet" href="./icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    
    <link rel="stylesheet" href="./LUNA _Dashboard_files/style(1).css">
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<body class=" pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="http://webapplayers.com/luna_admin-v1.1/index.html#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="http://www.conorthompson.ie/admin/dashboard/">
                    Conor
                    <span>Admin</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <form class="navbar-form navbar-left">
                    <input type="text" class="form-control" placeholder="Search data for analysis" style="width: 375px">
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class=" profil-link">
                        <a href="../../">
                            <span class="profile-address"><?php echo $_SESSION['admin'];?></span>
                            <img src="../../img/Conor.jpg" class="img-circle" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
                <li class="nav-category">
                    Main
                </li>
                <li class="active">
                    <a href="../dashboard/">Dashboard</a>
                </li>

                  <li>
                    <a href="#profile" data-toggle="collapse" aria-expanded="false">
                        Profile <span class="sub-nav-icon"> </span>
                    </a>
                    <ul id="profile" class="nav nav-second collapse">
                        <li><a href="#" id="newsletter">Newsletter</a></li>
                        <li><a href="#" id="blog">Blog</a></li>
                        <li><a href="#" id="logout">Logout</a></li>
                        
                    </ul>
                </li>
                <li class="nav-info">
                    <i class="pe pe-7s-shield text-accent"></i>
                    <div class="m-t-xs">
                        <span class="c-white">Admin</span> page, this displays all of the data held in the data marts to give an idea of how well the site is doing, and how many visitors,emails etc. That I am getting.
                    </div>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- End navigation-->


    <!-- Main content-->
    <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe page-header-icon pe-7s-shield"></i>
                            </div>
                            <div class="header-title">
                                <h3 class="m-b-xs">Portfolio Statistics</h3>
                                <small>
                                    All of the statistics for my portfolio website, counting visitors/interactions etc.
                                </small>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
<div class="modal fade" id="newsletter_modal" role="dialog">
   <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-edit"></span> Write a Newsletter:</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-bookmark"></span> Title:</label>
              <textarea class="form-control" rows="2"  id="newsletter_title"></textarea>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-font"></span> Content:</label>
              <textarea class="form-control" rows="20"  id="newsletter_content"></textarea>
            </div>
              <button type="submit" id="newsletter_submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
  </div> 
  </div> 
  <div class="modal fade" id="blog_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-edit"></span> Write a Blog:</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="title"><span class="glyphicon glyphicon-bookmark"></span> Title:</label>
              <input type="text" class="form-control" rows="2" id="blog_title"/><br/>
              <input type="text" class="form-control" length="10" id="tag" placeholder="Tag:" stlye="margin-top:10px;"/>
            </div>
            <div class="form-group">
              <label for="contnt"><span class="glyphicon glyphicon-font"></span> Blog:</label>
              <textarea class="form-control" rows="20" id="blog_content"></textarea>
            </div>
              <button type="submit" id="blog_submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 


                <div class="row">

                  <?php
                  include 'panels/mobile_users_panel.php';
                  include 'panels/desktop_users_panel.php';
                  include 'panels/today_users_panel.php';
                  include 'panels/time_panel.php';
                  ?>
                   
                    <div class="col-lg-4 col-xs-12">
                        <div class="panel panel-filled" style="position:relative;height: 114px">
                            <div style="position: absolute;bottom: 0;left: 0;right: 0">
                                <span class="sparkline"><canvas width="528" height="47" style="display: inline-block; width: 528px; height: 47px; vertical-align: top;"></canvas></span>
                            </div>
                            <div class="panel-body">
                                <div class="m-t-sm">
                                    <div class="pull-right">
                                        <a href="http://webapplayers.com/luna_admin-v1.1/index.html#" class="btn btn-default btn-xs">See locations</a>
                                    </div>
                                    <div class="c-white"><span class="label label-accent">+45</span> New visitor</div>
                                    <span class="small c-white">120,312 <i class="fa fa-play fa-rotate-270 text-warning"> </i> -22%</span>
                                    <!--<span class="sparkline"></span>-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                  <?php
                  include 'panels/total_users_panel.php';
                  ?>
                    <div class="col-md-8">
                        <div class="panel panel-filled">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="panel-body h-200 list">
                                        <div class="stats-title pull-left">
                                            <h4>Traffic source</h4>
                                        </div>
                                        <div class="m-t-xl">
                                            <small>
                                                More than 30% percent of users come from direct links. Check details page for more information.
                                            </small>
                                        </div>


                                        <div class="progress m-t-xs full progress-small">
                                            <div style="width: 35%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" role="progressbar" class=" progress-bar progress-bar-warning">
                                                <span class="sr-only">35% Complete (success)</span>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <small class="stat-label">Today</small>
                                                <h4 class="m-t-xs">170,20 <i class="fa fa-level-up text-warning"></i></h4>
                                            </div>
                                            <div class="col-md-6">
                                                <small class="stat-label">Last month %</small>
                                                <h4 class="m-t-xs">%20,20 <i class="fa fa-level-down c-white"></i></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="panel-body">
                                        <div class="text-center slight">
                                        </div>

                                        <div class="flot-chart" style="height: 160px;margin-top: 5px">
                                            <div class="flot-chart-content" id="flot-line-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="682" height="160" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 682px; height: 160px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 143px; left: 10px; text-align: center;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 143px; left: 104px; text-align: center;">1.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 143px; left: 197px; text-align: center;">2.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 143px; left: 291px; text-align: center;">3.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 143px; left: 385px; text-align: center;">4.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 143px; left: 479px; text-align: center;">5.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 143px; left: 572px; text-align: center;">6.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 143px; left: 666px; text-align: center;">7.0</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 130px; left: 6px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 97px; left: 0px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 65px; left: 0px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 33px; left: 0px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">80</div></div></div><canvas class="flot-overlay" width="682" height="160" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 682px; height: 160px;"></canvas></div>
                                        </div>

                                        <div class="small text-center">All active users from last month.</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                       <?php
                  include 'panels/device_panel.php';
                  ?>
                    </div>
                    <div class="col-md-4">
                        <?php
                  include 'panels/CV_download_panel.php';
                  ?>
                        
                    </div>

                </div>

            </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script async="" src="./LUNA _Dashboard_files/analytics.js"></script><script src="./LUNA _Dashboard_files/pace.min.js"></script>
<script src="./LUNA _Dashboard_files/jquery.min.js"></script>
<script src="./LUNA _Dashboard_files/bootstrap.min.js"></script>
<script src="./LUNA _Dashboard_files/toastr.min.js"></script>
<script src="./LUNA _Dashboard_files/index.js"></script>
<script src="./LUNA _Dashboard_files/jquery.flot.min.js"></script>
<script src="./LUNA _Dashboard_files/jquery.flot.resize.min.js"></script>
<script src="./LUNA _Dashboard_files/jquery.flot.spline.js"></script>

<!-- App scripts -->
<script src="./LUNA _Dashboard_files/luna.js"></script>

<script>
    $(document).ready(function () {


        // Sparkline charts
        var sparklineCharts = function () {
            $(".sparkline").sparkline([20, 34, 43, 43, 35, 44, 32, 44, 52, 45], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#404652',
                height: 47,
                width: '100%'
            });

            $(".sparkline7").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#f7af3e',
                height: 75,
                width: '100%'
            });

            $(".sparkline1").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5, 1, 6, 7, 15, 6, 4, 0], {
                type: 'line',
                lineColor: '#2978BB',
                lineWidth: 3,
                fillColor: '#2978BB',
                height: 170,
                width: '100%'
            });

            $(".sparkline3").sparkline([-8, 2, 4, 3, 5, 4, 3, 5, 5, 6, 3, 9, 7, 3, 5, 6, 9, 5, 6, 7, 2, 3, 9, 6, 6, 7, 8, 10, 15, 16, 17, 15], {

                type: 'line',
                lineColor: '#fff',
                lineWidth: 3,
                fillColor: '#393D47',
                height: 70,
                width: '100%'
            });

            $(".sparkline5").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5], {
                type: 'line',
                lineColor: '#f7af3e',
                lineWidth: 2,
                fillColor: '#2F323B',
                height: 20,
                width: '100%'
            });
            $(".sparkline6").sparkline([0, 1, 4, 2, 2, 4, 1, 4, 3, 2, 3, 4, 4, 2, 4, 2, 1, 3], {
                type: 'bar',
                barColor: '#f7af3e',
                height: 20,
                width: '100%'
            });

            $(".sparkline8").sparkline([4, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline9").sparkline([3, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline10").sparkline([4, 1], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline11").sparkline([1, 3], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline12").sparkline([3, 5], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline13").sparkline([6, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
        };

        var sparkResize;

        // Resize sparkline charts on window resize
        $(window).resize(function () {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineCharts, 100);
        });

        // Run sparkline
        sparklineCharts();


        // Flot charts data and options
        var data1 = [ [0, 16], [1, 24], [2, 11], [3, 7], [4, 10], [5, 15], [6, 24], [7, 30] ];
        var data2 = [ [0, 26], [1, 44], [2, 31], [3, 27], [4, 36], [5, 46], [6, 56], [7, 66] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 1

                }

            },
            grid: {
                tickColor: "#404652",
                borderWidth: 0,
                borderColor: '#404652',
                color: '#404652'
            },
            colors: [ "#f7af3e","#DE9536"]
        };

        $.plot($("#flot-line-chart"), [data2, data1], chartUsersOptions);


        // Run toastr notification with Welcome message
        setTimeout(function(){
            toastr.options = {
                "positionClass": "toast-top-right",
                "closeButton": true,
                "progressBar": true,
                "showEasing": "swing",
                "timeOut": "6000"
            };
            toastr.warning('<strong>Welcome to my tasty little dashboard</strong> <br/><small>Have a wee gander if you\'d like!</small>');
        },1600)


    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-4625583-2', 'webapplayers.com');
    ga('send', 'pageview');

</script>
<script type="text/javascript">
    $(document).ready(function(){
$('#logout').click(function(){
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "Logout/logout.php",
success: function(result){
window.location='http://www.conorthompson.ie/admin/';
}
});
return false;
});


//Blog AJAX
$('#blog_submit').click(function(){

// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "Blog/blog.php",
data: {
    'title': $('#blog_title').val(),
    'content': $('#blog_content').val(),
    'tag' : $('#tag').val()
},
success: function(result){
setTimeout(function(){
            toastr.options = {
                "positionClass": "toast-top-right",
                "closeButton": true,
                "progressBar": true,
                "showEasing": "swing",
                "timeOut": "6000"
            };
            toastr.success('<strong>Blog sent!</strong>');
        },1600);
$("#blog_modal").modal('hide');
}
});
return false;
});

//Newsletter AJAX
$('#newsletter_submit').click(function(){
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "Newsletter/newsletter.php",
data: {
    'title': $('#newsletter_title').val(),
    'content': $('#newsletter_content').val()
},
success: function(result){
setTimeout(function(){
            toastr.options = {
                "positionClass": "toast-top-right",
                "closeButton": true,
                "progressBar": true,
                "showEasing": "swing",
                "timeOut": "6000"
            };
            toastr.success('<strong>Newsletter sent!</strong>');
        },1600);
$("#newsletter_modal").modal('hide');
}
});
return false;
});


});

</script>
<script>
$(document).ready(function(){
    $("#newsletter").click(function(){
        $("#newsletter_modal").modal();
    });
    $("#blog").click(function(){
        $("#blog_modal").modal();
    });
});
</script>


</body>
</html>