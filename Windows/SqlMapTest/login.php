<?php
		ob_start();
		session_start();
		require_once('database.php');
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SqlMap | Login</title>
  <!-- Bootstrap core CSS-->
  <link href="Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="Assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="Assets/css/layout.css" rel="stylesheet">
    <!-- My Css -->
    <link rel="stylesheet" href="Assets/css/styles.css">
</head>
<body class="bg-dark">
  <div class="container">
	<div class="card card-login mx-auto mt-5">
	  <div class="card-header">Login</div>
	  <div class="card-body">
		<form id="login-form" method="post" action="/SqlMapTest/dashboard.php">
		  <div class="form-group">
			<label for="login-username">Username</label>
			<input class="form-control" id="login-username" type="text" name="login-username" placeholder="Enter username">
			  <div id="login-username-div"></div>
		  </div>
		  <div class="form-group">
			<label for="login-password">Password</label>
			<input class="form-control" id="login-password" name="login-password" type="text" placeholder="Password">
			  <div id="login-password-div" class="text-danger">
					<?php
						if(isset($_SESSION['login_error'])) {
							if($_SESSION['login_error'] == true) {
								echo "Invalid username/password";
							}
							$_SESSION['login_error'] = false;
						}
					?>
				</div>
		  </div>
		  <div class="form-group">
			<div class="form-check">
			  <label class="form-check-label">
				<input class="form-check-input" type="checkbox"> Remember Password</label>
			</div>
		  </div>
			<button class="btn btn-primary btn-block" id="login-button" type="submit">Login</button>
		</form>
		<div class="text-center">
		  <a class="d-block small mt-3" href="register.php">Register an Account</a>
		  <a class="d-block small" href="#">Forgot Password?</a>
		</div>
	  </div>
	</div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="Assets/vendor/jquery/jquery.min.js"></script>
  <script src="Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="Assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!--  My Script -->
  <script src="Assets/js/script.js"></script>
</body>

</html>
