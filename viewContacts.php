<?php
echo "<br> All Contacts <br> <br>";

//load xml file
$xml=simplexml_load_file("contacts.xml") or die("Error: Cannot create object");

//print each child element of contacts
foreach($xml->children() as $contacts) { 
  echo $contacts->name . "<br>";
  echo $contacts->email . "<br>";
  echo $contacts->company . "<br>";
  echo $contacts->companyRole . "<br> <br>";
}
?>