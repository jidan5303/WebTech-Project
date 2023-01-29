<?php  
require_once '../model/model.php';


if (isset($_POST['createDeliveryboy'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 5]);
	$data['gender'] = $_POST['gender'];
	$data['age'] = $_POST['age'];
    $data['mobile'] = $_POST['mobile'];

  if (addDeliveryboy($data)) {
  	echo 'Successfully added!!';
    header("location:../View/deliveryboy.php");
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>