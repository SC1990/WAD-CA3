<?php
session_start();
?>

<!DOCTYPE html>
<html>


<head>
  <title>My Business Contacts - Contact </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/gif" href="Images/bookicon.ico">



</head>

<body class = "contactbody">
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


  
  
  
  
  
  
  
<div class="container">

        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact us
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
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



        <div class="row">
            <div class="col-md-8">
                <h3>Send us a message</h3>
                <form name="contactform" method="post" action="send_form_email.php">
 
				<table width="450px">
				 
				<tr>
				 
				 <td valign="top">
				 
				  <label for="first_name">First Name *</label>
				 
				 </td>
				
				 <td valign="top">
				 
				  <input  type="text" name="first_name" maxlength="50" size="30">
				 <br /><br />
				 </td>
				 
				</tr>
				
				
				<tr>
				 
				 <td valign="top">
				 
				 
				  <label for="last_name">Last Name *</label>
				 
				 </td>
				 
				 <td valign="top">
				 
				  <input  type="text" name="last_name" maxlength="50" size="30">
				 <br /><br />
				 </td>
				 
				</tr>
				 
				<tr>
				 <br>
				 <td valign="top">
				 
				  <label for="email">Email Address *</label>
				 
				 </td>
				 
				 <td valign="top">
				 
				  <input  type="text" name="email" maxlength="80" size="30">
				 <br /><br />
				 </td>
				 
				</tr>
				 
				<tr>
				 
				 <td valign="top">
				 
				  <label for="telephone">Phone Number</label>
				 
				 </td>
				 
				 <td valign="top">
				 
				  <input  type="text" name="telephone" maxlength="30" size="30">
				 <br /><br />
				 </td>
				 
				</tr>
				 
				<tr>
				 
				 <td valign="top">
				 
				  <label for="comments">Comments *</label>
				 
				 </td>
				 
				 <td valign="top">
				 
				  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
				 
				 </td>
				 
				</tr>
				 
				<tr>
				 
				 <td colspan="2" style="text-align:center">
				 <br />
				  <input type="submit" value="Submit">  
				 
				 </td>
				 
				</tr>
				 
				</table>
				 
				</form>
            </div>

        </div>
        
        <hr>  
  
  
  
  
  
  
  
  
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
				MUST KEEP LINK BELOW IN FOR SMOOTH SCROLLING
-->
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="scrolling.js"></script>

  
</body>

</html>