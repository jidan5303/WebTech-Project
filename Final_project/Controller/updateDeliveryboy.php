<?php  
require_once '../model/model.php';


if (isset($_POST['updateDeliveryboy'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['gender'] = $_POST['gender'];
	$data['age'] = $_POST['age'];
	$data['mobile'] = $_POST['mobile'];


  if (updateDeliveryboy($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	header("location: ../View/deliveryboy.php");
  }
} else {
	echo 'You are not allowed to access this page.';
}
?>