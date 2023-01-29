<?php 

require_once '../controller/deliverboyinfo.php';
$deliveryboy = fetchDeliveryboy($_GET['id']);

include "../View/adminDashboard.php";


 ?>
<!DOCTYPE html>
<html>
<head> 
        <title>VojonBilash</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    </head> 
    <script>  
		function validateform(){  
		var name=document.myform.name.value;  
          var email=document.myform.email.value;
          var username=document.myform.username.value;
          var gender=document.myform.gender.value;
          var age=document.myform.age.value;
          var mobile=document.myform.mobile.value;  
		  
		if (name==null || name==""){  
		  alert("Name can't be blank");  
		  return false;  
		}
          else if(email==null || email==""){
               alert("Email can't be blank"); 
               return false;
          }
          else if(!email.match(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i))
          {
               alert("Invalid Email");
               return false;
          }
          else if(username==null || username==""){
               alert("Username can't be blank");
               return false; 
          }  
          else if(gender==null || gender==""){
               alert("Gender can't be blank"); 
               return false;
          } 
          else if(age==null || age==""){
               alert("Age can't be blank"); 
               return false;
          } 
          else if(mobile.length<10){
               alert("Mobile must consits of 10 digit"); 
               return false;
          }
		}
		function checkName() {
			if (document.getElementById("name").value == "") {
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("name").style.borderColor = "red";
			}else{
			  	document.getElementById("nameErr").innerHTML = "";
			  	document.getElementById("name").style.borderColor = "black";

			}	
          }
          function checkMail() {
			if (document.getElementById("email").value == "") {
			  	document.getElementById("mailErr").innerHTML = "Email can't be blank";
			  	document.getElementById("email").style.borderColor = "red";
			}else{
			  	document.getElementById("mailErr").innerHTML = "";
			  	document.getElementById("email").style.borderColor = "black";

			}	
          }
          function checkUserName(){
               if (document.getElementById("username").value == "") {
                         document.getElementById("unErr").innerHTML = "Username can't be blank";
                         document.getElementById("username").style.borderColor = "red";
                    }else{
                         document.getElementById("unErr").innerHTML = "";
                         document.getElementById("username").style.borderColor = "black";
                    }
          }
          function checkGender(){
               if (document.getElementById("gender").value == "") {
                         document.getElementById("genderErr").innerHTML = "Gender can't be blank";
                         document.getElementById("gender").style.borderColor = "red";
                    }else{
                         document.getElementById("genderErr").innerHTML = "";
                         document.getElementById("gender").style.borderColor = "black";
                    }
          }
          function checkAge(){
               if (document.getElementById("age").value == "") {
                         document.getElementById("ageErr").innerHTML = "Age can't be blank";
                         document.getElementById("age").style.borderColor = "red";
                    }else{
                         document.getElementById("ageErr").innerHTML = "";
                         document.getElementById("age").style.borderColor = "black";
                    }
          }
          function checkMobile(){
               if (document.getElementById("mobile").value == "") {
                         document.getElementById("mobileErr").innerHTML = "Mobile number can't be blank";
                         document.getElementById("mobile").style.borderColor = "red";
                    }else{
                         document.getElementById("mobileErr").innerHTML = "";
                         document.getElementById("mobile").style.borderColor = "black";
                    }
          }
          </script>
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
        <br><br><br><br><br><br>
        <div class="center">
        <div class="container" style="width:700px;">              
        <div class="table-responsive">

        <form name="myform" action="../controller/updateDeliveryboy.php" method="POST" enctype="multipart/form-data" onsubmit="return validateform()">
          <label for="name">Name:</label><br>
          <input value="<?php echo $deliveryboy['Name'] ?>" type="text" id="name" class="form-control" name="name" onblur="checkName()" onkeyup="checkName()"/><span style="color:red" id="nameErr"></span><br />
          <label for="surname">Email:</label><br>
          <input value="<?php echo $deliveryboy['Email'] ?>" type="text" id="email" class="form-control" name="email" onblur="checkMail()" onkeyup="checkMail()"/><span style="color:red" id="mailErr"></span><br />
          <label for="username">Username:</label><br>
          <input value="<?php echo $deliveryboy['Username'] ?>" type="text" id="username" class="form-control" name="username" onblur="checkUserName()" onkeyup="checkUserName()"/><span style="color:red" id="unErr"></span><br />
          <label for="gender">Gender:</label><br>
          <input value="<?php echo $deliveryboy['Gender'] ?>" type="text" id="gender" class="form-control" name="gender" onblur="checkGender()" onkeyup="checkGender()"/><span style="color:red" id="genderErr"></span><br />
          <label for="age">Age:</label><br>
          <input value="<?php echo $deliveryboy['Age'] ?>" type="text" id="age" class="form-control" name="age" onblur="checkAge()" onkeyup="checkAge()"/><span style="color:red" id="ageErr"></span><br />
          <label for="mobile">Mobile:</label><br>
          <input value="<?php echo $deliveryboy['Mobile'] ?>" type="text" id="mobile" class="form-control" name="mobile" onblur="checkMobile()" onkeyup="checkMobile()"/><span style="color:red" id="mobileErr"></span><br />

          <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"><br>
          <input type="submit" class = "edit" name = "updateDeliveryboy" value="Update">
          <input type="reset" class = "delete"> <br>
        </form> 
      </div>
      </div>
      </div>

</body>
</html>

