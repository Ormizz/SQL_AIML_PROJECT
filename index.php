<?php
include 'conn.php';

// Prepare the SQL query
$sql = "SELECT recipe_name, recipe_description FROM Recipe";
$result = $conn->prepare($sql);
// Execute the prepared statement
$result->execute();

$sqlBreakfast = "SELECT recipe_id, recipe_name, recipe_description, prep_time FROM Recipe WHERE course = 'Breakfast'";
$resultBreakfast = $conn->prepare($sqlBreakfast);

$resultBreakfast->execute();

$sqlLunch = "SELECT recipe_id, recipe_name, recipe_description, prep_time FROM Recipe WHERE course = 'Lunch'";
$resultLunch = $conn->prepare($sqlLunch);

$resultLunch->execute();

$sqlDinner = "SELECT recipe_id, recipe_name, recipe_description, prep_time FROM Recipe WHERE course = 'Dinner'";
$resultDinner = $conn->prepare($sqlDinner);

$resultDinner->execute();

$sqlDessert = "SELECT recipe_id, recipe_name, recipe_description, prep_time FROM Recipe WHERE course = 'Dessert'";
$resultDessert = $conn->prepare($sqlDessert);

$resultDessert->execute();

$sqlDrinks = "SELECT recipe_id,recipe_name, recipe_description, prep_time FROM Recipe WHERE course = 'Drinks'";
$resultDrinks = $conn->prepare($sqlDrinks);

$resultDrinks->execute();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Your Kitchen - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="indexphp">Your Kitchen</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="contact.php" class="nav-link">Add receipt</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider js-fullheight owl-carousel bg-white">
	<?php
        // Query to select all recipes
        
            // Loop through each recipe
            while ($row = $result->fetch()) {
                ?>
      <div class="slider-item js-fullheight">
      	<div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_3.jpg); height:900px">
          		<div class="overlay"></div>
          	</div>
	          	<div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '20%' }">
					<div class="text mt-md-5" style="height:900px">
						<h1 class="mb-4"><?php echo $row['recipe_name']; ?></h1>
						<p><?php echo $row['recipe_description']; ?></p>
					</div>
				</div>
        	</div>
        </div>
      </div>
	  <?php
            }
        ?>
    </section>
	
	

	<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-5 img img-2 d-flex align-items-center justify-content-center justify-content-md-end" style="background-image: url(images/about.jpg); position: relative">
					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
					<span class="ion-ios-play"></span>
				</a>
				</div>
				<div class="col-sm-7 wrap-about py-5 ftco-animate">
			<div class="heading-section mt-5 mb-4">
			<div class="pl-lg-5 ml-md-5">
				<span class="subheading">About</span>
				<h2 class="mb-4">Welcome to Your Kitchen</h2>
			</div>
			</div>
			<div class="pl-lg-5 ml-md-5">
						<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<h3 class="mt-5">Special Recipe</h3>
						<div class="thumb my-4 d-flex">
				<a href="#" class="thumb-menu pr-md-4 text-center">
					<div class="img" style="background-image: url(images/lunch-4.jpg);"></div>
					<h4>Australian Organic Beef</h4>
				</a>
				<a href="#" class="thumb-menu pr-md-4 text-center">
					<div class="img" style="background-image: url(images/lunch-7.jpg);"></div>
					<h4>Australian Organic Beef</h4>
				</a>
				<a href="#" class="thumb-menu pr-md-4 text-center">
					<div class="img" style="background-image: url(images/lunch-6.jpg);"></div>
					<h4>Australian Organic Beef</h4>
				</a>
			</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>

	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row d-md-flex align-items-center justify-content-center">
			<div class="col-lg-10">
				<div class="row d-md-flex align-items-center">
				<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18">
					<div class="text">
					<strong style="font-size: 60px; color: #fff;">Let's see our menu</strong>
					<span style="font-size: 30px;">ENJOY</span>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</section>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Menu</h2>
          </div>
        </div>
        <div class="row">
		<div class="col-md-6 col-lg-4 menu-wrap">
			<div class="heading-menu text-center ftco-animate">
				<h3>Breakfast</h3>
			</div>
			<?php
			while ($row = $resultBreakfast->fetch()) {
				
			?>
			<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3><?=$row['recipe_name'] ?></h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price"><?=$row['prep_time'] ?> min</span>
	                </div>
	              </div>
	              <p><?= $row['recipe_description'] ?></p>
				  <br>
	              <p><a href="about.php?recipe_id=<?=$row['recipe_id'] ?>" class="btn btn-primary">See the recipe <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
			<?php
			}?>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Lunch</h3>
        		</div>
				<?php
				while ($row = $resultLunch->fetch()) {
					
				?>
				<div class="menus d-flex ftco-animate">
				<div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
				<div class="text">
					<div class="d-flex">
						<div class="one-half">
						<h3><?=$row['recipe_name'] ?></h3>
						</div>
						<div class="one-forth">
						<span class="price"><?=$row['prep_time'] ?> min</span>
						</div>
					</div>
					<p><?= $row['recipe_description'] ?></p>
					<br>
	              <p><a href="about.php?recipe_id=<?=$row['recipe_id'] ?>" class="btn btn-primary">See the recipe <i class="ion-ios-arrow-forward"></i></a></p>
				</div>
				</div>
				<?php
				}?>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Dinner</h3>
        		</div>
        		<?php
				while ($row = $resultDinner->fetch()) {
					
				?>
				<div class="menus d-flex ftco-animate">
				<div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
				<div class="text">
					<div class="d-flex">
						<div class="one-half">
						<h3><?=$row['recipe_name'] ?></h3>
						</div>
						<div class="one-forth">
						<span class="price"><?=$row['prep_time'] ?> min</span>
						</div>
					</div>
					<p><?= $row['recipe_description'] ?></p>
					<br>
	              <p><a href="about.php?recipe_id=<?=$row['recipe_id'] ?>" class="btn btn-primary">See the recipe <i class="ion-ios-arrow-forward"></i></a></p>
				</div>
				</div>
				<?php
				}?>
            
        	</div>

        	<!--  -->
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Desserts</h3>
        		</div>
        		<?php
				while ($row = $resultDessert->fetch()) {
					
				?>
				<div class="menus d-flex ftco-animate">
				<div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
				<div class="text">
					<div class="d-flex">
						<div class="one-half">
						<h3><?=$row['recipe_name'] ?></h3>
						</div>
						<div class="one-forth">
						<span class="price"><?=$row['prep_time'] ?> min</span>
						</div>
					</div>
					<p><?= $row['recipe_description'] ?></p>
					<br>
	              <p><a href="about.php?recipe_id=<?=$row['recipe_id'] ?>" class="btn btn-primary">See the recipe <i class="ion-ios-arrow-forward"></i></a></p>
				</div>
				</div>
				<?php
				}?>
            
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Drinks</h3>
        		</div>
        		<?php
				while ($row = $resultDrinks->fetch()) {
					
				?>
				<div class="menus d-flex ftco-animate">
				<div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
				<div class="text">
					<div class="d-flex">
						<div class="one-half">
						<h3><?=$row['recipe_name'] ?></h3>
						</div>
						<div class="one-forth">
						<span class="price"><?=$row['prep_time'] ?> min</span>
						</div>
					</div>
					<p><?= $row['recipe_description'] ?></p>
					<br>
	              <p><a href="about.php?recipe_id=<?=$row['recipe_id'] ?>" class="btn btn-primary">See the recipe <i class="ion-ios-arrow-forward"></i></a></p>
				</div>
				</div>
				<?php
				}?>
            </div>
            
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-12 text-center ftco-animate">
        		<p><a href="#" class="btn btn-black py-3 px-5">View All Menu</a></p>
        	</div>
        </div>
    	</div>

    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Your Kitchen</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Sunday</span><span> Closed</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Newsletter</h2>
            	<p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
	            	</a>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

<!-- "Enhancing Web Structure Mining Using Artificial Intelligence: A Comparative Study of Algorithms and Approaches" -->