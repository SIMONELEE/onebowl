<html>
<head>
<meta charset="UTF-8">
<title>The One Bowl Way</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Bootstrap-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

<?php include 'header.php'?>
	
	<?php if(!isset($_SESSION['id'])){
		die("<p>Please login to see the content</p>");
		} else {
	?>
<div class='section content sectiontext col-lg-1' id='story'>
	<img src="images/volunteer_page.png" alt="One Bowl Way" class="img-responsive">
	<br>
  <div class="container-fluid">
   <div class="col-sm-6">
			<p class="type">
		   <?php
	
			$uid = $_SESSION['id'];
			require_once 'dbcon.php';
			$sql = "SELECT name FROM volunteers WHERE uid=?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param('i', $uid);
			$stmt->execute();
			$stmt->bind_result($vname);
			while ($stmt->fetch()){
				echo "Hello " . '<b>' . $vname . '</b>' . '!' ."<br><br>"; 	 
					}
	
			$sql = "SELECT name, phone, email, image FROM volunteers WHERE uid=?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param('i', $uid);
			$stmt->execute();
			$stmt->bind_result($vname, $vphone, $vemail, $image);
			while ($stmt->fetch()){
				echo "Here's your information: " .'<br>';
				echo "Name: " . '<b>' . $vname . '</b>' . '<br>';
				echo "E-mail: " . '<b>' . $vemail . '</b>' . '<br>';
				echo "Phone Number: " . '<b>' . $vphone . '</b>' . '<br>';	 
			}
	
			
			$sql = "SELECT vcat FROM categories join volunteers ON categories_id=id WHERE uid=?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param('i', $uid);
			$stmt->execute();
			$stmt->bind_result($cat);
			while ($stmt->fetch()){
				echo "Work Category: " . '<b>' . $cat . '</b>' .'<br>';	
			}

	
			$sql = "SELECT image FROM volunteers WHERE uid=?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param('i', $uid);
			$stmt->execute();
			$stmt->bind_result($image);
			while ($stmt->fetch()){
					if($result['image']){
					echo 'Image: ' . '<img src="' . $stmt['image'] . '" alt="' . $stmt['name'] . '" >' . '<br>';
					} else {
					echo 'Image: no image' . '<br>'; 
					}
								} 
			?>
		   </p>
		   
				<form class="updateform" action="updatename.php" method="post">
				<input type="hidden" name="$uid" value='<?=$uid?>'>
				<input type="text" name="$name" placeholder="Your Name">
				<button class="submit" type="submit" value="Update Name">Update Name</button>
				</form>
  			
  				<form class="updateform" action="updateemail.php" method="post">
				<input type="hidden" name="$uid" value='<?=$uid?>'>
				<input type="text" name="$email" placeholder="Your E-Mail">
				<button class="submit" type="submit" value="Update E-Mail">Update E-mail</button>
				</form>
  			 
  				<form class="updateform" action="updatephone.php" method="post">
				<input type="hidden" name="$uid" value='<?=$uid?>'>
				<input type="text" name="$phone" placeholder="Your Phone">
				<button class="submit" type="submit" value="Update Phone">Update Phone</button>
				</form>
		</div>
	  
		  <div class="col-sm-6">
							<!-- DAYS TO WORK -->
						<p class="type">Select your prefered day(s) to work:
						<form id ="updatedays" action='daysselected.php' method='POST'></p>
						<p class="type"><input type="checkbox" name="daysselected[]" value="1"> Monday</p>
						<p class="type"><input type="checkbox" name="daysselected[]" value="2"> Tuesday</p>
						<p class="type"><input type="checkbox" name="daysselected[]" value="3"> Wednesday</p>
						<p class="type"><input type="checkbox" name="daysselected[]" value="4"> Thursday</p>
						<p class="type"><input type="checkbox" name="daysselected[]" value="5"> Friday</p>
						<p class="type"><input type="checkbox" name="daysselected[]" value="6"> Saturday</p>
					 	<p class="type"><input type="checkbox" name="daysselected[]" value="7"> Sunday</p><br>
						<input type="submit" value="Select Days">
						</form>
		</div>

			<?php	
			}?>
		  </div>					
</div>

<?php require 'footer.php' ?>
</body>
</html>
