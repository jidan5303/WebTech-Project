<?php 

require_once ('../model/model.php');

function fetchAllReport(){
	return showAllReport();

}
function fetchReport($id){
	return showReport($id);
}
?>