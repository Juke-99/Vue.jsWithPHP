<?php
require('src/php/dbConnector.php');

$db = new dbConnector();

if(isset($_POST['id']) && (!isset($_POST['return']))) {
  $message = $db -> delete($_POST['id']);

  header('Location: ../view/deleteForm.php?message='.$message);
}

if(isset($_POST['id']) && isset($_POST['return'])) {
  $message = $db -> delete($_POST['id']);

  header('Location: ../view/view2.php?message='.$message);
}
?>
