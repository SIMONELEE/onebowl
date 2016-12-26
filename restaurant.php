<html>
<head>
<meta charset="UTF-8">
<title>Restaurant</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Bootstrap-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
</head>

<body>

<?php include 'header.php'?>

<div class="vNav">
       <ul class="vNav">
            <li>
                <a href="#restaurant">
                    <div class="label">Restaurant</div>
                </a>
            </li>
            <li>
                <a href="#menu">
                    <div class="label">Menu</div>
                </a>
            </li>
            <li>
                <a href="#location">
                    <div class="label">Location</div>
                </a>
            </li>
            <li>
                <a href="#payf">
                    <div class="label">Pay As You Feel</div>
                </a>
            </li>
     </ul>
</div>


<div class="container-fixed">

<!-- This is the Restaurant Section -->
	<div class="section sectiontext col-lg-1 par" id="restaurant">
		<div class="container-fluid">
		   <img src="images/restaurant_onebowl.png" alt="One Bowl Community Restaurent" class="img-responsive">
			<p class="type">One Bowl is community restaurant open for everyone where we focus on food insecurity and helping each other. We are open every second week on Wednesday, but we hoping to expand and share food every week.  
			Come as you are and join us in the Ansgar Kirken; because beating loneliness is just One Bowl away. 
			<br><br>
			The restaurant is also the main place where we build One Bowl community. For more updates find us on Social Media: <a href="https://www.facebook.com/1bowl/" target="_blank">Facebook</a> and <a href="https://www.instagram.com/onebowl.dk/" target="_blank">Instagram</a>.</p><br>
			
			<!--VIDEO-->
			<div class="embed-container"><iframe src="https://player.vimeo.com/video/195350534?title=0&byline=0&portrait=0" frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>

		</div>
	</div>

<!-- This is the Location Section -->
	<div class="section sectiontext col-lg-1 par" id="location">
		<div class="container-fluid">
			<img src="images/find_one_bowl.png" alt="One Bowl Location" class="img-responsive">
			<p class="type">We are located in Cph Nordvest, Fuglekvateret where we collaborate with Ansgar Kirken. Come as you are pay as you feel.
			<br><br>
			Our new address: <br>
			<center><b><p class="type">Ansgar Kirken - Maagevej 33, 2400 København NV.</p></b></center><br>
			<p class="type">We are open every second week on Wednesdays kl. 18:00 - 21:00.<br> </p>
		</div>
	</div>
	
<!-- This is the Pay As You Feel Section -->
	<div class="section sectiontext col-lg-1 par" id="payf">
		<div class="content container-fluid">
			<div class="col-sm-6">
				<img src="images/pay-as-you-feel-short.png" alt="One Bowl Pay As You Feel" class="img-responsive">
	  		</div>
		
	  
	  	<div class="col-sm-6">
			<p class="type">Meals are offered on a ‘pay as you feel’ basis in order to ensure a proper meal to all, regardless of one’s situation. This means there are no set prices on any food at One Bowl. We do provide suggested donation amounts for our menu to help you understand the cost of “paying it forward” and how to help those who struggle with food insecurity. Everything you give over the suggested price, goes to help others and to continues One Bowl work.</p> 
	  	</div>
	</div>
</div>

<!-- This is the Menu Section -->
	<div class="section sectiontext col-lg-1 par" id="menu">
		<div class="content container-fluid">
			<div class="col-sm-6">
				<img src="images/menu_big_text.png" alt="One Bowl Menu" class="img-responsive">
			</div>
		<br>
		
	  <div class="col-sm-6">
		<p class="type">Every dinner our fantastic volunteers prepare different dishes which are based on Eastern, vegetarian cuisine with a lot of flavours and history behind every dish. 
		<br><br>
		For weekly menu please visit our Facebook page, where you can also sign up for the next community dinner.</p>
	  </div>
	 </div>
	</div>

<?php require 'footer.php' ?>
</body>
</html>