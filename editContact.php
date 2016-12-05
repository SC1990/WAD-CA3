<?php

if(isset($_POST['rename'])){
 
  
  $name = $_POST['oldName'];
  $newName = $_POST['newName'];
  $newEmail = $_POST['newEmail'];
  $newPhoneNum = $_POST['newPhoneNum'];
  $newCompany = $_POST['newCompany'];
  $newCompanyRole = $_POST['newCompanyRole'];
  
  $xml = simplexml_load_file("contacts.xml");
  

  
  //search contacts for contact with this name
  foreach($xml->xpath("/contacts/contact[name = '$name']") as $node){
    //change to whatever new name user enters
    
    
    if(!empty($newName)){
      $node->name = $newName;
    }
    
    if(!empty($newEmail)){
      $node->email = $newEmail;
    }
    
    if(!empty($newPhoneNum)){
      $node->phoneNum = $newPhoneNum;
    }
    
    if(!empty($newCompany)){
      $node->company = $newCompany;
    }
    
    if(!empty($newCompanyRole)){
      $node->companyRole = $newCompanyRole;
    }
    
    
  }
  
  
  //save data to contacts.xml
  file_put_contents("contacts.xml", $xml->asXML());
  
  header('Location: index.html');
  exit;
  
  
}

?>


<html>
  <body>
   
    
  <h1>Edit Contact</h1>
  
  
  
  <!--contact form-->
  <form action="editContact.php" method="POST" >
    Contact Name:<br>
    <input type="text" name="oldName">
    <br>
    <br>
    New Name:<br>
    <input type="text" name="newName">
    <br>
    New Email:<br>
    <input type="text" name="newEmail">
    <br>
    New Phone Number:<br>
    <input type="text" name="newPhoneNum">
    <br>
    New Company:<br>
    <input type="text" name="newCompany">
    <br>
    New Company Role:<br>
    <input type="text" name="newCompanyRole">
    <br>
    <br>
    <input type="submit" name="rename" value="Save Changes">
  </form>
  </body>
</html>