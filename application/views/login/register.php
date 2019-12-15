<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assetslogin/images/icons/favicon.ico')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/css/main.css')?>">
<!--===============================================================================================-->
</head>
		
<body>
		<div class="container-login100" style="background-image: url('<?php echo base_url('assetslogin/images/kue3.jpeg')?>');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Memalinu Bites Login
				</span>

				<form class="login100-form validate-form p-b-33 p-t-5" action="<?php echo base_url('login/register/register')?>"  method="post">
		        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <?= form_error('nama');?>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                      
					
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <?= form_error('password');?>
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                      
					
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Enter email">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <?= form_error('email');?>
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        
					
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Enter alamat">
						<input class="input100" type="text" name="alamat" placeholder="Alamat">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Enter Telepon">
                        <input class="input100" type="number" name="telepon" placeholder="Telepon">
                        <?= form_error('telepon');?>
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                       
					
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Sign Up
						</button>
	
</div>

                     
					
				</form>
			</div>
		</div>
	</div>
	
	
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('assetslogin/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('assetslogin/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/js/main.js')?>"></script>

</body>

</html>