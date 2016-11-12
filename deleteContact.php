<?php
//isset() - Determine if a variable is set and is not NULL/check if exists
//($_POST['remove']) - collect form data from form when user hits remove button 
if(isset($_POST['remove'])){
  $xml = new DomDocument("1.0","UTF-8");
  $xml->load('contacts.xml');
  
  //set variable to value user types in for name
  $name = $_POST['name'];
  
  //DOM (Document Object Model) is a representation of a document 
  //or document fragment consisting of XML nodes arranged as a tree.
  //XPath is a syntax for expressing a navigation through a DOM to locate one or more nodes.
  //need to create DOM ($xml) first to access nodes using xpath
  //DOMXpath - object used to query xml doc using xpath
  $xpath = new DOMXpath($xml);
  
  //In XPath, there are seven kinds of nodes: element, attribute, text, 
  //namespace, processing-instruction, comment, and document nodes.
  
  //query we want to run
  $newQuery = "/contacts/contact[name = '$name']";
  
  //loop through contacts.xml and search for name user entered
  //for every iteration through loop, current value is set to $node
  //Returns a DOMNodeList containing all nodes matching the given XPath expression 
  foreach($xpath->query($newQuery) as $node){
    
 
          
    
    //starting from parent node('contact'), remove all child elements('name', 'email' etc)
          $node->parentNode->removeChild($node);
    
  }
  
  $xml->save('contacts.xml');
  
}


?>

<html>
  <body>
    
  <h3 class="actionBtn">Delete Contact</h3>
  
  
  
  <!--contact form-->
  <form action="deleteContact.php" method="POST" >
    Name:<br>
    <input type="text" name="name">
    <br>
    <br>
    <input type="submit" name="remove" value="Remove">
  </form>
  </body>
</html>
