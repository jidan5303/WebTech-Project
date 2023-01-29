<?php 

require_once '../model/model.php';

if (deleteReport($_GET['id'])) {
    header('Location: ../View/reportDetail.php');
}

 ?>