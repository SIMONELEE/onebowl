<?php
session_start();
require 'dbcon.php';

//$days = $_POST['days'];
//$days_id = $_POST['days_id'];
$v_id = $_SESSION['id'];

//$daysselected = $_POST['daysselected'];

//generates array of checkbox values
/**
if(isset($_POST['daysselected'])){
  if (is_array($_POST['daysselected'])) {
    foreach($_POST['daysselected'] as $value){
      echo $value;
    }
  } else {
    $value = $_POST['daysselected'];
    echo $value;
  }
}
**/


	$uid = $v_id;
	$sql = "DELETE FROM volunteers_has_days WHERE volunteers_uid=?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('i', $uid);
	$stmt->execute();
	while ($stmt->fetch()){}


	foreach($_POST['daysselected'] as $days_id){
	$sql ="INSERT INTO volunteers_has_days (volunteers_uid, days_id) VALUES (?,?)";
	echo "<script type='text/javascript'>
	alert('Your days have been updated!');
	window.location = 'volunteerpage.php';
	</script>";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('ii', $v_id, $days_id);
	$stmt->execute();
	while ($stmt->fetch()){
		
		}
	}

	


?>