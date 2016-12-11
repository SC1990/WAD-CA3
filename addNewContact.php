<?php 
session_start();
//isset() - Determine if a variable is set and is not NULL
//($_POST['insert']) - create array with key/value pairs and collect form data from form when user hits add button
//submit button name = 'insert'
//-> operator = access a value or method of this object
//so, 1. create new DomDocument object which represents an xml document
//2. place/load contacts.xml in this object
//$ = variable prefix, easier to identify variable
//$_POST = superglobal variable - global scope - can be accessed from anywhere
if(isset($_POST['add'])){
  $xml = new DomDocument("1.0","UTF-8");
  $xml->load('contacts.xml');
  //get each element
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phoneNum = $_POST['phoneNum'];
  $company = $_POST['company'];
  $companyRole = $_POST['companyRole'];
  
  //get and set root element
  $rootTag = $xml->getElementsByTagName("contacts")->item(0);
  
  $contactTag = $xml->createElement("contact");
  
  $nameTag = $xml->createElement("name", $name);
  $emailTag = $xml->createElement("email", $email);
  $phoneNumTag = $xml->createElement("phoneNum", $phoneNum);
  $companyTag = $xml->createElement("company", $company);
  $companyRoleTag = $xml->createElement("companyRole", $companyRole);
  
  $contactTag->appendChild($nameTag);
  $contactTag->appendChild($emailTag);
  $contactTag->appendChild($phoneNumTag);
  $contactTag->appendChild($companyTag);
  $contactTag->appendChild($companyRoleTag);
  
  $rootTag->appendChild($contactTag);
  
  $xml->save('contacts.xml');
  
  header('Location: index.php');
  exit;
}

?>

<html>
  <body>
    <!-- Add new contact-->
  <h1>Add New Contact</h1>
  
  
  
  <!--contact form-->
  <form action="addNewContact.php" method="POST" >
    Name:<br>
    <input type="text" name="name" required placeholder="Enter contact name">
    <br>
    Email:<br>
    <input type="text" name="email" placeholder="Enter email">
    <br>
    Phone Number:<br>
    <input type="text" name="phoneNum" placeholder="Enter phone number">
    <br>
    Company:<br>
    <input type="text" name="company" placeholder="Enter company name">
    <br>
    Company Role:<br>
    <input type="text" name="companyRole" placeholder="Enter job title">
    <br>
    <br>
    <input type="submit" name="add" value="Add Contact">
  </form>
  </body>
</html>
