<?php
	// Edit these lines
	$your_name = "Your Name";
	$your_email = "mail@domain.com";
	//Subject Field
	$mail_subject = "You have a message sent from your site";
?>

<?php
//If the form is submitted
if(isset($_POST['name'])) {

		//Check to make sure that the name field is not empty
		if(trim($_POST['name']) === '') {
			$hasError = true;
			$errorMessage = "You have forgot to type your name!";
		} else {
			$name = trim($_POST['name']);
		}

		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$hasError = true;
			$errorMessage = "You have forgot to type an email!";
		} else if (!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,5})$/i", trim($_POST['email']))) {
			$hasError = true;
			$errorMessage = "Please enter a valid email address!";
		} else {
			$email = trim($_POST['email']);
		}

		// Company Name
		$companyname = trim($_POST['companyname']);

		// Phone Number
		$phone = trim($_POST['phone']);

		//Check to make sure messages were entered
		if(trim($_POST['message']) === '') {
			$hasError = true;
			$errorMessage = "You have forgot to type a message!";
		} else {
			if(function_exists('stripslashes')) {
				$message = stripslashes(trim($_POST['message']));
			} else {
				$message = trim($_POST['message']);
			}
		}

		//If there is no error, send the email
		if(!isset($hasError)) {

			$emailTo = $your_email;
			$subject = $mail_subject.' from '.$name;

			//message body
			$body  = "Here is what was sent:\n\n";
			$body .="Name: $name \n\n";
			$body .="Company Name: $companyname \n\n";
			$body .="Email: $email \n\n";
			$body .="Phone Number: $phone \n\n";
			$body .="Message: $message";


			$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;

			mail($emailTo, $subject, $body, $headers);

			$emailSent = true;
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Alena - Free Photography Portfolio HTML Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="author">
	<meta name="keywords" content="keywords">
	<meta name="description" content="description">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/vendor.css">
	<link rel="stylesheet" type="text/css" href="fonts/icomoon.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

</head>

<body>

	<div class="nav nav-overlay">
		<div id="menu-btn-close" class="menu-btn menu-btn-close"><span></span></div>
		<div class="nav__content">
			<ul class="nav__list">
				<li class="nav__list-item active-nav"><a href="index.html" class="hover-target">Home</a></li>
				<li class="nav__list-item"><a href="about.html" class="hover-target">About <span class="badge bg-primary text-white fs-6">PRO</span></a></li>
				<li class="nav__list-item"><a href="contact.html" class="hover-target">Contact <span class="badge bg-primary text-white fs-6">PRO</span></a></li>
				<li class="nav__list-item"><a href="portfolio.html" class="hover-target">Portfolio <span class="badge bg-primary text-white fs-6">PRO</span></a></li>
				<li class="nav__list-item"><a href="blog.html" class="hover-target">Blog <span class="badge bg-primary text-white fs-6">PRO</span></a></li>
				<li class="nav__list-item"><a href="single.html" class="hover-target">Single <span class="badge bg-primary text-white fs-6">PRO</span></a></li>
				<li class="nav__list-item"><a href="styles.html" class="hover-target">Styles <span class="badge bg-primary text-white fs-6">PRO</span></a></li>
			</ul>
		</div>
	</div>

	<header id="header" class="fixed-top">
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg py-4">
					<div class="navbar-brand">
						<a href="index.html">
							<img src="images/logo.svg" alt="logo">
						</a>
					</div>

					<div class="navbar-collapse collapse justify-content-end me-5" id="slide-navbar-collapse">
						<ul id="slide-down" class="navbar-nav gap-4">
							<li><a href="#billboard" class="nav-link active">Home</a></li>
							<li><a href="about.html" class="nav-link">About me</a></li>
							<li><a href="#portfolio" class="nav-link">Portfolio</a></li>
							<li><a href="#blog" class="nav-link">Blog</a></li>
							<li><a href="#contact" class="nav-link">Contact</a></li>
						</ul>
					</div>

					<div class="social-links">
						<ul class="list-unstyled d-flex m-0 gap-2">
							<li>
								<a href="#"><i class="icon icon-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon icon-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon icon-youtube"></i></a>
							</li>
						</ul>
					</div><!--social-links-->

					<div id="menu-btn" class="menu-btn"><span></span></div>

				</nav>
			</div>
		</div>
	</header>

  <section class="hero-section bg-light py-4">
    <div class="hero-content">
      <div class="container">
        <div class="row">
          <div class="text-center">
            <div class="breadcrumbs">
              <span class="item"><a href="index.html">Home /</a></span>
              <span class="item">My Account</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-4">
			<?php if(isset($emailSent) == true) { ?>
				<div class="message-box success-box">
					<div class="message-box-content">
						<p>
							<strong>Thanks, <?php echo $name;?></strong><br>
							We've received your email. We'll be in touch as soon as we possibly can!
						</p>
						<span class="close"></span>
					</div>
				</div>
			<?php } ?>

			<?php if(isset($hasError) ) { ?>
				<div class="message-box error-box">
					<div class="message-box-content">
						<p>There was an error submitting the form.</p>
						<?php echo $errorMessage;?>
					</div>
				</div>
			<?php } ?>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact-detail my-5 bg-secondary">
		<div class="container">
			<div class="row">
				<div class="col-md-6 detail-content">
					<div class="text-content mt-5 pt-5">

						<div class="section-header">
							<h2 class="section-title">Contact Me</h2>
						</div><!--section-header-->

						<p>I would love to get suggestions from you.</p>

						<form id="form" class="form-group" action="contact_form.php">
							<div class="text-input row">
								<div class="col-md-6 mb-3">
									<input type="text" name="name" class="form-control bg-transparent border-0 border-bottom" placeholder="Your name">
								</div>
								<div class="col-md-6 mb-3">
									<input type="text" name="E-mail" class="form-control bg-transparent border-0 border-bottom" placeholder="Your E-mail Address">
								</div>
								<div class="col-md-12 mb-3">
									<textarea placeholder="Your Message" class="form-control bg-transparent border-0 border-bottom" placeholder="Message" rows="6"></textarea>
								</div>
							</div><!--text-input-->
						</form>

						<div class="btn-left">
							<a href="#" class="btn btn-dark px-5 py-3">Send It</a>
						</div>

					</div><!--text-content-->
				</div>
				<div class="col-md-6">
					<figure class="contact-image">
						<img src="images/contactimg.png" alt="contact">
					</figure>
				</div>

			</div>
		</div>
	</section>

	<footer id="footer" class="mt-5 pt-5">
		<div class="container">

			<div class="row">

				<div class="footer-menu col-md-4">
					<h3 class="widget-title">Get In Touch</h3>
					<ul class="list-unstyled">
						<li><a href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a></li>
						<li>(355)-202-234-0457</li>
					</ul>
				</div>

				<div class="footer-menu col-md-4">
					<h3 class="widget-title">where’s my office?</h3>
					<ul class="list-unstyled" id="footer-menu">
						<li>2489 Locust Court, Los Angeles</li>
						<li>3927 Red Maple Drive, Los Angeles</li>
					</ul>
				</div>

				<div class="footer-menu social-links col-md-4">
					<h3 class="widget-title">My social links</h3>
					<ul class="list-unstyled d-flex gap-3">
						<li><a href="#"><i class="icon icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon icon-instagram"></i></a></li>
					</ul>
				</div>

			</div><!--footer-content-->
		</div>
	</footer>

	<div class="footer-bottom py-5 mt-5 border-top">
		<div class="container">
			<div class="copyright">
				<p>© 2023 Alena Miller. HTML Template by <a href="http://www.templatesjungle.com/">TemplatesJungle</a></p>
			</div>
		</div>
	</div>

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>

</html>