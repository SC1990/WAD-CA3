<?php 


if(isset($_POST['insert'])){
  $xml = new DomDocument("1.0","UTF-8");
  $xml->load('contacts.xml');
  
  $name = $_POST['name'];
 /* $email = $_POST['email'];
  $phoneNum = $_POST['phoneNum'];
  $company = $_POST['company'];
  $companyRole = $_POST['companyRole'];*/
  
  $rootTag = $xml->getElementsByTagName("contacts")->item(0);
  
  $contactTag = $xml->createElement("contact");
  
  $nameTag = $xml->createElement("name", $name);
 /* $emailTag = $xml->createElement("email", $email);
  $phoneNumTag = $xml->createElement("phoneNum", $phoneNum);
  $companyTag = $xml->createElement("company", $company);
  $companyRoleTag = $xml->createElement("companyRole", $companyRole);*/
  
  $contactTag->appendChild($nameTag);
  /*$contactTag->appendChild($emailTag);
  $contactTag->appendChild($phoneNumTag);
  $contactTag->appendChild($companyTag);
  $contactTag->appendChild($companyRoleTag);*/
  
  $rootTag->appendChild($contactTag);
  
  $xml->save('contacts.xml');
}

?>

<html>
<body>

<!-- Add new contact-->
  <h3 id="addNew">Add New Contact</h3>
  
  
  
  <!--contact form-->
  <form action="addNewContact.php" method="POST" >
    Name:<br>
    <input type="text" name="name">
    <br>
    <!--
    Email:<br>
    <input type="text" name="email">
    <br>
    Phone Number:<br>
    <input type="text" name="phoneNum">
    <br>
    Company:<br>
    <input type="text" name="company">
    <br>
    Company Role:<br>
    <input type="text" name="companyRole"> -->
    <br>
    <br>
    <input type="submit" name="insert" value="Add">
  </form>
  
  </body>
  </html>