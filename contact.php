<?php
if(isset($_POST['submit']))
{

$message=
'Full Name:	'.$_POST['fullname'].'<br />
Subject:	'.$_POST['subject'].'<br />
Phone:	'.$_POST['phone'].'<br />
Email:	'.$_POST['emailid'].'<br />
Comments:	'.$_POST['comments'].'
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class

    // Instantiate Class
    $mail = new PHPMailer();

    // Set up SMTP
    $mail->IsSMTP();                // Sets up a SMTP connection
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';

    // Authentication
    $mail->Username   = "ghadasamiaabdelmoumen@gmail.com"; // Your full Gmail address
    $mail->Password   = "MARIEM@esprit"; // Your Gmail password

    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)
    $mail->MsgHTML($message);

    // Send To
    $mail->AddAddress("ghadasamiaabdelmoumen@gmail.com", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';
	unset($mail);

}
?>
<html>
<head>
  <meta charset="utf-8" />
   <title>Contact | Web Developer | Graphic Designer | Ghada Samia Abdelmoumen</title>
   <meta name="author" content="Ghada Samia Abdelmoumen Tunisia" />
   <meta name="keywords" content="designer and web developer; graphic designer tunisia; cv web developer tunisia; developer angularjs tunisia; developpeur nodejs tunisiea; developer web application; NodeJs; AngularJs; Java Entreprise Edition; Asp.net; Ionic; MongoDB; Symfony; templates; logos; teamwork; english; " />
   <meta name="description" content="CV Ghada Samia Abdelmoumen:Future Computer Engineer web developer and graphic designer tunisia, I am specialist in the creation of web sites using different languages like AngularJS NodeJS " />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
   <!-- Font Awesome -->
   <link type="text/css" media="all" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
   <!-- Libs CSS -->
   <link type="text/css" media="all" href="assets/boostrap-files/css/bootstrap.min.css" rel="stylesheet" />
   <!-- Animate CSS -->
   <link type="text/css" media="all" href="assets/css/animate.css" rel="stylesheet" />
   <!-- Template CSS -->
   <link type="text/css" media="all" href="assets/css/contact.form.css" rel="stylesheet" />
   <link type="text/css" media="all" href="assets/css/style.css" rel="stylesheet" />
   <!-- Switcher CSS -->
   <link href="assets/css/colour-scheme/color-blue.css" rel="stylesheet" type="text/css" data-color="color-blue" media="all" id="stylesheet-new">
   <!-- Responsive CSS -->
   <link type="text/css" media="all" href="assets/css/respons.css" rel="stylesheet" />
   <!-- Favicons -->
   <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
    <link rel="shortcut icon" href="assets/img/favicons/gs.png" />
   <!-- Google Fonts -->
   <link href='"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.6635525058937!2d10.187543314468208!3d36.89839626986726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb7454c6ed51%3A0x683b3ab5565cd357!2sEsprit+Pr%C3%A9pa!5e0!3m2!1sfr!2sfr!4v1487119328899' rel='stylesheet' type='text/css'>
</head>
<body>


  <!-- Load page -->
  <div class="animationload">
      <div class="loader"></div>
  </div>
  <!-- End load page -->

  <div id="wraper">

      <!-- Start Head section -->
      <header class="head">
          <!-- start container -->
          <div class="container">
              <!-- start row -->
              <div class="row">
                  <div class="col-xs-8 col-sm-11 col-lg-11">
                      <img class="logo-page" src="assets/img/contact_l.png" alt="Ukieweb">
                      <!-- Title Page -->
                      <h2 class="title">Contact</h2>
                      <!-- Description Page -->
                      <h4 class="sub-title">Get in touch with me</h4>
                  </div>
                  <div class="col-xs-4 col-sm-1 col-lg-1 text-right">
                      <a href="index.html" class="btn-close hover-animate"></a>
                  </div>
              </div>
              <!-- end row -->
          </div>
          <!-- end container -->
      </header>
      <!-- End Head section -->

      <!-- Start Content section -->
      <section class="content padding-block border-bottom">
          <!-- start container -->
          <div class="container">
              <!-- start row -->
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-lg-6 padding-bottom">
                      <h3 class="title title-contact">Contact info</h3>
                      <div class="block-grey">
                          <table>
                              <tr>
                                  <td class="font-weight-m width-td">Address</td>
                                  <td>Ariana Soghra , Tunisia</td>
                              </tr>
                              <tr>
                                  <td class="font-weight-m">Phone</td>
                                  <td><a class="hover-animate" style="color:gray;" href="tel:54461989">+216 54-461-989</a></td>
                              </tr>
                              <tr>
                                  <td class="font-weight-m">E-mail</td>
                                  <td><a  class="hover-animate" style="color:gray;"   href="mailto:info@yourdomain.com">ghadasamia.abdelmoumen@gmail.com</a></td>
                              </tr>
                              <tr>
                                  <td  class="font-weight-m">Skype</td>
                                  <td>ghada_abdelmoumen</td>
                              </tr>
                             
                          </table>
                          <!-- social icon -->
                          <div class="social">
                              <ul class="animated" data-animation="fadeIn" data-animation-delay="600">
                                  <!-- social icons -->
                                  <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-facebook"></i></a></li>
                                  <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-twitter"></i></a></li>
                                  <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-linkedin"></i></a></li>
                                  <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-google-plus"></i></a></li>
                                  <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-dribbble"></i></a></li>
                                  <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-youtube"></i></a></li>
                                  
                              </ul>
                          </div>
                          <!-- end social icon -->
                      </div>
                  </div>


                  <div class="col-xs-12 col-sm-12 col-lg-6">
                                <h3 class="title title-contact">Contact form</h3>
                                <h4 style="color:white;"><?php if(!empty($message)) echo $message; ?></h4>
                                <!-- Start Contact Form -->
                                <div class="contact-form">
			<form name="form1" id="form1" action="" method="post">
					<fieldset>
					  <input style="color:black ;" type="text" name="fullname" placeholder="Full Name" />
					  <br />
					  <input style="color:black ;" type="text" name="subject" placeholder="Subject" />
					  <br />
					  <input  style="color:black ;" type="text" name="phone" placeholder="Phone" />
					  <br />
					  <input style="color:black ;" type="text" name="emailid" placeholder="Email" />
					  <br />
					  <textarea style="color:black ;"  rows="4" cols="20" name="comments" placeholder="Comments"></textarea>
					  <br />
					  <input type="submit"  id="submit-btn" class="btn btn-color hover-animate"  name="submit" value="Send" />
					</fieldset>
			</form>

		</div>
  </div>
                 <!-- End Contact Form -->
             </div>
    <!-- Start Map section -->
       <div class="contact-map padding-block text-center">
           <!-- start container -->
           <div class="container">
               <!-- start row -->
               <div class="row">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.6637318638645!2d10.187543315292672!3d36.89839197992849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb7454c6ed51%3A0x683b3ab5565cd357!2sEsprit+Pr%C3%A9pa!5e0!3m2!1sfr!2sfr!4v1487119435981" width="1100" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
               <!-- end row -->
           </div>
           <!-- end container -->
       </div>
       <!-- End Map section -->

       <!-- Start Footer section -->
        <footer class="footer">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start phone number -->
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="#" class="hover-animate">
                        <span class="ukie-icons hover-animate"><i class="fa fa-phone"></i></span> +216 54-461-989
                    </a>
                </div>
                <!-- end phone number -->
                <!-- start email -->
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="#" class="hover-animate">
                        <span class="ukie-icons hover-animate"><i class="fa fa-paper-plane"></i></span> ghada_abdelmoumen
                    </a>
                </div>
                <!-- end email -->
                <!-- start address -->
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="#" class="hover-animate">
                        <span class="ukie-icons hover-animate"><i class="fa fa-map-marker"></i></span> ArianSoghra, Ariana
                    </a>
                </div>
                <!-- end address -->
                <!-- start Copyright -->
                <div class="col-xs-12 col-sm-6 col-lg-3 text-right">
                    <span class="copyright">Copyright © 2016 All right reserved</span>
                </div>
                <!-- end Copyright -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
       <!-- End Footer section -->

   </div>

   <!-- Scroll to Top -->
   <a href="#" class="btn hover-animate scrollToTop"><i class="fa fa-angle-up"></i></a>
   <!-- End Scroll to Top -->

   <!-- Scripts -->
   <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
   <script src="assets/boostrap-files/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/js/jquery.appear.js" type="text/javascript"></script>
   <script src="assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
   <script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
   <script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
   <script src="assets/js/jquery.inview.min.js" type="text/javascript"></script>
   <script src="assets/js/jquery.knob.min.js" type="text/javascript"></script>
   <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
   <script src="assets/js/jquery.ratyli.js" type="text/javascript"></script>
   <script src="assets/js/contact_scripts.js" type="text/javascript"></script>
   <script async defer
           src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXio82oqawfcoS3nQg8fuoIytuWi_qq1g&amp;callback=initMap">
   </script>
   <script src="assets/js/scripts.js" type="text/javascript"></script>
   <video loop="" muted="" autoplay="" id="bgvid">
             <source src="assets/videoplayback2.mp4" type="video/mp4">
           </video>
   </body>

   </html>
