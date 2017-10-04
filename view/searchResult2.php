<!DOCTYPE html>

<?php
require('src/php/dbConnector.php');

$db = new dbConnector();

if(isset($_GET['name'])) {
  $exec = $db -> select2($_GET['name']);
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>課題５ 検索2結果ページ</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/layout.css">
    <script src="https://unpkg.com/vue"></script>
  </head>

  <body>
    <h3>検索結果2</h3>

    <div id="insert_form_box">
      <div class="contents">
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
        ?>

        <table class="product_list">
          <thead>
            <tr>
              <th>商品名</th><th>単価</th><th>画像</th>
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
        <?php
        }
        ?>
      </div>

      <div class="right">
        <p>
          <a class="button" href="./searchForm2.php">戻る</a>
        </p>
      </div>
    </div>
  </body>
</html>
