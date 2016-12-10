<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>

<!-- latest -->
<head>
	<title>My Business Contacts </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	
	<link rel="icon" type="image/gif" href="Images/bookicon.ico">
	
</head>

<body>



	<nav class="navbar navbar-default custom-nav">
		<div class="container" id="top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
				<a class="navbar-brand" href="index.php">MY BUSINESS CONTACTS</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">HOME</a></li>
        	<li><a href="faq.php">FAQ</a></li>
        	<li><a href="contact.php">CONTACT</a></li>
        	<li id="logoutlink"><a href="logout.php"><i><b>LOG OUT</b></i></a></li>
        
				</ul>
				
			</div>
		</div>
	</nav>





	<div id="actionsContainer" class="container-fluid">
		<div class="row">
			<div class="col-md-3 text-center ">
				<div class="buttons">

					<button class="button button2" id="searchBtn" onclick="searchContacts()">Search Contacts</button>
					<br>
					<div class="actionDivs" id="searchBox">
						<br>
						<h1 id = "searchHeader">Search For Contact</h1>

						<form id="searchBar">
							<span class="searcherkey"> Name: </span><input   type="text" onkeyup="showContactSuggestion(this.value)">
							<br>
							<br>
							<p id="suggestionLabel"><span id="suggestion"></span></p>
						</form>

					</div>

					<br>


					<button class="button button1" id="viewCbutton" onclick="getAllContacts()">View All Contacts</button>
					<div class="actionDivs" id="allContacts"></div>
					<br>
					<br>

					<button class="button button3" id="addCbutton" onclick="addContact()">Add Contact</button>
					<div class="actionDivs" id="addContact"></div>
					<br>
					<br>

					<button class="button button4" id="editCbutton" onclick="editContact()">Edit Contact</button>
					<div class="actionDivs" id="editContact"></div>
					<br>
					<br>

					<button class="button button5" id="deleteCbutton" onclick="deleteContact()">Delete Contact</button>
					<div class="actionDivs" id="deleteContactDiv"></div>


					<br>
				</div>
			</div>

	<div class = "container-fluid" id="signdivs">
	<div class="row">
	


  	<div class = "col-md-3" id="signdiv">
<div class="wrapper">
    <form class="form-signin" method="post" action="signup.php">       
      <h2 class="form-signin-heading">Sign Up</h2>
      <input type="text" class="form-control" name="first" placeholder="First Name" required="" autofocus="" />
      <input type="text" class="form-control" name="last" placeholder="Last Name" required=""/>      
      <input type="text" class="form-control" name="user" placeholder="Username" required=""/> 
      <input type="password" class="form-control" name="pass" placeholder="Password" required=""/> 
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>   
    </form>
  </div></div>



  <div class = "col-md-3" id="logdiv">
	<div class="wrapper">
    <form class="form-signin" method="post" action="login.php">       
      <h2 class="form-signin-heading">Log In</h2>
      <input type="text" class="form-control" name="user" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="pass" placeholder="Password" required=""/>      
     
      <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>   
    </form>

    <?php
    	if(isset($_SESSION['id'])){
    		echo "Welcome back " . $_SESSION['first'] . " !";
    	}
    ?>
  </div></div>


  </div></div>


	<footer class="container-fluid">
		<div class="navbar-fixed-bottom">

			<a href="#top" title="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>

			<p class="copy">
				<center>This website is for demonstrational purposes only</center>
			</p>

		</div>
	</footer>




	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="contactFunctions.js"></script>
	
	<!--Smooth Scrolling JQuery*/
				MUST KEEP LINK BELOW IN FOR SMOOTH SCROLLING...

-->
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="scrolling.js"></script>




</body>

</html>
