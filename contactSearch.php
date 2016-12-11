<?php
session_start();
$contacts = simplexml_load_file("contacts.xml");
//get value user entered
$query = $_GET["query"];
//set suggestion to blank
$suggestion = "";
//if user entered a value
if ($query !== "") {
  
  $queryLength = strlen($query);
  
  //loop through contacts
  foreach($contacts->children() as $contact) { 
     
      //check if contact name contains string user entered
      //e.g user enters 'ja' - this is $query
      //get a substring of current contact name starting from 0th char, ending with char at $queryLength value - in this case 1
      //now check if the query is equal to the contact name substring
      //if true return contact name
      if (stristr($query, substr($contact->name, 0, $queryLength))) {
            //if suggestions is currently blank
            if ($suggestion === "") {
                //assign contact name to suggestion
                $suggestion = "$contact->name, $contact->email, $contact->phoneNum, $contact->company, $contact->companyRole <br><br>";
            } 
            //else if suggestion is currently contains a suggestion, add this contact name alongside it
            else {
                $suggestion .= "$contact->name, $contact->email, $contact->phoneNum, $contact->company, $contact->companyRole <br><br>";
            }
        }
  }
}
//if contact name not found
if($suggestion === ""){
  echo "no suggestion";
}
else{
  echo $suggestion;
}
?>