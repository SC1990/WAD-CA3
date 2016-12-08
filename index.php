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
							<span style="color:#f4511e; font-weight: bolder; font-size: 200% "> Name: </span><input   type="text" onkeyup="showContactSuggestion(this.value)">
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
			
			
			<div class="container-fluid">
				
				<form method = "POST" action="login.php">
					<input type ="text" name="user" placeholder="Username"><br>
					<input type ="password" name="pass" placeholder="Password"><br>
					<button type="submit">LOGIN</button>
				</form>
				
				<form method = "POST" action="signup.php">
					<input type ="text" name="first" placeholder="First Name"><br>
					<input type ="text" name="last" placeholder="Last Name"><br>
					<input type ="text" name="user" placeholder="Username"><br>
					<input type ="password" name="pass" placeholder="Password"><br>
					<button type="submit">SIGN UP</button>
				</form>
			</div>

<!--
			<div class="display">
				<div class="col-md-8">
					<p> </p>
				</div>
			</div>
		</div>
	</div>
-->
	
	<!--
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-6">
						<h3 class="title-negative-margin">Login</h3><br>
						<div class="title-separator-primary"></div>
						<div class="dark-col margin-top-60">
							<div class="row">
								
							
								<div class="col-xs-12 col-sm-6 margin-top-15">
									<input name="price" type="text" class="input-full main-input" placeholder="Price" />
									<br><br>
									<input name="bedrooms" type="text" class="input-full main-input" placeholder="Bedrooms" />
								</div>
								
							
						</div>				
					</div>
	</div>
	</div>
-->

	<footer class="container-fluid">
		<div class="navbar-fixed-bottom">

			<a href="#top" title="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>

			<p class="copy">
				<center>Copyright &copy; My Business Contacts 2016</center>
			</p>

		</div>
	</footer>




	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWV