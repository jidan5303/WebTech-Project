<?php
include "../Model/db_con.php";
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	$q="SELECT * from customerdata";
	$result=$conn->query($q);
	
	if($result->num_rows>0)
	{
		echo "<br><table border=1px style='width:80%; text-align:center'>
		<tr>
		<td><b>ID</b></td>
		<td><b>Name</b></td>
		<td><b>Email</b></td>
		<td><b>Username</b></td>
		<td><b>Gender</b></td>
		<td><b>Mobile</b></td>
		</tr>";
		while($row=$result->fetch_assoc())
		{
			echo "<tr>";
			echo "<td>" . $row['Id'] . "</td>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Email'] . "</td>";
			echo "<td>" . $row['Username'] . "</td>";
			echo "<td>" . $row['Gender'] . "</td>";
			echo "<td>" . $row['Mobile'] . "</td>";
			echo "</tr>";
		  }
		echo "</table>";
		
	}
	else
		echo "O results";
	
	
}
$conn->close();

?>
