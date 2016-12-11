<?php
session_start();
include 'dbc.php';
//$_SESSION['btnclicked'] = false;
?>

<!DOCTYPE html>
<html>

<!-- latest -->
<head>
	<title>My Business Contacts </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	
	<link rel="icon" type="image/gif" href="Images/bookicon.ico">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="comments.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
					


        	<?php
        	if($_SESSION['logged']==true){
        		echo "
        		<li id='usernavb'><a href='#'><b>Welcome  ".$_SESSION['first'].   "</b></a></li>
        	<li id='logoutlink'><a href='logout.php'><b>LOG OUT</b></a></li> ";
        	}
        	?>
        
				</ul>
				
			</div>
		</div>
	</nav>


	

			<?php



			if($_SESSION['logged']==true){

				echo 
				//"Welcome back " . $_SESSION['first'] . " !" ;

				'

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

					<button class="button button6" id="commentCbutton" onclick="commentContact()">Comments</button>
					<div class="actionDivs" id="commentsDiv"></div>
				

					<br>
				</div>
			</div>







				'
				;
				
			}

			else{








				echo "



<div class='container-fluid'>
<div class='row'>
  <div class = 'col-md-12' id='signdiv'>
<div class='wrapper'>
    <form class='form-contact accforms' method='post' action='signup.php'>  ";
    	if($_SESSION['uexistz']==true){
    		echo"
      <h2 class='form-signin-heading'><center>Sorry " . $_SESSION['triedname'] . " ! That username is taken!<center></h2>";
  }
  else{
  	echo "<h2 class='form-signin-heading'><center>Sign Up<center></h2>";
  }
      echo "
      <input type='text' class='form-control' name='first' placeholder='First Name' required='' autofocus='' />
      <input type='text' class='form-control' name='last' placeholder='Last Name' required=''/>      
      <input type='text' class='form-control' name='user' placeholder='Username' required=''/> 
      <input type='password' class='form-control' name='pass' placeholder='Password' required=''/> 
      
      <button class='btn btn-lg btn-primary btn-block' type='submit'>Sign Up</button>   
    </form>
  </div></div></div>


  </div>


	<div class = 'container-fluid' id='signdivs'>
	<div class='row'>
	

  	
<h2><center>OR<center><h2>


  <div class ='col-md-12' id='logdiv'>
	<div class='wrapper'>
    <form class='form-contact accforms' method='post' action='login.php'>    ";   
   
    if($_SESSION['fakedet']==true){
   echo "<h2 class='form-signin-heading'>Invalid username or password!</h2>";
	}
	else{
		echo "<h2 class='form-signin-heading'>Log In</h2>";
	}
echo 
      
      "<input type='text' class='form-control' name='user' placeholder='Username' required='' autofocus='' />
      <input type='password' class='form-control' name='pass' placeholder='Password' required=''/>      
     
      <button class='btn btn-lg btn-primary btn-block' type='submit'>Log In</button>   
    </form>

    
  </div></div></div></div>
  <div class = 'row'><br><br><br></div>

";

	echo '

		<div class="container">
        
        <div class="row">

            <div class="col-md-8">
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=53.3488038,-6.2431377&amp;spn=56.506174,79.013672&amp;t=m&amp;z=12&amp;output=embed"></iframe>
            </div>
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    <br>Based in Dublin<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Phone</abbr>: 1800 889 439</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Email</abbr>: <a href="mailto:business7761@gmail.com">business7761@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">Hours</abbr>:<br><br>Mon - Fri, 8:00AM - 6:00PM <br><br>
											Sat - Sun, 10:00AM - 4:00PM
							</p>
                <ul class="list-unstyled list-inline list-social-icons">
                         
                </ul>
            </div>
        </div>

</div> ';



  echo "
<br><br>
  		<div class='container-fluid'>
	
	
	<div class='row'>
	

  	<div class = 'col-md-12' id='contactusdiv'>
	<div class='wrapper'>
    <form class='form-contact conff' method='post' action='contactmail.php'>       
      <h2 class='form-signin-heading'><center>Contact Us</center></h2>
      <input type='text' class='form-control' name='finame' placeholder='First Name' required='' autofocus='' />
      <input type='text' class='form-control' name='laname' placeholder='Last Name' required=''/>   
       <input type='text' class='form-control' name='memail' placeholder='Email Address' required=''/>    
      <input type='text' class='form-control' name='fone' placeholder='Phone Number' required=''/> 
      <input type='text' class='form-control' name='enq' placeholder='Question, Query or Concern' required=''/> 
      
      <button class='btn btn-lg btn-primary btn-block' type='submit'>Contact Us</button>   
    </form>
 	 </div>
 	 </div>
            </div>

     </div>



  " ; //end of echo



  
	
	}//end of ELSE

	


  ?>

        <hr>  




	<footer class="container-fluid">
		<div class="navbar-fixed-bottom">

			<a href="#top" title="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>

			<p class="copy">
				<center>This web application is for demonstrational purposes only</center>
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
