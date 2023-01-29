<?php  

include "../View/adminDashboard.php";

?>

<html>
<head> 
        <title>VojonBilash</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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
        
        .button {
        background-color: #4CAF50;
        border: 2px solid #4CAF50;
        color: white;
        padding: 15px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        margin: 4px 2px;
        cursor: pointer;
        }
        .button {
        transition-duration: 0.4s;
        }
        .button:hover {
        background-color: white; /* Green */
        color: black;
        }

    </style> 
      <body>  
        <br><br><br><br><br>
        <div class="center">
        <div class="container" style="width:1100px;">              
			<field>
            <legend><br></legend>
            
            <button class="button" id="load">SHOW DELIVERYBOY LIST</button>
            <button onclick="location.href='../View/addDeliveryboy.php ?>'" class="button" id="add">ADD DELIVERYBOY</button>
            <button onclick="location.href='../View/searchDeliveryboy.php ?>'" class="button" id="src">SEARCH DELIVERYBOY</button>
            <button onclick="location.href='../View/editDeliveryboyList.php ?>'" class="button" id="mod">MODIFY DELIVERYBOY</button>
            <legend><br></legend>
            </field>        

            <div id="main">
                </div>
                <script src="../Model/jquery.js"></script>
                <script>
                    $(document).ready(function(){
                    $("#load").on("click",function(e){
                    $.ajax({
                        url:"../Controller/deliveryboyCon.php",
                        type:"POST",
                        success:function(data){
                        $("#main").html(data);
                        }
                    });
                    });
                });
                </script>	 
                </div>
                 </div>
        </div>
      </body>  
 </html>  