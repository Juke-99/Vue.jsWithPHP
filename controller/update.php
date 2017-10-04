<?php
require('src/php/dbConnector.php');

$db = new dbConnector();

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && (!isset($_POST['image']))) {
  $message = $db -> update($_POST['id'], $_POST['name'], $_POST['price']);

  header('Location: ../view/updateForm.php?message='.$message);
}

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image'])) {
  $message = $db -> update2($_POST['id'], $_POST['name'], $_POST['price'], $_POST['image']);

  header('Location: ../view/view2.php?message='.$message);
}
?>
