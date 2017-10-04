<!DOCTYPE html>

<?php
if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['price']) && isset($_GET['image'])) {
  $id = $_GET['id'];
  $name = $_GET['name'];
  $price = $_GET['price'];
  $image = $_GET['image'];
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Update Page 2</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/layout.css">
    <script src="https://unpkg.com/vue"></script>
  </head>

  <body>
    <h3>Update 2</h3>

    <div id="insert_form_box">
      <form method="POST" action="../controller/update.php" accept-charset="UTF-8">
        <div class="form_group">
          <label for="id" class="form_control_label">ID</label>
          <input class="form_control form_control_lg" required placeholder="enter your id number" name="id" type="text" value="<?= $id ?>">
        </div>

        <div class="form_group">
          <label for="Product name" class="form_control_label">Product name</label>
          <input class="form_control form_control_lg" required placeholder="enter your product name" name="name" type="text" value="<?= $name ?>">
        </div>

        <div class="form_group">
          <label for="単価" class="form_control_label">Price</label>
          <input class="form_control form_control_lg" required placeholder="enter your product price" name="price" type="text" value="<?= $price ?>">
        </div>

        <div class="form_group">
          <label for="Image" class="form_control_label">Image</label>
          <input class="form_control form_control_lg" required placeholder="enter your product image" name="image" type="text" value="<?= $image ?>">
        </div>

        <div class="left">
          <button class="btn btn_danger btn_block btn_lg mt_4">Let's update!</button>
        </div>

        <div class="right">
          <p>
            <a class="button" href="./view2.php">prev</a>
            <span class="button white">
              <?php
              if(isset($_GET['message'])) {
                echo $_GET['message'];
              } else {
                echo 'please update.';
              }
              ?>
            </span>
          </p>
        </div>
      </form>
    </div>

    <script src="../js/senbatu.js"></script>
  </body>
</html>
