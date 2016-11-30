<?php
$message = '';
$error = '';
if(isset($_POST["submit"])){
	if(empty ($_POST["name"])){
		$error = "<label class='text-danger'>Enter Name</label>";
	}
	else if (empty ($_POST["email"])){
		$error = "<label class='text-danger'>Enter Email</label>";
	}
	else if (empty($_POST["comments"])){
		$error = "<label class='text-danger'>Enter Comment</label>";
	}
	else{
		if(file_exists('faqdata.json')){
			$current_data = file_get_contents('faqdata.json');
			$array_data = json_decode($current_data, true);
			
		}
		else{
			$error='JSON file does not exist';
		}
	}
}
?>

<!DOCTYPE html>
<html>


<head>
  <title>My Business Contacts - FAQ </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="contactFunctions.js"></script>



</head>

<body>

 <nav class="navbar navbar-default navbar-fixed-top custom-nav">
  <div class="container" id="#top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.html">MY BUSINESS CONTACTS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="contact-us.html">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

  
  
  

   <div class="container-fluid">


    <div class="row phaz">
      <div id="#top">
      </div>
      <div class="col-lg-12">
        <br>
        <h1 class="page-header">FAQ</h1>
        <h2>Ask Questions<br></h2>
        <hr>
      </div>

    </div>
    
    <div class="row">
      <div class="col-lg-12">
        <form id="faqform" action="faqpost.php" method="post">
    <ul>
        <li>
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" />
        </li>
      <!--
              Label for username when login system is created
      -->
      
      
        <li>
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control"/>
        </li>
        <li>
            <label for="comments">Comments:</label>	<!-- Maybe delete cols  and rows if wont append -->
            <textarea name="comments" class="form-control" cols="25" rows="3"></textarea>
        </li>
      <br>
        <li>
            <input type="submit" value="Submit Comment" />
            <input type="reset" value="reset" />
        </li>
    </ul>
</form>
      </div>
    </div>
  </div>


  
    
    


    <br>
    <br>
  </div>
        



  
  
  
 

 <footer class="container-fluid">
	<div class="navbar-fixed-bottom">
	
  <a href="#top" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
		
	<p class="copy">
		 <center>Copyright &copy; Business Contacts 2016</center>
		</p>
	
	</div>
</footer>
  
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script>          /* Smooth Scrolling JQuery*/
	
	$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
	</script>

</body>

</html>