<?php
echo "<br> All Contacts <br> <br>";

//load xml file
$xml=simplexml_load_file("contacts.xml") or die("Error: Cannot create object");

//print each child element of contacts
foreach($xml->children() as $contacts) { 
  echo "Name: " . $contacts->name . "<br>";
  echo "Email: " . $contacts->email . "<br>";
  echo "Phone Number: " . $contacts->phoneNum . "<br>";
  echo "Company: " . $contacts->company . "<br>";
  echo "Role: " . $contacts->companyRole . "<br> <br>";
}
?>