<?php 

require_once '../model/model.php';

if (deleteOwner($_GET['id'])) {
    header('Location: ../View/restaurantOwner.php');
}

 ?>