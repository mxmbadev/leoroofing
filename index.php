<!DOCTYPE>
<html>
	<head>
		<title>J.L. Construction | Specialized in Roofing</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="bower_components/foundation/css/foundation.css">
		<link rel="stylesheet" href="css/index.css">

	</head>
	<body>
  	<div class="fixed">
  		<nav class="top-bar navBar" data-topbar role="navigation">
  		  <ul class="title-area">
  		    <li class="name"><a href="#"><img class="logo" src="img/logo.png"></a></li>
  		     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
  		    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  		  </ul>

  		  <section class=" top-bar-section">
  		    <!-- Right Nav Section -->

  		    <ul class="right">
  		      <li class="backlinks"><a href="#">Home</a></li>
  		      <li class="backLinks"><a href="#About">About</a></li>
  		      <li class="backLinks"><a href="#Services">Services</a></li>
  		      <li class="backLinks"><a href="#contact">Contact</a></li>
  		    </ul>
  		  </section>
  		</nav>
  	</div>
<!-- 		SlideShow -->

  	<div id="Home">
  		<ul class="example-orbit" data-orbit>
  		  <li>
  		    <img src="img/slide2Roofing.png" alt="slide 1" />
  		  </li>
  		  <li class="active">
  		    <img src="img/slide3Roofing.png" alt="slide 2" />
  		  </li>
  		  <li class="active">
  		    <img src="img/slide1Roofing.png" alt="slide 3" />
  		  </li>
  		</ul>
  	</div>
<!-- 	About Section -->
    <div id="About">
  		<div class="large-12 columns aboutSection" >
  			<div class="large-5 medium-6 large-offset-1 columns">
  				<h1>About J.L Construction</h1>

  				<p>J.L Construction has been working at their best in Middle Tennessee since 2010. We work all around Middle Tennessee making our clients satisfied with our services.</p>

  			</div>
  			<div class="large-5 medium-6 large-offset-1 columns">
  				<img class="aboutimg" src="img/logo.png">
  			</div>
		  </div>
    </div>

<!-- 	Services Section -->


		<div id="Services" class="large-12 columns pic servicesSection">
  		<div class="large-3 large-centered columns titulo">
  			<h1 class="srvcT">Services</h1>
  		</div>

			<div class="row">
  			<div class="large-12 columns">
  				<div class="large-5 medium-4 small-6 columns srvcSquare ">
  					<a data-reveal-id="roofing"><img src="img/roofingSQR.png"  /></a>
  				</div>
  				<div class="large-5 medium-4  small-6 columns srvcSquare ">
  					<a data-reveal-id="house-repairs"><img src="img/house-repairs.png"  /></a>
  				</div>
  			</div>
			</div>
		</div>

<!---------------   SERVICES SECTION 2: MODAL ------------------->



  <div id="roofing" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <h1 id="modalTitle">Services</h1>
    <div class="large-4 medium-4 columns">
      <img src="img/roofingSQR.png">
    </div>
    <h3 class="lead">Roofing Services</h3>
    <p>We offer several Roofing Services: </p>
    <div class="row">
      <div class="large-8 medium-8 columns">
        <ul>
          <li>Shingles</li>
          <li>TPO Roofing</li>
            <ul>
              <li>Thermoplastic Polyolefin</li>
            </ul>
          <li>EPDM Roofing</li>
            <ul>
              <li>Ethylene Propylene Diene Monomer </li>
            </ul>
          <li>Metal Roofing</li>
        </ul>
      </div>
    </div>
    <!--     button to the other modals -->
    <div class="large-12 columns">

      <div class="large-12 columns">
        <h4 class="other">Check Out Our Other Services!</h4>
        <div class="large-8 columns">
          <a data-reveal-id="house-repairs"><img class="modalSquares" src="img/house-repairs.png"></a>
        </div>
      </div>
    </div>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
  </div>
<!--                 * House Repairs Modal -->
  <div id="house-repairs" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <h1 id="modalTitle">Services</h1>
    <div class="large-4 medium-4 columns">
      <img src="img/house-repairs.png">
    </div>
    <h2 class="lead">Small House Repairs</h2>
    <div class="row">
      <div class="large-8 medium-8 columns">
        <ul>
          <li>Painting</li>
          <li>Flooring</li>
          <li>Carpentry</li>
          <li>Gutters</li>
        </ul>
      </div>
    </div>

    <div class="large-12 columns">

      <div class="large-12 columns">
        <h4 class="other">Check Out Our Other Services!</h4>
        <div class="large-8 columns">
          <a data-reveal-id="roofing"><img class="modalSquares" src="img/roofingSQR.png"></a>
        </div>
      </div>
    </div>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
  </div>


<!-- 		CONTACT US -->


	 	 		<?php

				 include('includes/mail_script.php');

				 ?>

    <div id="contact" class="large-12 columns conTact">
    	<div class="large-10 large-centered columns">

    		<h3> Get in Touch with J.L Construction!</h3>
        <p>We'd love to hear from you.</p>


    		<?php
             echo"<h6 style='color:red;'>".$ERmsg."</h6>";
            ?>


        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a class="contactTitle" href="#panel1">Contact Our Company</a></h5>
            <div class="content" data-slug="panel1">




              <form action="" method="post">
                <div class="row collapse">

                  <div class="large-2 columns">
                    <label class="inline">Your Name</label>
                  </div>

                  <div class="large-10 columns">
                    <input class="yourName inputsM" type="text" id="yourName" name="Name" placeholder="Jane Smith" value="<?php get_data("Name"); ?>" style="background: none;" >


                  </div>

                </div>
                <!-- START : EMAIL SECTION -->
                <div class="row collapse">

                  <div class="large-2 columns">
                    <label class="inline"> Your Email</label>
                  </div>

                  <div class="large-10 columns">
                    <input class="inputsM" type="text" id="yourEmail" name="Email" placeholder="jane@smithco.com" value="<?php get_data("Email"); ?>" style="background: none;">
                  </div>

                </div>


                <!-- START : PHONE SECTION -->
                <div class="row collapse">

                  <div class="large-2 columns">
                    <label class="inline"> Your Phone</label>
                  </div>

                  <div class="large-10 columns">
                    <input class="inputsM" type="text" id="yourPhone" name="Phone" placeholder="555-555-5555" value="<?php get_data("Phone"); ?>" style="background: none;">
                  </div>
                </div>

                <!-- START : COMMENTS SECTION -->
                <label>Your Mesaage</label>
                <textarea class="inputsM" rows="4" name="Comments" style="background: none;"><?php get_data("Comments"); ?></textarea>
                <button class="contactButton" type="submit" class="radius button">Submit</button>

              </form>
            </div>
          </section>
        </div>
      </div>


	</body>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/foundation/js/foundation.min.js"></script>
	<script src="bower_components/angular/angular.min.js"></script>
	<script src="bower_components/angular-route/angular-route.min.js"></script>
	<script>
  $(document).foundation();
	</script>
</html>