<?php
$xml=simplexml_load_file("contacts.xml") or die("Error: Cannot create object");
echo $xml->contact[0]->name . "<br>";
echo $xml->contact[0]->email; 
?>