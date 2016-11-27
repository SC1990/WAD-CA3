<?php

//load xml file
$xml=simplexml_load_file("contacts.xml");



echo "

<table border=1>
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
echo '</table>';





?>

