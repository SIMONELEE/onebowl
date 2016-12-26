<?php
session_start();


//$name = filter_input(INPUT_POST, '$name', FILTER_SANITIZE_STRING) or die('Missing/illegal parameter1');

if(isset($_POST['$email']) && !empty($_POST['$email'])){
	$email = filter_input(INPUT_POST, '$email', FILTER_SANITIZE_STRING) or die('Missing/illegal parameter2');
}else {
	$email = "email=?";
}
	


echo $email;

$uid = $_SESSION['id'];

require_once 'dbcon.php';
$sql = "UPDATE volunteers SET name=? WHERE uid=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $name, $uid);
$stmt->execute();

if ($stmt->affected_rows >0 ){
	echo "<script type='text/javascript'>alert('Your information has been updated');</script>" . 
	header("Location: volunteerpage.php");
}
else {
	echo "<script type='text/javascript'>alert('No Change');</script>";
	header("Location: volunteerpage.php");
}


$sql = "UPDATE volunteers SET email=? WHERE uid=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $email, $uid);
$stmt->execute();

if ($stmt->affected_rows >0 ){
	echo "<script type='text/javascript'>alert('Your information has been updated');</script>" . 
	header("Location: volunteerpage.php");
}
else {
	echo "<script type='text/javascript'>alert('No Change');</script>";
	header("Location: volunteerpage.php");
}



$sql = "UPDATE vcat FROM categories join volunteers ON categories_id=id WHERE uid=?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param('i', $uid);
			$stmt->execute();
			$stmt->bind_result($cat);
			while ($stmt->fetch()){
				echo "Work Category: " . '<b>' . $cat . '</b>' .'<br>';	
			}


?>
<br>

<!--<a href="volunteerpage.php?uid=<?=$uid?>">User Page</a><br>-->