<?php
session_start();


include 'dbc.php';

$sql = "SELECT * FROM comtbl";




$result = $conn->query($sql);

while($row = $result->fetch_assoc()){




	echo "<br><br><div class='comment-box'>
	<p>"
	/*echo $row['cid'];
	echo $row['cname'];
	echo $row['cmessage'];*/
	;
	echo "<br>";
	echo "Username: ".$row['cuname']."<br><br>";
	echo  nl2br($row['cmessage']);	// nl2br function inserts 2 brs when theres a paragraph
	if($_SESSION['id']==1){	//to delete comments we check are we admin
	echo "
<br>
	<form method = 'post' action='deletecomment.php'>
	<input type='hidden' name='cid' value'".$row['cid']."'>
	<input type='hidden' name='cuname' value'".$row['cuname']."'>
	<input type='hidden' name='cmessage' value'".$row['cmessage']."'>
	<button name='delcomat' type = 'submit'>Delete comment</button>
	</form>

	";
	
	}
	echo "</p>
	</div>";

}