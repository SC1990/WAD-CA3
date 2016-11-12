<?php

$xml=new DOMDocument();
$xml->load("contacts.xml");



?>

  <html>

  <body>
    <h3 class="actionBtn">Search</h3>

    <form action="contactSearch.php" method="POST">
      <input type="text" name="name">
      <br>

    </form>

  </body>

  </html>