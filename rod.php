/*Starting over - old content: 


$uid = filter_input(INPUT_POST, 'uid') or die('Please fill out all fields for sign up 0.');
$name = filter_input(INPUT_POST, 'name') or die('Please fill out all fields for sign up 1.');
$email = filter_input(INPUT_POST, 'email') or die('Please fill out all fields for sign up 2.');
$phone = filter_input(INPUT_POST, 'phone') or die('Please fill out all fields for sign up 3.');
$pwd = filter_input(INPUT_POST, 'pwd') or die('Please fill out all fields for sign up 4.');




/* Added hashing to the password*/
$pwdh = password_hash($pwd, PASSWORD_DEFAULT);

/* image testing: $uploadOk = 0;

if(!empty($_FILES['fileToUpload']['name'])) {
$target_dir = "images/"; //specifies the directory where the file is going to be placed
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']); //specifies the path of the file to be uploaded
$uploadOk = 1;
move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file); //tmp_name contains the actual copy of your file content on the server
echo "The image ". basename( $_FILES['fileToUpload']['name']). " has been uploaded - ";
} else {
        echo "No image uploaded. ";
    }
 
/////////// END image upload ////////////
		
	if($uploadOk == 1){
$sqlUpdate = "INSERT INTO volunteer (uid, name, email, phone, pwd, image) VALUES (?,?,?,?,?,?)";
} else {
$sqlUpdate = "INSERT INTO volunteer (uid, name, email, phone, pwd) VALUES (?,?,?,?,?)"; 
}
	
     if(mysqli_query($conn, $sqlUpdate)){
		 echo 'Thank you for signing up as a volunteer for One Bowl.';
		 }else {
			 echo 'Ooops -- something went wrong. Please try again.';
			 }
			  mysqli_close($connection);
			 //close the connections
			





$sql = 'INSERT INTO volunteer (uid, name, email, phone, pwd, images) VALUES (?,?,?,?,?)';
//echo $sql;

require_once 'dbh.php';
$stmt = $conn->prepare($sql); /*Prepare the parametres
$stmt->bind_param('isssss', $uid, $first, $last, $pwdh, $image); /*Bind the parameters - incl. the password hashing 
$stmt->execute(); /*execute what is told above


header("Location: loginpage.php");
*/



//check if submit button was used:
if(isset($_POST['fileToUpload'])){
	//acquiring connection data
	require_once('dbcon.php');
	$connection = new MySQLi(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	//Transferring "special" characters correctly
	$connection->set_charset("utf8");
	//grabbing user input
	$name = mysqli_real_escape_string($connection, $_POST['name']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$phone = mysqli_real_escape_string($connection, $_POST['phone']);
	$pwd = mysqli_real_escape_string($connection, $_POST['pwd']);
	/////////////////////////
	///// Image upload  /////
	/////////////////////////

	$uploadOk = 0;

if(!empty($_FILES['fileToUpload']['name'])) {
 
$target_dir = "image/"; //specifies the directory where the file is going to be placed
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']); //specifies the path of the file to be uploaded
$uploadOk = 1;
move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file); //tmp_name contains the actual copy of your file content on the server
echo "The image ". basename( $_FILES['fileToUpload']['name']). " has been uploaded - ";
} else {
        echo "No image uploaded. ";
    }
 
/////////// END image upload ////////////

//updated SQL query
if($uploadOk == 1){
$update = "INSERT INTO onebowl (name, email, phone, pwd, image) VALUES('$name', '$email', '$phone', $pwd, '$target_file')";
} else {
$update = "INSERT INTO onebwol (name, email, phone, pwd) VALUES('$name', '$email', '$phone', $pwd)"; 
}

	//is $update true? Is the query executed correctly?
	if(mysqli_query($connection, $update)){
		echo 'You are now added to the database!';
		} else {
			echo 'Something went wrong.. Try again!';
			}
			//close connection:
			mysqli_close($connection);
	
//////////////////
//end if isset:	
	}   
			?>
		</div>	

<!--TYRING STUFF
<input type='hidden' name='uid' value='<=$uid>'>

<select name='days'>
						$sql = 'SELECT id, days FROM days';
						$stmt = $link->prepare($sql);
						$stmt->execute();
						$stmt->bind_result($id, $days);
						while ($stmt->fetch()){
							echo '<option value=' '.$id.''> '.$days.' </option>.PHP_EOL;'
						}
					</select>


<input type='file' name='fileToUpload'>
NOT TRYING STUFF-->




						
						/*
						<input type='radio' name='Host' value='Radio 1'>Host<br>
						<input type='radio' name='Serving' value='Radio 2'>Serving<br>
						<input type='radio' name='Cleaning' value='Radio 3'>Cleaning<br>
						
						'<p>Select a prefered day to work</p>'
						<input type='radio' name='Monday' value='Monday'>Monday<br>
						<input type='radio' name='Tuesday' value='Tuesday'>Tuesday<br>
						<input type='radio' name='Wednesday' value='Wednesday'>Wednesday<br>
						<input type='radio' name='Thursday' value='Thursday'>Thursday<br>
						<input type='radio' name='Friday' value='Friday'>Friday<br>
						<input type='radio' name='Saturday' value='Saturday'>Saturday<br>
						<input type='radio' name='Sunday' value='Sunday'>Sunday<br><br>
						
						*/
						
					
				
			
			
			
		$sql = "SELECT email FROM volunteers WHERE email='$email'";	
		$result = mysqli_query($conn, $sql);
		$emailcheck = mysqli_num_rows($result);

			if($emailcheck > 0){
				header("Location: volunteer.php?error=email");
			exit();
			}else {
				
				if($uploadOk){
					$encpass = password_hash($pwd, PASSWORD_DEFAULT);
					$sql = "INSERT INTO volunteers (name, phone, email, pwd, image, categories_id) 
					VALUES ('$name', '$phone', '$email', '$encpass', '$target_file', '$id')";
					$result = mysqli_query($conn, $sql);
					header("Location: volunteer.php");
				}else {
					$encpass = password_hash($pwd, PASSWORD_DEFAULT);
					$sql = "INSERT INTO volunteers (name, phone, email, pwd, categories_id) 
					VALUES ('$name', '$phone', '$email', '$encpass', '$id')";
					$result = mysqli_query($conn, $sql);
					header("Location: volunteer.php");
				}
				
				if($uploadOk == 1){
					
					echo 'You have now been added to the database';
				}else{
					echo 'Something went wrong.. Try again!';
					
				}
			}
		
	




$sql = "SELECT days FROM days";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							// output data of each row
							$row = array();
							while ($row=mysqli_fetch_assoc($result)) {
								$row = $row;
							
							foreach ($row as $key => $array) {
								echo "<input type='checkbox' name='$array'>$array <br>";
							}
							} else {
							echo "0 results";
						}
						$conn->close();
						?>
						
					
				
			
		
	




	<!--<select>
						<?php/*
						require_once 'dbcon.php';
				
						$sql = "SELECT vcat, id FROM categories";
						$result = $conn->query($sql);
				
						if ($result->num_rows > 0) {
							// output data of each row
					
							while ($row = $result->fetch_assoc()) {
							
								//echo $row['vcat'];
								//while($row = $result->fetch_assoc()) {
								//echo "<input type='checkbox' name='$row ['vcat']'> ". $row['vcat']. "<br>";
								echo "<option name='categories_id' value='".$row['id']."'>".$row['vcat']."</option>";
							}
						} else {
							echo "0 results";
						}
						$conn->close();
							
						*/	
						?>
						</select>-->
						
						<p>Select days</p>
						<?php
					
					
						?>
						
					<br>