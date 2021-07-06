<?php
	require("includes/connection.php");	
?>
<?php 
try{
  if(isset($_POST['submitEmail']))
		{
			$email = $_POST['emailad'];					
		    mysqli_query($con,"INSERT INTO `newsletter` (`emailad`) VALUES ('$email')");
		    echo '<script>alert("Thank you! Expect an email from us!")</script>';
		}
}
catch(Exception $e) {
  error_log($e->getMessage());
  exit('Error connecting to database');
	
}
?>

<footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.php"> <img src="img/Horizontal Recolored.png" alt=""> </a>
                        <p>Let's meet each other through our shortcuts!</p>                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest promos and packages!</p>
                        <form method="post">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input name="emailad" type="email" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'" required>
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="submit" name="submitEmail"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> World Plaza, 30th St. Taguig, Kalakhang Maynila </p>
                            <p><span> Phone :</span> (+639)9338112038</p>
                            <p><span> Email : </span>info@shortcut.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>