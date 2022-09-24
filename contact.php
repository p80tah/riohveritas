

<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

	<?php
	include("include/header.php");
	?>
	<!-- Document Title
	============================================= -->
	<title>Contact Us|VENTURA ASSOCIATES</title>

</head>

<body class="stretched overlay-menu">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
        <?php include("include/nav2.php"); ?>

		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title" >

			<div class="container clearfix">
				<h1>Contact Us</h1>
				<span>Get in touch with us</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					
					<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
				</ol>
			</div>

		</section>
		<!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
                    <div class="row gutter-40 col-mb-80">
						<!-- Postcontent
						============================================= -->
						<div class="postcontent col-lg-9">
                            

							<h3>Send us an Email</h3>
                                <span>(Please fill in all fields)</span>
							<div class="form-widget">

								<div class="form-result"></div>

								<form class="mb-0" id="template-contactform" name="template-contactform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6 form-group">
											<label for="template-contactform-name">Name <small>*</small></label>
											<input type="text" id="template-contactform-name" name="name" value="<?php echo isset($_POST ['name']) ? $name : ''; ?>" class="sm-form-control required" />
										</div>

										<div class="col-md-6 form-group">
											<label for="template-contactform-email">Email <small>*</small></label>
											<input type="email" id="template-contactform-email" name="email" value="<?php echo isset($_POST ['email']) ? $email : ''; ?>" class="required email sm-form-control" />
										</div>

										

										<div class="w-100"></div>

										<div class="col-md-12 form-group">
											<label for="template-contactform-subject">Subject <small>*</small></label>
											<input type="text" id="template-contactform-subject" name="subject" value="<?php echo isset($_POST ['subject']) ? $subject : ''; ?>" class="required sm-form-control" />
										</div>

										

										<div class="w-100"></div>

										<div class="col-12 form-group">
											<label for="template-contactform-message">Message <small>*</small></label>
											<textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="10" cols="30"> <?php echo isset($_POST ['message']) ? $message : ''; ?></textarea>
										</div>

										<div class="col-12 form-group d-none">
											<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
										</div>

										<div class="col-12 form-group">
											<button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="submit" value="submit">Send Message</button>
										</div>
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">

								</form>
							</div>

						</div><!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						<div class="sidebar col-lg-3">

							<address>
								<strong>Office Address:</strong><br>
								3F6, Treshold Business Suites,<br>
								976, Olusegun Obasanjo Way,<br>
                                Wuye District, Abuja, FCT.
							</address>
							<abbr title="Phone Number"><i class="icon-phone"></i></abbr> +234(0)70 1870 5035<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +234(0)80 3255 5881<br>
											<abbr title="Email Address"><i class="icon-envelope"></i></abbr> info@ventura.ng

							

							<div class="widget border-0 pt-0">

								<a href="#" class="social-icon si-small si-dark si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								

							</div>

						</div><!-- .sidebar end -->
					</div>

				</div>
			</div>
		</section><!-- #content end -->
					

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php
	include("include/footer.php");
	?>

</body>


</html>