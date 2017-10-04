<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Regist Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/layout.css">
    <script src="https://unpkg.com/vue"></script>
  </head>

  <body>
    <h3>Regist</h3>

    <div id="insert_form_box">
      <form enctype="multipart/form-data" method="POST" action="../controller/insert.php" accept-charset="UTF-8">
        <div v-for="list in lists" class="form_group">
          <label :for="list.name" class="form_control_label">{{ list.text }}</label>
          <input class="form_control form_control_lg" required :placeholder="list.pleceholder" :name="list.name" type="text">
        </div>

        <div class="upload">
          <span>Select File</span>
          <input type="file" name="file" class="btn btn_danger btn_block btn_up">
        </div>

        <div class="left">
          <button class="btn btn_danger btn_block btn_lg mt_4">Let's insert!</button>
        </div>

        <div class="right">
          <p>
            <a class="button" href="../index.html">prev</a>
            <span class="button white">
              <?php
              if(isset($_GET['message'])) {
                echo $_GET['message'];
              } else {
                echo 'please regist.';
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
