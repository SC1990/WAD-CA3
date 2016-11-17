<?php
header('Content-type: text/javascript');

$userfaq = array(
  'success' => false,
  'result' => 0
);

echo json_encode($userfaq);
?>