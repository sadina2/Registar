<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<title  style="font-size:120%"> Sigurnost u saobraćaju </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta charset="utf-8">
				<meta name="keywords" content="Sigurnost u saobraćaju" />
				<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
				<link href="css/style.css" rel='stylesheet' type='text/css' />
				<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
				<link href="css/contact.css" rel='stylesheet' type='text/css' />
				<link href="css/font-awesome.css" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
				</head>
						<body>
							<!--Header-->
							<div class="top-bar_sub_w3layouts_agile">
								<h6 > Admin  | Management  </h6>
								<!-- <a href="index.html">Contact Us </a> -->
								<div class="search">
									<h5>
										<a class="sign" href="#" >LOG OUT</a>
									</h5>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="container">
								<br>
									<div class="edu_button">
										<a class="btn btn-primary btn-lg hvr-underline-from-left" href="admin.php" role="button">Natrag </a>
									</div>
								</div>
								<!--//Header-->
								
									<div class="container">
										<div class="register-form">
											<form method="post" action="novikorisnik.php">
												<?php echo display_error(); ?>
												<div class="input-group">
													<label>Username</label>
													<input type="text" name="username" value="
														<?php echo $username; ?>">
													</div>
													<div class="input-group">
														<label>Email</label>
														<input type="email" name="email" value="
															<?php echo $email; ?>">
														</div>
														<div class="input-group">
															<label>User type</label>
															<select name="user_type" id="user_type" >
																<option value=""></option>
																<option value="admin">Admin</option>
																<option value="user">User</option>
															</select>
														</div>
														<div class="input-group">
															<label>Password</label><br>
															<input type="password" name="password_1">
															</div>
															<div class="input-group">
																<label>Confirm password</label><br>
																<input type="password" name="password_2">
																</div>
																<div class="input-group">
																	<button type="submit" class="btn" name="register_btn"> + Create user</button>
																</div>
															</form>
															
														</div>
														<br>
													</div>
												
												<!--footer-->
												<div class="contact-footer-w3layouts-agile">
													<div class="bottom-social-agileits-w3ls">
			<div class="container">
				<div class="col-md-8 botttom-nav-w3ls-agileits">
					
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 social-icons-wthree">
					<h6>Connect with us</h6>
					<a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
					<a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
					<a class="pinterest" href="#"><span class="fa fa-pinterest-p"></span></a>
					<a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
													<div class="copy-w3-agileits">
														<h2 class="footer-logo">
															<a href="index.html">Sigurnost u saobraćaju  </a>
														</h2>
														<p>©  All Rights Reserved | Design by 
									
															<a href="http://">5</a>
														</p>
														<div class="clearfix"></div>
													</div>
												</div>
												<!--/footer -->
												<!-- js -->
												<script type="text/javascript" src="C:\wamp64\www\js\jquery-2.2.3.min.js"></script>
												<!-- //js -->
												<!--search-bar-->
												<script src="C:\wamp64\www\js\main.js"></script>
												<!--//search-bar-->
												<!-- start-smoth-scrolling -->
												<script type="text/javascript" src="C:\wamp64\www\js\move-top.js"></script>
												<script type="text/javascript" src="C:\wamp64\www\js\easing.js"></script>
												<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 10);
			});
		});
	</script>
		
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

	</body>
	</html>