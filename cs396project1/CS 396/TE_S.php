<?php
		$servername = "127.0.0.1";
		$username = "root";			
		$password = "";
		$database = "tedb";			

		$conn = new mysqli($servername, $username, $password, $database);			
			
			$three = 3;
			$five = 5;
			$schoolID = htmlspecialchars($_POST['search']);
			$schoolname = mysqli_query($conn, "SELECT schoolname FROM universities WHERE schoolid = ".$schoolID."");
			$sql = mysqli_query($conn, "SELECT course, title, hrs, wku, titlew, hrsw, andor, gened, colonnade FROM classes WHERE id = ".$schoolID."");
			$row = mysqli_fetch_array($schoolname);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>WKU_Transfer_Equivalency_Web_Interface</title>
	<meta charset="UTF-8"/>
	<meta name="description" content="Transfer Course Search">
	<meta name="author" content="Luke Keen">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="TE_SStyling.css"/>
</head>
<body>
<div>
<table>
	<caption>WKU Class Equivalence Table</caption>	
<tr>
	<th class = "header" colspan = "3"><?php echo $row['schoolname']; ?></th>
	<th class = "header" colspan = "6">WKU</th>
</tr>
			
<tr>
	<td><strong>Course</strong></td>
	<td><strong>Title</strong></td>
	<td><strong>Hrs</strong></td>
	<td><strong>WKU Course</strong></td>
	<td><strong>Title</strong></td>
	<td><strong>Hrs</strong></td>
	<td><strong>AND/OR</strong></td>
	<td><strong>Gen Ed</strong></td> 
	<td><strong>Colonnade</strong></td>
</tr>
<?php
	while($row1 = $sql->fetch_assoc()){
		$course = $row1['course'];
		$title = $row1['title'];
		$hrs = $row1['hrs'];
		$wku = $row1['wku'];
		$titlew = $row1['titlew'];
		$hrsw = $row1['hrsw'];
		$andor = $row1['andor'];
		$gened = $row1['gened'];
		$colonnade = $row1['colonnade'];
		echo "<tr>";
		echo " <td>".$course."</td>";
		echo " <td>".$title."</td>";
		echo " <td>".$hrs."</td>";
		echo " <td>".$wku."</td>";
		echo " <td>".$titlew."</td>";
		echo " <td>".$hrsw."</td>";
		echo " <td>".$andor."</td>";
		echo " <td>".$gened."</td>";
		echo " <td>".$colonnade."</td>";
		echo "</tr>";
	}

?>
</table>
</div>
</body>
</html>