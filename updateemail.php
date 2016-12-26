<?php
session_start();


$email = filter_input(INPUT_POST, '$email', FILTER_SANITIZE_STRING) or die('Please fill out all fields');
$uid = $_SESSION['id'];

require_once 'dbcon.php';
$sql = "UPDATE volunteers SET email=? WHERE uid=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $email, $uid);
$stmt->execute();

if ($stmt->affected_rows >0 ){
	echo "<script type='text/javascript'>
	alert('Your information has been updated');
	window.location = 'volunteerpage.php';
	</script>";
}
else {
	echo "<script type='text/javascript'>
	alert('No Change');
	window.location = 'volunteerpage.php';
	</script>";
}



?>