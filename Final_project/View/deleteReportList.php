<?php  
require_once '../controller/reportinfo.php';

$reports = fetchAllReport();

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
        <h2>Report List:</h2>              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Id</th> 
                               <th>Category</th>  
                               <th>Username</th>  
                               <th>Report</th> 
                               <th>Modify</th>   
                          </tr>  
                          <?php foreach ($reports as $i => $report): ?>   
                               <tr>
							   <td><?php echo $report['Id'] ?></a></td>
                               <td><?php echo $report['Category'] ?></td>
                               <td><?php echo $report['Username'] ?></td>
                               <td><?php echo $report['Report'] ?></td>
                               <td><a class="delete" style="text-decoration: none;" href="../Controller/deleteReport.php?id=<?php echo $report['Id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
                               </tr>
                               <?php endforeach; ?> 
                     </table> 
                   </div>
                 </div>
        </div>
      </body>  
 </html>  