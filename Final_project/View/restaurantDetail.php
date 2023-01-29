<?php
include 'adminDashboard.php';
?>

<!DOCTYPE html>
<html>
<head>

<title>VojonBilash</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","../Controller/restaurantCon.php?q="+str,true);
  xmlhttp.send();
}
</script>

<style>
  select {
    background-color: #4CAF50;
        border: 2px solid #4CAF50;
        color: white;
        padding: 15px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        margin: 4px 2px;
        cursor: pointer;
        transition-duration: 0.4s;
  }
  select:hover {
        background-color: white; 
        color: black;
  }
</style>

</head>
<body>
<br><br><br><br><br><br><br>
    <div class="center">
    <div class="container" style="width:900px;">
<form>
 
<select name="users" onchange="showUser(this.value)">
<option value="">Select a Restaurant:</option>
<option value="1">Khanas</option>
<option value="2">Chillies</option>
<option value="3">Pizza Hut</option>
</select>
<h3><u>Restaurant Information: </u></h3>
</form>
<br>
<div id="txtHint"></div>
</div>
</div>

</body>
</html>