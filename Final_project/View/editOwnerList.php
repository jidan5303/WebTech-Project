<?php  
require_once '../controller/ownerInfo.php';

$owners = fetchAllOwner();

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
    </style> 
      <body>  
        <br><br><br><br><br>
        <div class="center">
        <div class="container" style="width:1000px;">
        <h2>Restaurant Owner List:</h2>              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>Username</th>  
                               <th>Restaurant Name</th> 
                               <th>Gender</th>   
                               <th>Mobile</th>
                               <th colspan=2>Modify</th>   
                          </tr>  
                          <?php foreach ($owners as $i => $owner): ?>   
                               <tr>
							   <td><a href="editOwner.php?id=<?php echo $owner['Id'] ?>"><?php echo $owner['Name'] ?></a></td>
                               <td><?php echo $owner['Email'] ?></td>
                               <td><?php echo $owner['Username'] ?></td>
                               <td><?php echo $owner['RestaurantName'] ?></td>
                               <td><?php echo $owner['Gender'] ?></td>
                               <td><?php echo $owner['MobileNumber'] ?></td>
                               <td><a class="edit" style="text-decoration: none;" href="../View/editOwner.php?id=<?php echo $owner['Id'] ?>">Edit</a></td>
                               <td><a class="delete" style="text-decoration: none;" href="../Controller/deleteOwner.php?id=<?php echo $owner['Id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
                               </tr>
                               <?php endforeach; ?> 
                     </table> 
                   </div>
                 </div>
        </div>
      </body>  
 </html>  