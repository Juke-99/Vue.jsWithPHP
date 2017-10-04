<!DOCTYPE html>

<?php
require('src/php/dbConnector.php');

$db = new dbConnector();

if(isset($_GET['id'])) {
  $exec = $db -> select($_GET['id']);
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Search Result Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/layout.css">
    <script src="https://unpkg.com/vue"></script>
  </head>

  <body>
    <h3>Search Result</h3>

    <div id="insert_form_box">
      <div class="form_group">
        <?php
        if(isset($_GET['message']) && !empty($_GET['message'])) {
        ?>
        <span class="button white">
        <?php
        echo $_GET['message'];
        ?>
        </span>
        <?php
        } else {
          while ($row = $exec -> fetch()) {
        ?>
        <p class="result">
          <strong>ID:</strong>
          <span><?= $row['id'] ?></span>
        </p>
        <p class="result">
          <strong>Product name:</strong>
          <span><?= $row['name'] ?></span>
        </p>
        <p class="result">
          <strong>Price:</strong>
          <span><?= $row['price'] ?></span>
        </p>
        <p class="result">
          <strong>Image:</strong>
          <span><?= $row['image'] ?></span>
        </p>
        <?php
          }
        }
        ?>
      </div>

      <div class="right">
        <p>
          <a class="button" href="./searchForm.php">prev</a>
        </p>
      </div>
    </div>
  </body>
</html>
