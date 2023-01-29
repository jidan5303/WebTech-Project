<?php 

require_once '../model/model.php';

if (deleteDeliveryboy($_GET['id'])) {
    header('Location: ../View/deliveryboy.php');
}

 ?>