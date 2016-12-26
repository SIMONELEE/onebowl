<?php
session_start();
include 'dbcon.php'; 

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM volunteers WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

/* Password hashing variables*/
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);

/*If the $hash is false = error message*/
if($hash == 0){
	header("Location: volunteer.php?error=incorrect");
	exit();
} else  {
	$sql = "SELECT * FROM volunteers WHERE email='$email' AND pwd='$hash_pwd'";
	$result = mysqli_query($conn, $sql);

	// if there is no match from the database, do 'else'
	if (!$row = mysqli_fetch_assoc($result)){
		echo "<script type='text/javascript'>alert('Your email or password is incorrect. Please try again or sign up to become a volunteer.');</script>";
	} else {
		$_SESSION['id'] = $row['uid'];
		header("Location: volunteerpage.php");
	}
}
?>
		
	


