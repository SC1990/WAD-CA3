<?php
session_start();
//load xml file
$xml=simplexml_load_file("contacts.xml");



echo "
<div class='container-fluid'>
<div class='row'>
<div class=col-md-12>
<table border=3>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Telephone</th>
    <th>Company</th>
    <th>Role</th>
  </tr>"
;

foreach($xml->contact as $contact){
  echo "<tr>";
  echo "<td>{$contact->name}</td>";
  echo "<td>{$contact->email}</td>";
  echo "<td>{$contact->phoneNum}</td>";
  echo "<td>{$contact->company}</td>";
  echo "<td>{$contact->companyRole}</td>";
  echo "<br />";
  echo "</tr>";
}
echo "</table></div></div><div>";





?>

