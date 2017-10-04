<!DOCTYPE html>

<?php
require('src/php/dbConnector.php');

$db = new dbConnector();
$exec = $db -> index();
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>List Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/layout.css">
    <script src="https://unpkg.com/vue"></script>
  </head>

  <body>
    <h3>List</h3>

    <div id="insert_form_box">
      <form method="POST" action="../controller/update.php" accept-charset="UTF-8">
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
                  echo '<tr><td class="clearflx">'.$row['name'].'</td><td class="clearflx">'.$row['price'].'</td><td class="image"><img src="../img/'.$row['image'].'"></td></tr>';
                }
                ?>
            </tbody>
          </table>
        </div>

        <div class="right">
          <p>
            <a class="button" href="../index.html">prev</a>
          </p>
        </div>
      </form>
    </div>

    <script src="../js/senbatu.js"></script>
  </body>
</html>
