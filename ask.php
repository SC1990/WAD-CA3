<?php
if (isset($_POST['name'], $_POST['email'], $_POST['question'])){
  $valss = "<div><li>Success</li></div>";
  echo $valss;
  json_encode($_POST['name'], $_POST['email'], $_POST['question']);
}
else{
  $valff = "<div><li>Success</li></div>";
  echo $valff;
}
?>