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
    <title>Search Page Ver3 (search in page)</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/layout.css">
    <script src="https://unpkg.com/vue"></script>
  </head>

  <body>
    <h3>Search 3</h3>

    <div id="insert_form_box">
      <form method="POST" action="../controller/search.php" accept-charset="UTF-8">
        <div class="toolbar">
          <span class="search_input">
            <label for="id" class="form_control_label">ID</label>
            <input type="text" name="id" placeholder="enter your product id">
            <input type="hidden" name="specifyNum" value="1">
          </span>
        </div>

        <div class="left">
          <button class="btn btn_danger btn_block btn_lg mt_4">Let's search!</button>
        </div>

        <div class="right">
          <p>
            <span class="button white">
              <?php
              if(isset($_GET['message']) && !empty($_GET['message'])) {
                echo $_GET['message'];
              } else {
                echo 'please enter ID.';
              }
              ?>
            </span>
          </p>
        </div>
      </form>
    </div>

    <div id="insert_form_box">
      <?php
      if(isset($_GET['id'])) {
      ?>
      <div class="contents">
        <table class="product_list">
          <thead>
            <tr>
              <th>Product name</th><th>Price</th><th>Image</th>
            </tr>
          </thead>

          <tbody>
            <?php
            while ($row = $exec -> fetch()) {
              echo '<tr><td class="clearflx">'.$row['name'].'</td><td class="clearflx">'.$row['price'].'</td><td class="clearflx">'.$row['image'].'</td></tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
      <?php
      }
      ?>

      <div class="right">
        <p>
          <a class="button" href="../index.html">prev</a>
        </p>
      </div>
    </div>
  </body>
</html>
