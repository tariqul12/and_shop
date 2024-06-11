<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2024 19:38:04 GMT -->
<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Andshop - Admin Dashboard HTML Template.">

		<title>Andshop - Admin Dashboard HTML Template.</title>
		
		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

		<link href="{{asset('/')}}admin-assets/assets/css/materialdesignicons.min.css" rel="stylesheet" />
		
		<!-- custom css -->
		<link id="style.css" rel="stylesheet" href="{{asset('/')}}admin-assets/assets/css/style.css" />
		
		<!-- FAVICON -->
		<link href="{{asset('/')}}admin-assets/assets/img/favicon.png" rel="shortcut icon" />
	</head>
	
	<body class="sign-inup" id="body">
		<div class="container">
			<div class="row g-0"> 
				<div class="col-lg-10 offset-lg-1">
					<div class="row g-0">
						<div class="col-lg-6">
							<div class="login_area_left_wrapper">
								<div class="login_logo_area">
									<img src="{{asset('/')}}admin-assets/assets/img/logo/logo-login.png" alt="">
									<p>Nulla laborum sit voluptate anim in. Nulla ut qui ex 
										ipsum id aliqua amet exercitation. Anim ididunt
										anim anim voluptate enim.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="login_area_right_wrapper">
								<div class="login_area_right_heading">
									<h4>Welcome Back!</h4>
									<p>Sign in to continue to <a href="#!">AndShop</a></p>
								</div>
								<div class="login_form_wrapper">
									<form action="{{route('login')}}" method="POST">
                                        @csrf

										<div class="form-group">
											<label>User name</label>
											<input type="email" class="form-control" name="email" :value="old('email')" required autofocus placeholder="Enter username" value="" />
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" required name="password" class="form-control" placeholder="Enter password">
										</div>
										<div class="login_form_forget">
											<a href="#!">Forgot password?</a>
										</div>
										<div class="login_form_bottm_area">
											<button type="submit" class="btn btn-primary w-100">Login</button>
											<div class="login_middel_title">
												<p>New to AndShop</p>
											</div>
											<a href="{{route('register')}}" class="btn custom_button w-100">Register</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Javascript -->
		<script src="{{asset('/')}}admin-assets/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
		<script src="{{asset('/')}}admin-assets/assets/js/bootstrap.bundle.min.js"></script>
		<script src="{{asset('/')}}admin-assets/assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
		<script src="{{asset('/')}}admin-assets/assets/plugins/slick/slick.min.js"></script>
	
		<!-- custom js -->	
		<script src="{{asset('/')}}admin-assets/assets/js/custom.js"></script>
	</body>


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2024 19:38:04 GMT -->
</html>