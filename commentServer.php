<?php
date_default_timezone_set('Europe/London');
session_start();
include 'dbc.php';



	if(isset($_POST['cmessage'])){
		$cuname = $_SESSION['uname'];
		$cmessage = $_POST['cmessage'];

		$addquery = "INSERT INTO comtbl (cuname, cmessage) VALUES
		('$cuname', '$cmessage')";
		$addresult = $conn->query($addquery);
		header("Location: index.php");


	}

$getquery = "SELECT * FROM comtbl";
$getresult = $conn->query($getquery);
$row = $getresult->fetch_assoc());


	


?>

<html>
<body>
<div class="container-fluid">
<div class = "col-md-12">
	<div class="row">
	<img class = "thoughtpic" src="Images/qtransp.png"/>
	</div><br><br>
		<form method="post" action = "commentServer.php">
			<input type = "hidden" name="cuname" value ="Anonymous">
			<input type = "hidden" name="cdate" value ="<?php
			date('Y-m-d H:i:s')
			?>">
			<textarea name = "cmessage" required = ""></textarea><br>
			<button type="submit" id = "subcom" name="csubmit">Submit Comment</button>
		</form>
	</div>
	</div>
	</body>
	</html>