<!DOCTYPE html>
<html>
  <head>
    <title>Complaint Management</title>
	<link rel= "stylesheet" type= "text/css" href= "css/style.css">
</head>
<body>
	<header> 
 
		<div class = "main">
			<ul> 
				<li><a href ="#">COMPLAINS</li>
			</ul>
		</div>
<table> 
	<tr>
		<th>STATUS</th>
		<th>NUMBER</th>
	</tr>
	<?php
require_once "DBconnect.php";
$sql= "select STATUS , count(ID) as NUMBER  from complain_status group by STATUS";
$result= $conn-> query($sql);
		
		if ($result->num_rows>0){	
			while($row=$result->fetch_assoc()){
		echo"<tr><td>".$row["STATUS"]."</td><td>".$row["NUMBER"]."</td></tr>";
		
	}
	echo "</table>";
}

else{
	echo "0 result";
}
?>
</table>
    
<table> 
	<tr>
		<th>ID</th>
		<th>STATUS</th>
	</tr>

<?php
require_once "DBconnect.php";
$sql="select ID,STATUS from complain_status";
$result= $conn-> query($sql);
		
		if ($result->num_rows>0){	
			while($row=$result->fetch_assoc()){
		echo"<tr><td>".$row["ID"]."</td><td>".$row["STATUS"]."</td></tr>";
		
	}
	echo "</table>";
}

else{
	echo "0 result";
}
?>
</table>

	</header>
	


	


</body>
</html>
