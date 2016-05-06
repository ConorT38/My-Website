<?php
session_start();
if(isset($_SESSION['admin'])){
    header("Location: dashboard/");
    die();
}
?>
<!DOCTYPE html>
<!-- saved from url=(0050)http://webapplayers.com/luna_admin-v1.1/login.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./files/css" rel="stylesheet" type="text/css">

    <!-- Page title -->
    <title>Admin | Conor Thompson</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="./files/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./files/animate.css">
    <link rel="stylesheet" href="./files/bootstrap.css">

    <!-- App styles -->
    <link rel="stylesheet" href="./files/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="./files/helper.css">
    <link rel="stylesheet" href="./files/style.css">
    <link rel="stylesheet" href="./files/style(1).css">
</head>
<body class="blank  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

<!-- Wrapper-->
<div class="wrapper">


    <!-- Main content-->
    <section class="content">
        <div class="back-link">
            <a href="../" class="btn btn-accent">Back to Site</a>
        </div>

        <div class="container-center animated slideInDown">
        <div id="result"></div>


            <div class="view-header">
                <div class="header-icon">
                    <i class="fa fa-lock"></i>
                </div>
                <div class="header-title">
                    <h3>Login</h3>
                    <small>
                        Please enter your credentials to login.
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" placeholder="example@gmail.com" title="Please enter you username" name="username" id="username" class="form-control">
                            <span class="help-block small">Username for login.</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" name="password" id="password" class="form-control">
                            <span class="help-block small">Your strong password</span>
                        </div>
                        <div>
                            <button class="btn btn-accent" id="submit">Login</button>
                        </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="./files/pace.min.js"></script>
<script src="./files/jquery.min.js"></script>
<script src="./files/bootstrap.min.js"></script>

<!-- App scripts -->
<script src="./files/luna.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
$('#submit').click(function(){
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "Login/login.php",
data: {
        'username':$("#username").val(),
        'password':$("#password").val()
    },
success: function(result){
    location.reload();
document.getElementById("result").innerHTML = result;
window.location='http://www.conorthompson.ie/admin/dashboard/';
}
});
return false;
});
});


</script>



</body></html>