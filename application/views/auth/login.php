<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Login &mdash; Stisla</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url("themeadmin/") ?>assets/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url("themeadmin/") ?>assets/modules/fontawesome/css/all.min.css">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="<?php echo base_url("themeadmin/") ?>assets/modules/bootstrap-social/bootstrap-social.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url("themeadmin/") ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url("themeadmin/") ?>assets/css/components.css">
	<!-- Start GA -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-94034622-3');
	</script>
	<!-- /END GA -->
</head>

<body>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
						<div class="login-brand">
							<img src="<?php echo base_url("themeadmin/") ?>assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
						</div>

						<div class="card card-primary">
							<div class="card-header">
								<h4>Login</h4>
							</div>

							<div class="card-body">
								<div id="infoMessage"><?php echo $message; ?></div>
								<?php echo form_open("auth/login"); ?>
								<!-- <form method="POST" action="#" class="needs-validation" novalidate=""> -->
								<div class="form-group">
									<label for="email">Email</label>
									<!-- <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus> -->
									<?php echo form_input($identity); ?>

									<div class="invalid-feedback">
										Please fill in your email
									</div>
								</div>

								<div class="form-group">
									<div class="d-block">
										<label for="password" class="control-label">Password</label>
										<div class="float-right">
											<a href="auth-forgot-password.html" class="text-small">
												Forgot Password?
											</a>
										</div>
									</div>
									<!-- <input id="password" type="password" class="form-control" name="password" tabindex="2" required> -->
									<?php echo form_input($password); ?>

									<div class="invalid-feedback">
										please fill in your password
									</div>
								</div>

								<div class="form-group">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
										<label class="custom-control-label" for="remember-me">Remember Me</label>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
										Login
									</button>
								</div>
								<!-- </form> -->
								<?php echo form_close(); ?>



							</div>
						</div>
						<div class="mt-5 text-muted text-center">
							Don't have an account? <a href="auth-register.html">Create One</a>
						</div>
						<div class="simple-footer">
							Copyright &copy; Stisla 2018
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- General JS Scripts -->
	<script src="<?php echo base_url("themeadmin/") ?>assets/modules/jquery.min.js"></script>
	<script src="<?php echo base_url("themeadmin/") ?>assets/modules/popper.js"></script>
	<script src="<?php echo base_url("themeadmin/") ?>assets/modules/tooltip.js"></script>
	<script src="<?php echo base_url("themeadmin/") ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url("themeadmin/") ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
	<script src="<?php echo base_url("themeadmin/") ?>assets/modules/moment.min.js"></script>
	<script src="<?php echo base_url("themeadmin/") ?>assets/js/stisla.js"></script>

	<!-- JS Libraies -->

	<!-- Page Specific JS File -->

	<!-- Template JS File -->
	<script src="<?php echo base_url("themeadmin/") ?>assets/js/scripts.js"></script>
	<script src="<?php echo base_url("themeadmin/") ?>assets/js/custom.js"></script>
</body>

</html>

<h1><?php echo lang('login_heading'); ?></h1>
<p><?php echo lang('login_subheading'); ?></p>

<div id="infoMessage"><?php echo $message; ?></div>

<?php echo form_open("auth/login"); ?>

<p>
	<?php echo lang('login_identity_label', 'identity'); ?>
	<?php echo form_input($identity); ?>
</p>

<p>
	<?php echo lang('login_password_label', 'password'); ?>
	<?php echo form_input($password); ?>
</p>

<p>
	<?php echo lang('login_remember_label', 'remember'); ?>
	<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
</p>


<p><?php echo form_submit('submit', lang('login_submit_btn')); ?></p>

<?php echo form_close(); ?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
