<?php
 
  echo "Welcome " . "user123" . "to your personal contact book"; //set this for 1.5 seconds using JS
?>
  <!DOCTYPE html>
  <html>

  <head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"
     >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="getAllContacts.js"></script>
    <script src="addContact.js"></script>
  </head>

  <body>


    <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">

              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                   
                  <a class="navbar-brand" href="index.php">My Business Contacts</a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                      <li>
                          <a href="index.php">Home</a>
                      </li>

            <li>
              <a href="#">A___</a>
            </li>

            <li>
              <a href="#">B___</a>
            </li>

            <li>
              <a href="#">C___</a>
            </li>

                  </ul>
              </div>

          </div>

      </nav>



    <div class = "container">


          <div class="row">
              <div id="#top">
              </div>
           <div class="col-lg-12">
               <br>
               <h1 class="page-header">My Business Contacts</h1>
               <h2>Hi user123</h2>
          <hr>
           </div>   

        </div>


      <button id="viewCbutton" onclick="getAllContacts()">View All Contacts</button>
      <div id="allContacts"></div>
      
      <button id="addCbutton" onclick="addContact()">Add Contact</button>
      <div id="addContacts"></div>


      <br>
      <br>
    </div>

    <footer>

      <div class="row">
          <div class="col-lg-12">
            <p class="copy"><center>Copyright &copy; Business Contacts 2016</center></p>
          </div>
      </div>

    </footer>

  </body>

  </html>