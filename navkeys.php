<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/smart-tv-keyboard.min.css">
  <link rel="stylesheet" href="css/navkeys.css">
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

    <div class="left-panel">
      <textarea type="text" name="text" class="input text-input" id="keyboard-modal-textarea"></textarea>
    </div>

    <div class="right-panel">

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

<script src="js/navkeys.js"></script>

<script>
  $('document').ready(function(){
    $('.text-input').smartTvKeyboard({
      layouts: {es: smartTvKeyboardLayouts.es},
      useNavKeys: true,
      useDirectEdit: false,
      navKeys: {
				LEFT: 37,
				UP: 38,
				RIGHT: 39,
				DOWN: 40,
				ENTER: 12, // Select button
				WORD: 111, // Select category/word
				SPEAK: 109, // Speak
				EXIT: 27 // Close app
			}
    });

    $('.text-input').focus();
    $('.text-input').select();

    select();
  });
</script>

</body>
</html>﻿
