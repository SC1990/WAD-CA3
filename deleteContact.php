<?php
if(isset($_POST['delete'])){
  $xml = new DomDocument("1.0","UTF-8");
  $xml->load('contacts.xml');
  
}


?>

<html>
  <body>
    <!-- Add new contact-->
  <h3 id="addNew">Delete Contact</h3>
  
  
  
  <!--contact form-->
  <form action="deleteContact.php" method="POST" >
    Name:<br>
    <input type="text" name="name">
    <br>
    <br>
    <input type="submit" name="delete" value="Remove">
  </form>
  </body>
</html>
