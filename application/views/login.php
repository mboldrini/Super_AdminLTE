<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link href="<?php echo base_url();?>assets/images/icons/favicon.ico" rel="stylesheet" type="text/css" />
<!--===============================================================================================-->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!--===============================================================================================-->
    <link href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--===============================================================================================-->
    <link href="<?php echo base_url();?>assets/vendor/animate/animate.css" rel="stylesheet" type="text/css" />
<!--===============================================================================================-->	
    <link href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" type="text/css" />
<!--===============================================================================================-->
    <link href="<?php echo base_url();?>assets/vendor/select2/select2.min.css" rel="stylesheet" type="text/css" />
<!--===============================================================================================-->
    <link href="<?php echo base_url();?>assets/css/util.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet" type="text/css" />
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url();?>assets/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?php echo site_url('login/auth');?>" method="post">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
    <script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url('assets/vendor/tilt/tilt.jquery.min.js');?>"></script>
    
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>