<?php

$contacts = simplexml_load_file("contacts.xml");

//get value user entered
$query = $_GET["query"];

//set suggestion to blank
$suggestion = "";

//if user entered a value
if ($query !== "") {
  
  //loop through contacts
  foreach($contacts->children() as $contact) { 
     
      //if contact name contains string user entered
      if (stristr($contact->name, $query)) {
            //if suggestions is currently blank
            if ($suggestion === "") {
                //assign contact name to suggestion
                $suggestion = $contact->name;
            } 
            //else if suggestion is currently contains a suggestion, add this contact name alongside it
            else {
                $suggestion .= ", $contact->name";
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
//

?>

  