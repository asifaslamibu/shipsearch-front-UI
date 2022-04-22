	<?php
	include('session_input.php')
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="description" />
		<meta name="keywords" content="keywords" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<title>Ship Search</title>
		<!-- styles-->
		<link rel="stylesheet" href="css/styles.min.css" />
		<!-- web-font loader-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="assets/css/pages/contact_us.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
		<link rel="stylesheet" type="text/css" href="assets/css/elements/alert.css">
		<link href="assets/css/components/custom-carousel.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="dist/style.css">
		<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
		<!-- END GLOBAL MANDATORY STYLES -->

		<!--  BEGIN CUSTOM STYLE FILE  -->
		<link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />

		<link href="assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
		</script>

		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
		<script>
			WebFontConfig = {
				google: {

					families: ['Inter:300,400,500,700', 'Open+Sans:700'],

				}
			}

			function font() {

				var wf = document.createElement('script')

				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
					'://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
				wf.type = 'text/javascript'
				wf.async = 'true'

				var s = document.getElementsByTagName('script')[0]

				s.parentNode.insertBefore(wf, s)

			}

			font()
		</script>
		<!--     -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js">
		</script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js">
		</script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	</head>
	<style>
		body {
			/* font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 14px;
		line-height: 1.42857143;
		color: #333; */
			background-color: #f8f8f8;
		}

		.page-footer__details a {
			color: white;
		}

		.page-footer__details p {
			color: white;
		}

		.flip-card.active-card {
			background-color: white;
		}

		.button--filled {
			color: #fff;
			font-size: 14px;
			background: #00997d;
			height: 70px;
			line-height: 70px;
			min-width: 210px;
			padding: 0 30px;
		}

		.form-container.outer {
			position: absolute;
			z-index: 1;
			left: calc(100% - 45%);
		}

		.form__fieldss {
			display: inline-block;
			width: 100%;
			height: 34px;
			font-size: 14px;
			border: 1px solid #e2e2e2;
			margin-bottom: 20px;
			padding: 0 20px;
			border-radius: 0;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			-webkit-transition: all .3s;
			-o-transition: all .3s;
			transition: all .3s;
		}

		.col-lg-6-v {
			background-color: white;

			border: 2px solid #00997d;
			border-radius: 0 0 20px 0;
			width: 523px;
			padding: 6%;
			margin-top: 40px;
		}

		a.button.button--green {
			background: #00997d;
			color: white;
		}

		.cv {
			text-align: center;
			padding: 18px;
			background-color: #569e78;

		}

		#vn {
			position: relative;
			width: 100%;
			padding-right: 0px;
			padding-left: 0px;
		}

		.imm {
			height: 500px;
		}

		/* @media only screen and (min-width: 1200px) */


		.hamburger.d-none.d-md-inline-block.hamburger--white {
			display: none !important;
		}


		.select_input {
			margin-left: -31px !important;
		}

		.promo-form label {
			position: relative;
			width: 100%;
			margin-bottom: 1%;
		}

		.st {
			left: 2%;
			width: 2%;
		}

		/* .button--green{
		background: #00997d;
	} */


		:focus {
			outline: none !important;
		}

		::-moz-focus-inner {
			border: 0 !important;
		}

		@keyframes flip-in {
			from {
				transform: rotateY(-90deg);
				-webkit-transform: rotateY(-90deg);
			}

			to {
				transform: rotateY(0deg);
				-webkit-transform: rotateY(0deg);
			}
		}

		@-webkit-keyframes flip-in {
			from {
				transform: rotateY(-90deg);
				-webkit-transform: rotateY(-90deg);
			}

			to {
				transform: rotateY(0deg);
				-webkit-transform: rotateY(0deg);
			}
		}

		@keyframes flip-out {
			from {
				transform: rotateY(0deg);
				-webkit-transform: rotateY(0deg);
			}

			to {
				transform: rotateY(90deg);
				-webkit-transform: rotateY(90deg);
			}
		}

		@-webkit-keyframes flip-out {
			from {
				transform: rotateY(0deg);
				-webkit-transform: rotateY(0deg);
			}

			to {
				transform: rotateY(90deg);
				-webkit-transform: rotateY(90deg);
			}
		}

		@keyframes soften {
			from {
				opacity: 1;
				-webkit-opacity: 1;
			}
		}

		@-webkit-keyframes soften {
			from {
				opacity: 1;
				-webkit-opacity: 1;
			}
		}

		div.flip-card {
			transition: transform 1s;
			display: none;
		}

		div.active-card {
			display: block;
			transform: rotateY(0deg);
		}

		div.flip-in {
			animation: flip-in 1s ease-out;
			-webkit-animation: flip-in 1s;
		}

		div.flip-out {
			animation: flip-out 1s ease-in;
			-webkit-animation: flip-out 1s;
		}

		.card {
			width: 100%;
			height: 280px;
			overflow: hidden;
			position: relative;
			border-radius: 3px 3px 0 0;
			transition: opacity 0.2s;
			-webkit-transition: opacity 0.2s;
		}

		.card:hover {
			animation: soften 0.2s;
			opacity: 0.8;
			cursor: pointer;
		}

		.card h6 {
			display: block;
			position: relative;
			text-align: center;
			margin-top: 50px;
			font-size: 16em;
		}

		.card img {
			position: absolute;
			left: -100%;
			right: -100%;
			top: -100%;
			bottom: -100%;
			margin: auto;
			min-height: 100%;
			min-width: 100%;
		}

		.full-card {
			position: relative;
			transition: all 1.2s;
		}

		.full-card .btn-fab {
			float: right;
			margin-top: -28px;
			margin-right: 14px;
		}

		.well {
			min-height: 20px;
			padding: 19px;
			margin-bottom: 20px;
			background-color: #fff;
			border: 1px solid #e3e3e3;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%);
			box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%);
		}

		#col6 {


			background-color: #569e78;
			height: 568px;
		}

		#col7 {



			/* background-color: #569e78; */
			height: 568px;
		}

		.normal-underline {
			text-decoration: underline;
			color: white;
		}

		.card_img {
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 50%;
		}

		.social-link {
			width: 30px;
			height: 30px;
			border: 1px solid #ddd;
			display: flex;
			align-items: center;
			justify-content: center;
			color: #666;
			border-radius: 50%;
			transition: all 0.3s;
			font-size: 0.9rem;
		}

		.social-link:hover,
		.social-link:focus {
			background: #ddd;
			text-decoration: none;
			color: #555;

		}

		.expend_label {
			font-weight: 700;
			color: #000;
			font-size: 12px;
			margin-bottom: 0;
		}

		.expend_text {
			color: #978e8e;
			font-size: 12px;
		}

		.bg_theme {
			background: #00997d;
		}

		.select2-container {
			width: 100% !important;
		}

		.select2-container--default .select2-selection--multiple {
			min-height: 50px !important;
			border: 1px solid #e2e2e2 !important;
			max-height: max-content !important;


		}

		.vert .carousel-item-next.carousel-item-left,
		.vert .carousel-item-prev.carousel-item-right {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
		}

		.vert .carousel-item-next,
		.vert .active.carousel-item-right {
			-webkit-transform: translate3d(0, 100%, 0);
			transform: translate3d(0, 100% 0);
		}

		.vert .carousel-item-prev,
		.vert .active.carousel-item-left {
			-webkit-transform: translate3d(0, -100%, 0);
			transform: translate3d(0, -100%, 0);
		}
	</style>

	</head>
	<?php
	include("config_indemnifier.php");

	if (isset($_POST['submit'])) {

		$from = mysqli_real_escape_string($db, $_POST['from']);
		$to = mysqli_real_escape_string($db, $_POST['to']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);

		$sql = "INSERT INTO  ss_requests (`from`,`to`,`phone`)
    VALUES ('$from','$to', '$phone')";
		// echo $sql;

		if (mysqli_query($db, $sql)) {
			echo '<script>alert("Request Send successfully")</script>';
		} else {
			// $erre ="Error: " . $sql . "<br>" . mysqli_error($db);
			echo "Error: " . $sql . "<br>" . mysqli_error($db);
		}
	}


	$qry = mysqli_query($db, "SELECT cargo_id FROM ship.ss_cargo order by cargo_id desc limit 1;"); // select query

	$data = mysqli_fetch_array($qry);

	$country = mysqli_query($db, "SELECT * FROM ship.ss_setup_country order by country_id desc limit 20;");
	$city = mysqli_query($db, "SELECT * FROM ship.ss_setup_city limit 20");
	$state = mysqli_query($db, "SELECT * FROM ship.ss_setup_state limit 20");
	$cargo_type = mysqli_query($db, "SELECT * FROM ship.ss_setup_cargo_type order by cargo_type_id desc limit 20");
	$port = mysqli_query($db, "SELECT * FROM ship.ss_setup_port limit 20");
	$ss_setup_vessel_type = mysqli_query($db, "SELECT * FROM ship.ss_setup_vessel_type limit 20");
	$region = mysqli_query($db, "SELECT * FROM ship.ss_setup_region limit 20");
	$ss_setup_charter_type = mysqli_query($db, "SELECT * FROM ship.ss_setup_charter_type order by charter_type_name asc");



	?>

	<body>
		<div class="page-wrapper">
			<div class="menu-dropdown">
				<div class="menu-dropdown__inner" data-value="start">
					<div class="screen screen--start">
						<div class="menu-dropdown__close">
							<svg class="icon">
								<use xlink:href="#close"></use>
							</svg>
						</div>

						<div class="screen__item"><a class="screen__link" href="manage_cargo.php">CARGO</a></div>
						<div class="screen__item"><a class="screen__link" href="manage_vessel.php">VESSEL CHARTER</a></div>
						<div class="screen__item"><a class="screen__link" href="sales_purchase.php">SALE & PURCHASE</a>
						</div>
						<div class="screen__item"><a class="screen__link" href="directory.php">DIRECTORY</a></div>
						<div class="screen__item"><a class="screen__link" href="messenger.php">MESSENGER</a></div>

						<div class="menu-dropdown__block top-50"><span class="block__title">Email</span><a class="screen__link" href="mailto:support@helpo.org">support@helpo.org</a></div>
						<div class="menu-dropdown__block top-20"><span class="block__title">Phone numbers</span><a class="screen__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="screen__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div>

						<div class="menu-dropdown__block top-50">
							<?php
							$user_id = $_SESSION['user_id'];
							if ($user_id != '') {  ?>
								<a class="button button--green" href="logout.php">Logout</a>


							<?php } else { ?>
								<a class="button button--green" href="login.php">Login</a>
								&nbsp;
								<a class="button button--green" href="register.php">Register</a>
							<?php } ?>
						</div>
					</div>
				</div>

			</div>
			<!-- menu dropdown end-->
			<!-- header start-->
			<header class="page-header_3">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-6 col-md-6 col-lg-3 d-flex align-items-center">
							<div class="hamburger d-none d-md-inline-block hamburger--white">
								<div class="hamburger-inner"></div>
							</div>
							<div class="page-header__logo logo--white"><a href="index.php"><img src="images/final_logo white.png" alt="logo" /></a></div>
							<div class="page-header__logo logo--dark"><a href=""><img src="images/final_logo.png" alt="logo" /></a>
							</div>
						</div>
						<div class="col-lg-6 d-none d-lg-flex justify-content-center">
							<!-- main menu start-->
							<ul class="main-menu main-menu--white">
								<li class="main-menu__item main-menu__item"><a class="main-menu__link" href="manage_cargo.php"><span>Cargo</span></a>

								</li>
								<li class="main-menu__item main-menu__item"><a class="main-menu__link" href="manage_vessel.php"><span>Vessel
											Charter</span></a>

								</li>
								<li class="main-menu__item main-menu__item  "><a class="main-menu__link" href="sales_purchase.php"><span>Sale & Purchase</span></a>

								</li>
								<li class="main-menu__item main-menu__item  "><a class="main-menu__link" href="directory.php"><span>Directory</span></a>

								</li>
								<li class="main-menu__item main-menu__item  "><a class="main-menu__link" href="messenger.php"><span>Messenger</span></a>

								</li>
							</ul>
							<!-- main menu end-->
						</div>
						<div class="col-4 col-md-6 col-lg-3 d-flex justify-content-end align-items-center">

							<?php

							if ($user_id != '') {  ?>
								<a class="button button--green" href="logout.php">Logout</a>


							<?php } else { ?>
								<a class="button button--green" href="login.php">Login</a>
								&nbsp;
								<a class="button button--green" href="register.php">Register</a>
							<?php } ?>
							<!-- menu-trigger start-->
							<div class="hamburger d-inline-block d-md-none hamburger--dark">
								<div class="hamburger-inner"></div>
							</div>
							<!-- menu-trigger end-->
						</div>
					</div>
				</div>
			</header>
			<!-- header end-->
			<!-- header end-->
			<main class="main">
				<!-- promo start-->
				<div class="front-promo">
					<div class="front-promo__layout"></div>
					<picture>

						<img class="img--bg" src="images/sliderupdated 2.jpg" alt="img" />
					</picture>
					<div class="align-container">
						<div class="align-container__item">
							<div class="container">
								<div class="row align-items-center">
								</div>
							</div>
						</div>
					</div>
					<div class="promo-tabs tabs horizontal-tabs">
						<ul class="horizontal-tabs__header">
							<li><a href="#horizontal-tabs__item-1"><span>Cargo</span></a></li>
							<li><a href="#horizontal-tabs__item-2"><span>Vessel Charter</span></a></li>
							<li><a href="#horizontal-tabs__item-3"><span>Sale & Purchase</span></a></li>
							<!-- <li><a href="#horizontal-tabs__item-4"><span>Directory</span></a></li> -->
						</ul>
						<div class="horizontal-tabs__content">
							<div class="horizontal-tabs__item" id="horizontal-tabs__item-1">
								<form class="form promo-form promo-form--f5" action="manage_cargo.php" method="POST">
									<div class="row offset-20">
										<div class="col-md-12">
											<label for="">Select Cargo(s)</label>
											<select name="v_cargo_type[]" class="js-example-basic-multiple" multiple="multiple" required id="v_cargo_type">
												<?php foreach ($cargo_type as $key => $value) { ?>
													<option groupid="<?= $value['cargo_type_name']; ?>" value="<?= $value['cargo_type_id']; ?>">
														<?= $value['cargo_type_name']; ?>
													</option>
												<?php } ?>
											</select>
										</div>

										<div class="col-md-6">
											<label for="inputEmail4">Loading Region(s)</label>

											<select name="v_region[]" class="js-example-basic-multiple" multiple="multiple" required id="v_region">
												<?php foreach ($region as $key => $value) { ?>
													<option groupid="<?= $value['region_name']; ?>" value="<?= $value['region_id']; ?>">
														<?= $value['region_name']; ?>
													</option>
												<?php } ?>
											</select>
										</div>

										<div class="col-md-6">
											<label for="inputEmail4">Discharge Region(s)</label>

											<select name="d_region[]" class="js-example-basic-multiple" multiple="multiple" required id="d_region">
												<?php foreach ($region as $key => $value) { ?>
													<option groupid="<?= $value['region_name']; ?>" value="<?= $value['region_id']; ?>">
														<?= $value['region_name']; ?>
													</option>
												<?php } ?>
											</select>
										</div>

										<div class="col-md-6">
											<label for="inputEmail4">Loading Country(s)</label>

											<select name="v_country[]" class="js-example-basic-multiple" multiple="multiple" required id="v_country">
												<?php foreach ($country as $key => $value) { ?>
													<option groupid="<?= $value['country_name']; ?>" value="<?= $value['country_id']; ?>">
														<?= $value['country_name']; ?>
													</option>
												<?php }
												?>
											</select>
										</div>
										<div class="col-md-6">
											<label for="inputEmail4">Discharge Country(s)</label>

											<select name="d_country[]" class="js-example-basic-multiple" multiple="multiple" required id="d_country">
												<?php foreach ($country as $key => $value) { ?>
													<option groupid="<?= $value['country_name']; ?>" value="<?= $value['country_id']; ?>">
														<?= $value['country_name']; ?>
													</option>
												<?php }
												?>


											</select>
										</div>
										<div class="col-md-6">
											<label for="inputEmail4">Loading Port(s) <span style="color: transparent;">...</span></label>

											<select class="js-example-basic-multiple" multiple="multiple" name="v_ports[]" required id="v_ports">
												<?php foreach ($port as $key => $value) { ?>
													<option groupid="<?= $value['port_name']; ?>" value="<?= $value['port_id']; ?>">
														<?= $value['port_name']; ?>
													</option>
												<?php } ?>
											</select>
										</div>
										<div class="col-md-6">
											<label for="inputEmail4">Discharge Port(s) <span style="color: transparent;">...</span></label>

											<select class="js-example-basic-multiple" multiple="multiple" name="d_ports[]" required id="d_ports">
												<?php foreach ($port as $key => $value) { ?>
													<option groupid="<?= $value['port_name']; ?>" value="<?= $value['port_id']; ?>">
														<?= $value['port_name']; ?>
													</option>
												<?php } ?>
											</select>
										</div>
										<div class="col-sm-6">
											<label for="inputEmail4">Laycan Date From</label>

											<input class="form__field" type="date" name="laycan_from" id='laycan_from' placeholder="Enter Laycan Date From" />

										</div>
										<div class="col-sm-6">
											<label for="inputEmail4">Laycan Date To</label>

											<input class="form__field" type="date" name="laycan_to" id='laycan_to' placeholder="Enter Laycan Date To" />

										</div>
										<div class="col-sm-6 col-md-3">
											<button class="button button--green" type="submit"><span>Search</span>
												<svg class="icon">
													<use xlink:href="#arrow"></use>
												</svg>
											</button>

										</div>
										<div class="col-sm-6 col-md-3">
											<button class="button button--green" id="set-null"><span>Reset</span>
												<svg class="icon">
													<use xlink:href="#arrow"></use>
												</svg>
											</button>

										</div>
									</div>
								</form>
							</div>
							<div class="horizontal-tabs__item" id="horizontal-tabs__item-2">
								<form class="form promo-form promo-form--f5" action="manage_vessel.php" method="POST">
									<div class="row offset-20">
										<div class="col-md-6">
											<label for="inputEmail4">Vessel Type(s)</label>
											<select name="v_vessel_type[]" class="js-example-basic-multiple" multiple="multiple" required id="v_vessel_type">
												<?php foreach ($ss_setup_vessel_type as $key => $value) { ?>
													<option groupid="<?= $value['vessel_type_name']; ?>" value="<?= $value['vessel_type_id']; ?>">
														<?= $value['vessel_type_name']; ?>
													</option>
												<?php } ?>
											</select>
										</div>
										<div class="col-md-6">
											<label for="inputEmail4">Charter Type(s)</label>

											<select name="v_charter_type[]" class="js-example-basic-multiple" multiple="multiple" required id="v_charter_types">
												<?php foreach ($ss_setup_charter_type as $key => $value) { ?>
													<option groupid="<?= $value['charter_type_name']; ?>" value="<?= $value['charter_type_id']; ?>">
														<?= $value['charter_type_name']; ?>
													</option>
												<?php } ?>
											</select>
										</div>
										<div class="col-md-6">
											<label for="inputEmail4">Region(s)</label>

											<select name="v_region[]" class="js-example-basic-multiple vregion" multiple="multiple" required id="v_region">
												<?php foreach ($region as $key => $value) { ?>
													<option groupid="<?= $value['region_name']; ?>" value="<?= $value['region_id']; ?>">
														<?= $value['region_name']; ?>
													</option>
												<?php } ?>
											</select>
										</div>

										<div class="col-md-6">
											<label for="inputEmail4">Country(s)</label>

											<select name="v_country[]" class="js-example-basic-multiple vcontry" multiple="multiple" required id="v_country">
												<?php foreach ($country as $key => $value) { ?>
													<option groupid="<?= $value['country_name']; ?>" value="<?= $value['country_id']; ?>">
														<?= $value['country_name']; ?>
													</option>
												<?php }
												?>
											</select>
										</div>

										<div class="col-md-12">
											<label for="inputEmail4">Port(s) <span style="color: transparent;">...</span></label>

											<select class="js-example-basic-multiple vport" multiple="multiple" name="v_ports[]" required id="v_ports">
												<?php foreach ($port as $key => $value) { ?>
													<option groupid="<?= $value['port_name']; ?>" value="<?= $value['port_id']; ?>">
														<?= $value['port_name']; ?>
													</option>
												<?php } ?>
											</select>
										</div>

										<div class="col-sm-6">
											<label for="inputEmail4">DWT From</label>

											<input class="form__field" type="number" name="dwt_from" id='dwt_from' step="5000" placeholder="Enter DWT From" />

										</div>
										<div class="col-sm-6">
											<label for="inputEmail4">DWT To</label>

											<input class="form__field" type="number" name="dwt_to" id='dwt_to' step="5000" placeholder="Enter DWT To" />

										</div>

										<div class="col-sm-6">
											<label for="inputEmail4">Laycan Date From</label>
											<input class="form__field l_datefrom" type="date" name="laycan_from" id='laycan_from' placeholder="Enter Laycan Date From" />

										</div>
										<div class="col-sm-6">

											<label for="inputEmail4">Laycan Date To</label>

											<input class="form__field l_datefromto" type="date" name="laycan_to" id='laycan_to' placeholder="Enter Laycan Date To" />
										</div>
										<div class="col-sm-6 col-md-3">
											<button class="button button--green" type="submit"><span>Search</span>
												<svg class="icon">
													<use xlink:href="#arrow"></use>
												</svg>
											</button>

										</div>
										<div class="col-sm-6 col-md-3">
											<button class="button button--green" id="set-null1"><span>Reset</span>
												<svg class="icon">
													<use xlink:href="#arrow"></use>
												</svg>
											</button>

										</div>
									</div>
								</form>
							</div>
							<div class="horizontal-tabs__item" id="horizontal-tabs__item-3">
								<form class="form promo-form promo-form--f5" action="sales_purchase.php" method="POST">
									<div class="row offset-20">
										<div class="col-md-12">
											<label for="inputEmail4">Vessel Type(s)</label>
											<select class="js-example-basic-multiple" multiple="multiple" name="vessel_id[]" id="vessel_id">
												<?php foreach ($ss_setup_vessel_type as $key => $value) { ?>
													<option groupid="<?= $value['vessel_type_name']; ?>" value="<?= $value['vessel_type_id']; ?>">
														<?= $value['vessel_type_name']; ?>
													</option>
												<?php } ?>
											</select>
										</div>
										<div class="col-md-6">
											<label for="inputEmail4">Region(s)</label>

											<select class="js-example-basic-multiple" multiple="multiple" name="region_id[]" id="region_id">
												<?php foreach ($region as $key => $value) { ?>
													<option groupid="<?= $value['region_name']; ?>" value="<?= $value['region_id']; ?>">
														<?= $value['region_name']; ?>
													</option>
												<?php } ?>
											</select>
										</div>

										<div class="col-md-6">
											<label for="inputEmail4">Country(s)</label>

											<select class="js-example-basic-multiple" multiple="multiple" name="country_id[]" id="country_id">
												<?php foreach ($country as $key => $value) { ?>
													<option groupid="<?= $value['country_name']; ?>" value="<?= $value['country_id']; ?>">
														<?= $value['country_name']; ?>
													</option>
												<?php }
												?>
											</select>
										</div>

										<div class="col-md-12">
											<label for="inputEmail4">Port(s) <span style="color: transparent;">...</span></label>

											<select class="js-example-basic-multiple" multiple="multiple" name="port_id[]" id="port_id">
												<?php foreach ($port as $key => $value) { ?>
													<option groupid="<?= $value['port_name']; ?>" value="<?= $value['port_id']; ?>">
														<?= $value['port_name']; ?>
													</option>
												<?php } ?>
											</select>
										</div>

										<div class="col-sm-6">
											<label for="inputEmail4">DWT From</label>

											<input class="form__field dwt_from" type="number" name="dwt_from" id="dwt_from" step="5000" placeholder="Enter DWT From" />

										</div>
										<div class="col-sm-6">
											<label for="inputEmail4">DWT To</label>

											<input class="form__field dwt_to" type="number" name="dwt_to" id="dwt_to" step="5000" placeholder="Enter DWT To" />

										</div>
										<div class="col-sm-6">
											<label for="inputEmail4">Date Available</label>

											<input class="form__field dateava" tdata-toggle="datepicker" type="date" name="date_available" id="date_available" placeholder="Enter Date Available" />

										</div>
										<div class="col-sm-6">
											<label for="inputEmail4">Last Operations Date</label>

											<input class="form__field datelast" data-toggle="datepicker" type="date" name="last_operation" id="last_operation" placeholder="Enter Last Operations Date" />

										</div>
										<div class="col-sm-6 col-md-3">
											<button class="button button--green" type="submit"><span>Search</span>
												<svg class="icon">
													<use xlink:href="#arrow"></use>
												</svg>
											</button>

										</div>
								</form>
								<div class="col-sm-6 col-md-3">

									<button type="button" class="button button--green" id="set-null2"><span>Reset</span>
										<svg class="icon">
											<use xlink:href="#arrow"></use>
										</svg></button>


								</div>
							</div>
						</div>

					</div>
				</div>
		</div>

		<div class="container">
			<div class="row text-center">
				<!-- Team item -->
				<div class="col-xl-4 col-sm-6 mb-5">
					<div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/icon3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">

						<h3>Latest Cargo</h3>
						<div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel1" data-interval="3500">
							<!-- <ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol> -->
							<div class="carousel-inner">

								<div class="carousel-item active">
									<p> <span class="expend_label">Cargo Name </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Cargo Type </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Origin </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination Port </span>: <span class="expend_text"> XYZ</span></p>
								</div>
								<div class="carousel-item">
									<p> <span class="expend_label">Cargo Name </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Cargo Type </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Origin </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination Port </span>: <span class="expend_text"> XYZ</span></p>
								</div>
								<div class="carousel-item">
									<p> <span class="expend_label">Cargo Name </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Cargo Type </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Origin </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination Port </span>: <span class="expend_text"> XYZ</span></p>
								</div>


							</div>

							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<i class="fa fa-angle-right" style="color: #00997d;font-size: 50px;"></i>

								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>


				</div>
				<!-- End -->
				<!-- Team item -->
				<div class="col-xl-4 col-sm-6 mb-5">
					<div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/icon2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">

						<h3>Latest Vessels for Charter</h3>
						<div id="carouselExampleControls1" class="carousel vert slide" data-ride="carousel" data-interval="3500">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<p> <span class="expend_label">Cargo Name </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Cargo Type </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Origin </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination Port </span>: <span class="expend_text"> XYZ</span></p>


								</div>
								<div class="carousel-item">
									<p> <span class="expend_label">Cargo Name </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Cargo Type </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Origin </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination Port </span>: <span class="expend_text"> XYZ</span></p>
								</div>
								<div class="carousel-item">
									<p> <span class="expend_label">Cargo Name </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Cargo Type </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Origin </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination Port </span>: <span class="expend_text"> XYZ</span></p>
								</div>
							</div>

							<a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
								<i class="fa fa-angle-right" style="color: #00997d;font-size: 50px;"></i>

								<span class="sr-only">Next</span>
							</a>
						</div>

					</div>
				</div>
				<!-- End -->
				<!-- Team item -->
				<div class="col-xl-4 col-sm-6 mb-5">
					<div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/icon1.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">

						<h3>Latest Vessels for Sale</h3>
						<div id="carouselExampleControls0" class="carousel vert slide" data-ride="carousel" data-interval="3500">

							<div class="carousel-inner">
								<div class="carousel-item active">
									<p> <span class="expend_label">Cargo Name </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Cargo Type </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Origin </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination Port </span>: <span class="expend_text"> XYZ</span></p>


								</div>
								<div class="carousel-item">
									<p> <span class="expend_label">Cargo Name </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Cargo Type </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Origin </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination Port </span>: <span class="expend_text"> XYZ</span></p>
								</div>
								<div class="carousel-item">
									<p> <span class="expend_label">Cargo Name </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Cargo Type </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Origin </span>: <span class="expend_text">
											XYZ</span></p>
									<p> <span class="expend_label"> Destination Port </span>: <span class="expend_text"> XYZ</span></p>
								</div>
							</div>
							<!-- <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a> -->
							<a class="carousel-control-next" href="#carouselExampleControls0" role="button" data-slide="next">
								<i class="fa fa-angle-right" style="color: #00997d;font-size: 50px;"></i>

								<span class="sr-only">Next</span>
							</a>
						</div>

					</div>
				</div>
				<!-- End -->

			</div>
		</div>
		<section>
			<!-- Section About -->
			<div class="d-flex flex-row bd-highlight mb-3">
				<div class="container-fluid">
					<div class="row">

						<div id="col6" style="padding: 0;" class="col-md-6">
							<div class="container-fluid " style="margin: 30px 37px;color: #fff">
								<div class="row">
									<div class="col-md-12">
										<h1>About Us</h1>
										<div class="col-md-12 mb-3" style="height: 8px;background-color: #fff;width: 10%;"></div>
									</div>
									<div class="col-md-12 ">
										<p class="text-justify" style=" color:white;width: 80%; ">

											It is a good platform to learn programming. It is an
											educational website. Prepare for the Recruitment drive
											your upcoming placement season efficient and successful.
											It is a good platform to learn programming. It is an
											educational website. Prepare for the Recruitment drive
											your upcoming placement season efficient and successful</p>
									</div>
									<div class="col-md-12">
										<p class="text-justify" style=" color:white;width: 80%; ">

											It is a good platform to learn programming. It is an
											educational website. Prepare for the Recruitment drive
											your upcoming placement season efficient and successful.
											It is a good platform to learn programming. It is an
											educational website. Prepare for the Recruitment drive
											your upcoming placement season efficient and successful</p>
									</div>
									<div class="col-md-12">
										<p class="text-justify" style=" color:white;width: 80%; ">

											It is a good platform to learn programming. It is an
											educational website. Prepare for the Recruitment drive
											your upcoming placement season efficient and successful.
											It is a good platform to learn programming. It is an
											educational website. Prepare for the Recruitment drive
											your upcoming placement season efficient and successful</p>
									</div>

								</div>

							</div>




						</div>
						<div class="col-md-6" style="padding: 0;">
							<img id="col6" src="images/about.jpeg" alt="">
						</div>
					</div>
				</div>



				<!-- </div> -->
			</div>
			<section>
				<div class="container">
					<div id="example-row" class="row">
						<!-- <a href="javascript:void(0)" class="btn btn-default btn-lg btn-block">Example</a> -->
						<div class="col-xs-12 col-md-4 full-card">
							<div class="flip-card active-card">
								<div class="card label-info">
									<img src="images/pic1.jpeg" alt="">
								</div>
								<div class="well">
									<h3 style="color: #569e78;"><b>Latest Classifieds</b></h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto,</p>
								</div>
							</div>

						</div>
						<div class="col-xs-12 col-md-4 full-card">
							<div class="flip-card active-card">
								<div class="card label-info">
									<img src="images/pic2.jpeg" alt="">
								</div>
								<div class="well">
									<h3 style="color: #569e78;"><b>Latest Job Posts</b></h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto,</p>
								</div>
							</div>

						</div>
						<div class="col-xs-12 col-md-4 full-card">
							<div class="flip-card active-card">
								<div class="card label-info">
									<img src="images/card3.jpeg" alt="">
								</div>
								<div class="well">
									<h3 style="color: #569e78;"><b>Events</b></h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto,</p>
								</div>
							</div>

						</div>
						<div class=" center-block">
							&nbsp;
							&nbsp;
							<a class="button button--green" href="#">ALL POSTS</a>
						</div>
						<br>
						<br>
					</div>

				</div>
			</section>
			<!--Cards Section End  -->
			<section class="section bg--lgray" style="    padding: 4px 0;">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- logos slider start-->
							<div class="logos-slider">
								<div class="logos-slider__item"><img src="img/logo_1.png" alt="logo" /></div>
								<div class="logos-slider__item"><img src="img/logo_2.png" alt="logo" /></div>
								<div class="logos-slider__item"><img src="img/logo_3.png" alt="logo" /></div>
								<div class="logos-slider__item"><img src="img/logo_4.png" alt="logo" /></div>
							</div>
							<div class="logos-slider__dots"></div>
							<!-- logos slider end-->
						</div>
					</div>
				</div>
			</section>

			<section class="section" style="padding: 2px 0;">
				<!-- <div class="contact-us layout-top-spacing" style="padding: 0px 0;" > -->
				<div class="cu-contact-section">
					<div>
						<img src="assets/img/pakistan.png" alt="">
					</div>
					<div class="contact-form">
						<form action="" method="post">
							<div class="cu-section-header">
								<h4>Contact Us</h4>
								<p>Submit your queries and we will get back <br /> to you as soon as
									possible.</p>
							</div>
							<h4>Send us a Request</h4>
							<div class="row mb-4">
								<div class="col-sm-12 col-12 input-fields mb-4 mb-sm-0">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
										<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
										<circle cx="12" cy="7" r="4"></circle>
									</svg>
									<input type="text" class="form__field" id="from" name="from" placeholder="From">
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-sm-12 col-12 input-fields">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
										<circle cx="12" cy="12" r="4"></circle>
										<path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
									</svg>
									<input type="text" class="form__field" id="to" name="to" placeholder="To">
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-sm-12 col-12 input-fields">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
										<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
										</path>
									</svg>
									<input type="number" class="form__field" id="phone" name="phone" placeholder="Phone number">
								</div>
							</div>
							<div class="row">
								<div class="col text-sm-left text-center">
									<button class="btn mt-4" name="submit" type="submit" style="background-color: #00997d !important;color: #fff !important;">REQUEST</button>
								</div>
							</div>
						</form>

					</div>


					<!-- </div> -->
				</div>





			</section>

			</main>

			<?php include('footer.php') ?>


			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>

			<script src="js/libs.min.js"></script>
			<script src="js/common.min.js"></script>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
			</script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
			</script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
			</script>
			<!-- scripts-->
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
			</script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
			</script>

			<script src="assets/js/custom.js"></script>
			<script src="plugins/highlight/highlight.pack.js"></script>
			<script src="assets/js/scrollspyNav.js"></script>
			<script src="plugins/highlight/highlight.pack.js"></script>

			<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

			<script>
				$(document).ready(function() {

					// For testing...

					$('#set-null').click(function() {
						$("#v_cargo_type").val(null).trigger("change");
						$("#v_region").val(null).trigger("change");
						$("#d_region").val(null).trigger("change");
						$("#v_country").val(null).trigger("change");
						$("#d_country").val(null).trigger("change");
						$("#v_ports").val(null).trigger("change");
						$("#d_ports").val(null).trigger("change");
						$("#laycan_from").val(null).trigger("change");
						$("#laycan_to").val(null).trigger("change");
					});

					$('#set-null1').click(function() {
						$("#v_vessel_type").val(null).trigger("change");
						$("#v_charter_types").val(null).trigger("change");
						$(".vregion").val(null).trigger("change");
						$(".vcontry").val(null).trigger("change");
						$(".vport").val(null).trigger("change");
						$("#dwt_from").val(null).trigger("change");
						$("#dwt_to").val(null).trigger("change");
						$(".l_datefrom").val(null).trigger("change");
						$(".l_datefromto").val(null).trigger("change");
					});
					$('#set-null2').click(function() {
						$("#vessel_id").val(null).trigger("change");
						$("#region_id").val(null).trigger("change");
						$("#country_id").val(null).trigger("change");
						$("#port_id").val(null).trigger("change");
						$(".vport").val(null).trigger("change");
						$(".dwt_from").val(null).trigger("change");
						$(".dwt_to").val(null).trigger("change");
						$(".dateava").val(null).trigger("change");
						$(".datelast").val(null).trigger("change");
					});
				});
				$(function() {

					$('.js-example-basic-multiple').select2();

					//Select2 Event handler for selecting an item
					$('.js-example-basic-multiple').on("select2:selecting", function(evt, f, g) {
						/* alert(evt.value) */
						disableSel2Group(evt, this, true);
					});

					// Select2 Event handler for unselecting an item
					$('.js-example-basic-multiple').on("select2:unselecting", function(evt) {
						disableSel2Group(evt, this, false);
					});
				});




				// At some point during the select2 instantation it created the
				// data object it needs with the source select option.
				// This function, called by the events above to set the current status for the
				// group for which the selected option belongs.
				function disableSel2Group(evt, target, disabled) {
					// Found a note in the Select2 formums on how to get the item to be selected

					var selId = evt.params.args.data.id;
					var group = $("option[value='" + selId + "']").attr("groupid");
					// alert(group)
					if (group === 'Any') {
						var aaList = $("option", target);
						$.each(aaList, function(idx, item) {
							var data = $(item).data("data");



							var itemGroupId = $("option[value='" + data.id + "']").attr("groupid");
							// alert(itemGroupId)
							if (itemGroupId != group) {
								data.disabled = disabled;
							}
						})
					} else {
						var aaList = $("option", target);
						$.each(aaList, function(idx, item) {
							var data = $(item).data("data");

							var itemGroupId = $("option[value='" + data.id + "']").attr("groupid");
							if (itemGroupId === 'Any') {
								data.disabled = disabled;
							}
						})
					}


				}
			</script>

			<!-- END GLOBAL MANDATORY STYLES -->

			<!-- BEGIN PAGE LEVEL SCRIPTS -->

	
		</body>

	<?php include('svg.php') ?>
	<!-- Mirrored from demo.artureanec.com/html/ P2P TRACK/front_5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Mar 2022 13:08:41 GMT -->

	</html>