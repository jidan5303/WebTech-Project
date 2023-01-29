<?php
include "../Model/db_con.php";
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	$q="SELECT * from report";
	$result=$conn->query($q);
	
	if($result->num_rows>0)
	{
		echo "<br><table border=1px style='width:80%; text-align:center'>
		<tr>
		<td><b>ID</b></td>
		<td><b>Category</b></td>
		<td><b>Username</b></td>
		<td><b>Report</b></td>
		</tr>";
		while($row=$result->fetch_assoc())
		{
			echo "<tr>";
			echo "<td>" . $row['Id'] . "</td>";
			echo "<td>" . $row['Category'] . "</td>";
			echo "<td>" . $row['Username'] . "</td>";
			echo "<td>" . $row['Report'] . "</td>";
			echo "</tr>";
		  }
		echo "</table>";
		
	}
	else
		echo "O results";
	
	
}
$conn->close();

?>
