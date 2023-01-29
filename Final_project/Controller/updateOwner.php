<?php  
require_once '../model/model.php';


if (isset($_POST['updateOwner'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['restaurantname'] = $_POST['restaurantname'];
	$data['gender'] = $_POST['gender'];
	$data['mobile'] = $_POST['mobile'];


  if (updateOwner($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	header("location: ../View/restaurantOwner.php");
  }
} else {
	echo 'You are not allowed to access this page.';
}
?>