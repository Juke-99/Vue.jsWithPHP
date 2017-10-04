<?php
require('src/php/checker.php');

$check = new checker();

if(isset($_POST['id'])) {

  if($check -> idCheck($_POST['id'])) {
    $message = '';
  } else {
    $message = 'Not exist.';
  }

  header('Location: ../view/searchResult.php?message='.$message.'&id='.$_POST['id']);
}

if(isset($_POST['name'])) {
  if($check -> nameCheck($_POST['name'])) {
    $message = '';
  } else {
    $message = 'Not exist.';
  }

  header('Location: ../view/searchResult2.php?message='.$message.'&name='.$_POST['name']);
}

if(isset($_POST['id']) && isset($_POST['specifyNum'])) {

  if($check -> idCheck($_POST['id'])) {
    $message = "";
  } else {
    $message = 'Not exist.';
  }

  header('Location: ../view/searchForm3.php?message='.$message.'&id='.$_POST['id']);
}
?>
