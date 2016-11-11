<?php

if(isset($_POST['rename'])){
 
  
  $name = $_POST['oldName'];
  $newName = $_POST['newName'];
  
  $xml = simplexml_load_file("contacts.xml");
  //$xml->contact[0]->name = "Jamesy";
  

  
  foreach($xml->xpath("/contacts/contact[name = '$name']") as $node){
    $node->name = $newName;
    
  }
  
  
  //write data to contacts.xml
  file_put_contents("contacts.xml", $xml->asXML());
  
  
}

?>


<html>
  <body>
    <!-- Add new contact-->
  <h3 id="edit">Edit Contact</h3>
  
  
  
  <!--contact form-->
  <form action="editContact.php" method="POST" >
    Contact Name:<br>
    <input type="text" name="oldName">
    <br>
    New Name:<br>
    <input type="text" name="newName">
    <br>
    <br>
    <input type="submit" name="rename" value="Rename">
  </form>
  </body>
</html>