<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/smart-tv-keyboard.min.css">
  <link rel="stylesheet" href="css/keyboard.css">
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/responsivevoice.js"></script>
  <script src="layouts/spanish.js"></script>
  <script src="js/smartTvKeyboard.js"></script>
  <title>MindVoice 1.0</title>
</head>
<body>

  <!-- DataBase connection -->
  <?php
    $servername = "localhost"; //SQL Server
    $username = "root"; //Username
    $password = ""; //Password
    $dbname = "mindvoice"; //DataBase name

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Starting connection
    if (!$conn) {
       die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }
  ?>
  <audio src="" hidden class=speech></audio>

  <div class="panels">

    <div class="top-panel">
      <textarea type="text" id="textarea" name="text" class="textarea" onkeypress="keyAction(event)"></textarea>
    </div>

    <div class="bottom-panel">
      <input type="button" id="select" style="display:none">

      <!-- Getting categories -->
      <?php
        $sql = "SELECT * FROM categories";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result))
        {
          echo'
            <div name="'.$row["id"].'" class="categories option">
              <div class="category-text">
                <h1>'.strtoupper($row["name"]).'</h1>
              </div>
            </div>
          ';
        }
      ?>


      <!-- Getting words -->
      <?php
        $sql = "SELECT * FROM words";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result))
        {
          echo'
            <div name="'.$row["name"].'" class="words option '.$row["category_id"].'">
              <img src="images/'.$row["image"].'" style="height:100%; max-width: 100%">
            </div>
          ';
        }
      ?>

    </div>
  </div>

  <script src="js/keyboard.js"></script>
  <script>
  function keyAction(event)
  {
    var keycode = event.which || event.keyCode;
    switch (keycode) {
      case 47:
        $('#select').click();
        event.preventDefault();
        return false;
        break;
      case 45:
        speak();
        event.preventDefault();
        return false;
        break;
      case 27:
        window.history.back();
        event.preventDefault();
        return false;
        break;
    }
  }

    $('document').ready(function(){

      $('.textarea').focus();
      $('.textarea').select();

      select();
    });
  </script>

</body>
</html>﻿
