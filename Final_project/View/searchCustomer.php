


<?php 
include "../View/adminDashboard.php";

?>
<html>
<head> 
    <title>VojonBilash</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

    <script>
    function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
        }
        xmlhttp.open("GET", "../Controller/findCustomer.php?q="+str, true);
        xmlhttp.send();
    }
    }
    function checkField() {
		if (document.getElementById("fname").value == "") {
			document.getElementById("nameErr").innerHTML = "Name can't be blank";
			document.getElementById("fname").style.borderColor = "red";
		}else{
			document.getElementById("nameErr").innerHTML = "";
			document.getElementById("fname").style.borderColor = "black";
		}	
    }
    </script>
</head> 

    <style>
        .edit{
            font-size: 15px;
            color: #63CF3C;
        }
        .edit:hover{
            background: white;
        }
        .delete{
            font-size: 15px;
            color: #FF0000;
        }
        .delete:hover{
            background: white;
        }

        .center{
            width: 110%;
            display: flex;
            justify-content: center;
        }
    </style> 
<body>  
    <br><br><br><br><br><br><br>
    <div class="center">
    <div class="container" style="width:1000px;">
    <h3><b>SEARCH FOR CUSTOMER:</b></h3><br>
    <form action="">
    <label for="fname">Type Name Here:</label>
    <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)" onblur="checkField()" onkeyup="checkField()"> <span style="color:red" id="nameErr"></span>
    </form>
    <p><b><u>Suggestions:</u> <span id="txtHint"></span></b></p>
    </div>
    </div>
</body>
</html>