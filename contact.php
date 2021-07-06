<?php
	require("includes/connection.php");
	session_start();
?>
<?php 
try{
  if(isset($_POST['submitQry']))
		{
			$name = $_POST['name'];			
			$emailad = $_POST['email'];
			$phonenum = $_POST['number'];
      $subject = $_POST['subject'];
			$message = $_POST['message'];
      $schoolname = $_POST['schoolname'];
		
		mysqli_query($con,"INSERT INTO `contact_query` (`qry_name`,`qry_email`,`qry_contactnum`, `qry_subject`,`message`, `qry_schoolname`) VALUES ('$name','$emailad','$phonenum','$subject','$message', '$schoolname')");
		echo '<script>alert("Your Contact Inquiry is Sent!")</script>';
		}
}
catch(Exception $e) {
  error_log($e->getMessage());
  exit('Error connecting to database');
	
}
  
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shortcut - Contact Us</title>
    <link rel="icon" href="img/favicon1.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
		#contact {text-decoration: underline;}
	    </style>
</head>

<body>
    
    <!-- Header part end-->
    <?php include_once('includes/header1.php'); ?>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Contact us</h2>
                            <p>Home<span>/</span>Contact Us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <!-- map -->
      <div class="iframe-container">             
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.803327688391!2d121.04564401483964!3d14.5532365898326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8f0e19fa1bb%3A0xc84215ff1f4d053e!2sWorld%20Plaza%2C%2030th%20St%2C%20Taguig%2C%20Kalakhang%20Maynila!5e0!3m2!1sen!2sph!4v1624885754823!5m2!1sen!2sph" 
        width="930" height="420" style="border:0; text-align: center;" allowfullscreen="false" loading="lazy"></iframe>
      </div>

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
          <h5>Please note that if you wish to book a demo, just click the book demo button. If you have general inquiries, please fill in the form. Thank you!</h5>
          <br>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="number" id="number" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Contact Number'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="schoolname" id="schoolname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'School Name'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject' required maxlength="150">
                </div>
              </div>                                                           
              <div class="col-12">
                <div class="form-group">                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'  required maxlength="350"></textarea>
                </div>
              </div>                                     
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="btn_2" name="submitQry">Send Message</button>              
            <!-- Calendly link widget begin -->              
                <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
                <button class="btn_1" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/info-shortcut/book-demo?primary_color=ffc857'});return false;">Book Demo</button>                
            <!-- Calendly link widget end -->
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Taguig, Kalakhang Maynila</h3>
              <p>World Plaza, 30th St.</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>(+639)9338112038</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>info@shortcut.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  <!-- ================ contact section end ================= -->
    <?php include_once('includes/footer.php'); ?>
<!-- jquery plugins here-->
<!-- jquery -->
<script src="js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="js/swiper.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<!-- swiper js -->
<script src="js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="js/owl.carousel.min.js"></script>
<!-- contact js -->
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>

<!-- slick js -->
<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
</body>

</html>