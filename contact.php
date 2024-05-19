<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OWN </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/slicknav.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/own.css">
   <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <?php include "menu.php" ?>

    </header>

    <!-- Slider Area Start-->
		<div class=" haveAproject2 mb-5">
            <div class="container">

                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-tittle text-center">
							<h2>Contactate</h2>
						</div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Slider Area End-->

    <!-- ================ contact section start -->
    <section class="contact-section">
          <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Ponerse en contacto</h2>
                    </div>
                    <div class="col-lg-6">
					<div class="alert alert-<?php echo base64_decode($_GET['c']) ?> alert-dismissible fade show" role="alert">
					  <?php echo base64_decode($_GET['m']) ?>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<form class="form-contact contact_form"  action="contact_process.php" method="post">
						 <div class="row">
							 <div class="col-12">
										<div class="form-group">
											<textarea class="form-control w-100" 
											name="message" id="message" cols="30" rows="9" 
											onfocus="this.placeholder = ''" 
											onblur="this.placeholder = 'Escriba su mensaje'" 
											placeholder=" Escriba su mensaje"></textarea>
										</div>
							    <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su Nombre'" placeholder="Ingrese su Nombre">
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su Email'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresar Asunto'" placeholder="Ingresar Asunto">
                                    </div>
                                </div>
							  </div>
							  
						  </div>
						
						<input type="submit" class="button button-contactForm boxed-btn">
					</form>
                    
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Catamarca, Argentina.</h3>
                                <p>San Fernando del Valle de Catamarca, CP 4700</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-mobile"></i></span>
                            <div class="media-body">
                                <h3>+54 9 3834 543727</h3>
                                <!--<p>Lunes a Viernes 8am a 18pm</p>-->
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@openwork-nature.com</h3>
                                <p>¡Envíenos su consulta en cualquier momento!</p>
								
                            </div>
							
                        </div>
						
						 <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>Linkedin OWN</h3>
                                <p> <a class="text-primary" href="https://www.linkedin.com/company/open-work-nature/" target="blank">Seguinos</a></p>
                            </div>
                        </div>
                      					
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    

    <footer>

<?php include "footer.php"?>

    </footer>

    <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        <script>
$(document).ready(function(){
 
	$('.ir-arriba').click(function(){
		$('body, html').animate({
		
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});
 
});
</script>
    </body>
    
    </html>