<?php
session_start();
require_once 'dbcon.php'; 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pwd = $_POST['pwd'];
$target_file = $_POST['image'];
$vcat = $_POST['vcat'];
$file = $_POST['fileToUpload'];
$id = $_POST['categories_id'];
$days = $_POST['days'];
$d_id = $_POST['days_id'];
//checkboxes
//$checkboxmonday = $_POST['days_id'];

$uploadOk = true;

if(!empty($file)){
	
	$target_dir = "image/"; //specifies the directory where the file is going to be placed
	$target_file = $target_dir . basename($file); //specifies the path of the file to be uploaded
	$uploadOk = true;
	//move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file); //tmp_name contains the actual copy of your file content on the server
}else {
	$uploadOk = false;
}


//error handling: nothing in sign-up should be empty
if (empty($name)) {
	header("Location: volunteer.php?error=empty");
	exit();
} 

if (empty($email)) {
	header("Location: volunteer.php?error=empty");
	exit();
}
if (empty($phone)) {
	header("Location: volunteer.php?error=empty");
	exit();
} 
if (empty($pwd)) {
	header("Location: volunteer.php?error=empty");
	exit();
} 
else {
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
					echo "<script type='text/javascript'>
					alert('You have signed up as a volunteer. Please login to see your information.');
					window.location = 'volunteer.php';
					</script>";
				}else {
					$encpass = password_hash($pwd, PASSWORD_DEFAULT);
					$sql = "INSERT INTO volunteers (name, phone, email, pwd, categories_id) 
					VALUES ('$name', '$phone', '$email', '$encpass', '$id')";
					echo "<script type='text/javascript'>
					alert('You have signed up as a volunteer. Please login to see your information.');
					window.location = 'volunteer.php';
					</script>";
					//select
					
					//$sql1 = "INSERT INTO volunteers_has_days (volunteers_uid, days_id) VALUES (1, 1)";
					$result = mysqli_query($conn, $sql);
				}
				
				if($uploadOk == 1){
					
					echo "<script type='text/javascript'>
					alert('You have signed up as a volunteer. Please login to see your information.');
					window.location = 'volunteer.php';
					</script>";
				}else{
					echo "<script type='text/javascript'>
					alert('Something went wrong. Please try again.');
					window.location = 'volunteer.php';
					</script>";
				}
				
			}
}
?>