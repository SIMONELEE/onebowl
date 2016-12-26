 <html>
<head>
<meta charset="UTF-8">
<title>Volunteer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Bootstrap-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
</head>

<body>

<?php include 'header.php'?>


<div class="vNav">
       <ul class="vNav">
            <li>
                <a href="#volunteer">
                    <div class="label">Volunteer</div>
                </a>
            </li>
            <li>
                <a href="#bevolunteer">
                    <div class="label">Become Volunteer</div>
                </a>
            </li>
     </ul>
</div>

<div class="container-fixed">
	<div class="section content sectiontext col-lg-1 par" id="volunteer">
	   <img src="images/volunteer3.png" alt="One Bowl Location" class="img-responsive">
	   <p class="type">
	   As a new volunteer you sign up for a minimal three month commitment to one of our three teams.Please read the full agreement <a href="volunteeragreement.php" >here.</a> before signing up below.</p>
<br>
 	<div class="container-fluid">
  		<div class="col-sm-4">
  			<img src="images/cooking-one-bowl.png" alt="One Bowl Way" class="indeximg img-responsive">
  			<p class="textcenter type"><b>Kitchen</b><br>If you love cooking, learning new recipes, and being a helping hand to the kitchen lear of the day. <br> (kl. 15-18.00)</p>
  		</div>
  
  	<div class="col-sm-4">
 		<img src="images/one-bowl-host.png" alt="One Bowl Way" class="indeximg img-responsive">
  		<p class="textcenter type"><b>Host</b><br> If you love making people feel at home, decorating tables, and setting up.<br> (kl. 17.00-20.00)</p>
  	</div>
  
  <div class="col-sm-4">
  		<img src="images/cleaning-serving-one-bowl.png" alt="One Bowl Way" class="indeximg img-responsive">
  		<p class="textcenter type"><b>Serving/cleaning</b><br>  Without our cleaning/ serving team, we would be lost. P.S. we have a lot of fun too! <br> (kl. 19.30-21.00)</p>
  </div>

  </div> 
 </div>

	<div class="section content sectiontext col-lg-1 par" id="bevolunteer">
	  <div class="container-fluid">
	  	<img src="images/volunteer_onebowl.png" alt="One Bowl Location" class="img-responsive">
			<?php	
			// $_SERVER[HTTP_HOST = the domain] & $_SERVER[REQUEST_URI] = the entire path
			$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

			//if theres a string position (strpos) from the $url that has "error=empty"
			if(strpos($url, 'error=empty') !== false){
				echo "<script type='text/javascript'>alert('Fill out all fields to sign up.');</script>";
			}
			elseif(strpos($url, 'error=email') !== false){
				echo "<script type='text/javascript'>alert('Email is already registered');</script>";
				
			}
			if(strpos($url, 'error=incorrect') !== false){
							echo "<script type='text/javascript'>alert('Your email or password is incorrect. Please try again or sign up to become a volunteer.');</script>";
						}

			if (isset($_SESSION['id'])){
						echo "You are already logged in.";
					} else {
				
				?>
				
						<form id='signupform' action='signup.php' method='POST'>
						<input type='text' name='name' placeholder='Name'><br>
						<input type='email' name='email' placeholder='Email'><br>
						<input type='text' name='phone' placeholder='Phone Number'><br>
						<input type='password' name='pwd' placeholder='Password'><br><br>
   						<p>Upload an image of yourself (optional):</p>
    					<center><input type='file' name='fileToUpload'></center>
						
						<!-- WORK CATEGORIES DROPDOWN-->
						<br>
						<p>Select your prefered work task:</p>
						<select name="categories_id">
							<?php
							require_once 'dbcon.php';
							$sql = "SELECT vcat, id FROM categories";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								// output data of each row

								while ($row = $result->fetch_assoc()) {
									echo "<option name='categories_id' value='".$row['id']."'>".$row['vcat']."</option>";
								}
							} else {
								echo "0 results";
							}		
							?>
						</select>
							<br><br>
							
						<button type='submit'>SIGN UP</button>
							</form>
							<?php
			}
		  ?>

	</div>
</div>
	<?php include 'footer.php' ?>
</body>
</html>