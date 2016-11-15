<?php

//load xml file
$xml=simplexml_load_file("contacts.xml");


//print each child element of contacts
foreach($xml->children() as $contacts) { 
  echo "<br>" . "Name: " . $contacts->name . "<br>";
  echo "Email: " . $contacts->email . "<br>";
  echo "Phone Number: " . $contacts->phoneNum . "<br>";
  echo "Company: " . $contacts->company . "<br>";
  echo "Role: " . $contacts->companyRole . "<br> <br>";
}
?>

