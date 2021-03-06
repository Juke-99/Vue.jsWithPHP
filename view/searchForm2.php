<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Search Page Ver2 (product name LIKE)</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/layout.css">
    <script src="https://unpkg.com/vue"></script>
  </head>

  <body>
    <h3>Search 2</h3>

    <div id="insert_form_box">
      <form method="POST" action="../controller/search.php" accept-charset="UTF-8">
        <div class="toolbar">
          <span class="search_input">
            <label for="product name" class="form_control_label">product name</label>
            <input type="text" name="name" placeholder="enter your product name">
          </span>
        </div>

        <div class="left">
          <button class="btn btn_danger btn_block btn_lg mt_4">Let's search!</button>
        </div>

        <div class="right">
          <p>
            <a class="button" href="../index.html">prev</a>
            <span class="button white">
              <?php
              if(isset($_GET['message'])) {
                echo $_GET['message'];
              } else {
                echo 'please enter product name.';
              }
              ?>
            </span>
          </p>
        </div>
      </form>
    </div>
  </body>
</html>
