
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>WKU_Transfer_Equivalency_Web_Interface</title>
	<meta charset="UTF-8"/>
	<meta name="description" content="Transfer Course Search">
	<meta name="author" content="Luke Keen">
	<meta http-equiv="refresh" content="180">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="TEStyling.css"/>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
</head>
<body>

<div>

	<header id="header">
		<h1 title="Research your move to WKU">WKU Transfer Equivalency</h1>
	</header>

<hr/>

<nav id="left">
	<ul>
		<li><a href="https://my.wku.edu" target="_blank"><strong>myWKU</strong></a></li><br/><br/>
		<li><a href="https://acsapps.wku.edu/pls/prod/dirpkg.prompt" target="_blank"><strong>Directory</strong></a></li><br/><br/>
		<li><a href="https://blackboard.wku.edu/webapps/login/?new_loc=%2Fwebapps%2Fportal%2Fexecute%2FdefaultTab" target="_blank"><strong>Blackboard</strong></a></li><br/><br/>
		<li><a href="https://acsapps.wku.edu/pls/prod/twbkwbis.P_WKULogin?ret_code=5" target="_blank"><strong>TopNet</strong></a></li><br/><br/>
		<li><a href="https://www.wku.edu/it/webmail/" target="_blank"><strong>TopperMail</strong></a></li><br/><br/>
	</ul>
</nav>

<nav id="right">
</nav>

<section id="image">
<a href="https://www.wku.edu/" target="_blank" title="Visit WKU's Homepage">
<img  src="https://www.wku.edu/marketingandcommunications/images/wkucupbox_br.jpg" alt="WKU_CUP_LOGO" width="300" height="300"/>
</a>
</section>
<hr/>
<footer id="footer">
	<p><strong>Please enter the name of your university in the search form below</strong></p>
</footer>
</div>
<br/>
<form action="/TransferEquivalency-webpage-master/cs396project1/CS 396/TE_S.php" method="POST">
	<input type="text" name="search" placeholder="Search..." list="schools"/>
	<datalist id="schools">
		<?php
			$servername = "127.0.0.1";
			$username = "root";			
			$password = "";
			$database = "tedb";			

			$conn = new mysqli($servername, $username, $password, $database);			

			if($conn->connect_error){			
				die("Connection failed: " . $conn->connect_error);			
			}			
			else{			
				$sql = mysqli_query($conn, "SELECT schoolname, schoolid FROM universities");			

				while($row = $sql->fetch_assoc()){			
					$id = $row['schoolid'];			
					$name = $row['schoolname'];			
					echo '<option value='.$id.'>'.$name.'</option>';			

				}				
			}					
		?>
	</datalist>
	<button>Submit</button>
</form>
</body>
</html>
