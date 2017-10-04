<?php
require('src/php/dbConnector.php');

$db = new dbConnector();

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
  $message = $db -> insert($_POST['id'], $_POST['name'], $_POST['price'], basename($_FILES['file']['name']));

  move_uploaded_file($_FILES['file']['tmp_name'], '../img/'.basename($_FILES['file']['name']));
} else {
  $message = 'Failed to registration.';
}

header('Location: ../view/insertForm.php?message='.$message);
?>
