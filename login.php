<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Gold | Jewellry</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
  body {
    background-image:url('./dist/img/back.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
    font-family: 'Source Sans Pro', sans-serif;
  }

  .login-box {
    background-color: plum; 
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }

  .login-logo {
    text-align: center;
    margin-bottom: 10px;
    background-color: white; /* Set the background color for the logo area */
    padding: 10px; /* Add some padding for separation */
    border-radius: 50px; /* Add border radius for rounded corners */
  }

  .login-card-body {
    padding: 20px;
  }

  /* Add your existing styles here */
</style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img class='w-50' src="./dist/img/logo3.png" alt="indoarsip-logo"  style='border-radius:50px;'><br>
      <a href="./index.php"><b style='color:red;'>Gold</b><b style='color:red;'>Market</b> </a>
      <hr>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in </p>

        <form action="./include/login.php" method="post">
          <div class="input-group mb-3">
            <input type="text" name='username' class="form-control" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name='password' class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
	<?php 
	if (isset($_SESSION['error']) 
		and !empty($_SESSION['error']))
	{
	
	$msg = "<div class='alert alert-danger'><strong>Fail!</strong>  ".$_SESSION['error']."</div>";
	echo $msg;
	$_SESSION['error']="";
			}
	?> 
            </div>
            <!-- /.col -->
          </div>
        </form>


        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>