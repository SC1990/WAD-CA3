<?php
echo "<br> All Contacts <br> <br>";

//load xml file
$xml=simplexml_load_file("contacts.xml") or die("Error: Cannot create object");

//print each child element of contacts
foreach($xml->children() as $contacts) { 
  echo $contacts->name . "<br>";
  echo $contacts->address->street . ", ";
  echo $contacts->address->town . ", ";
  echo $contacts->address->city . ", ";
  echo $contacts->address->country . "<br>";
  echo $contacts->telephoneNum->mobileNum . "<br>";
  echo $contacts->telephoneNum->homeNum . "<br>";
  echo $contacts->telephoneNum->workNum . "<br>";
  echo $contacts->email . "<br>";
  echo $contacts->company . "<br>";
  echo $contacts->companyRole . "<br> <br>";
}
?>