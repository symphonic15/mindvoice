<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <link rel="stylesheet" href="css/keyboard.css">
  <script src="js/responsivevoice.js"></script>
  <title>Mind Voice</title>
</head>
<body>

  <?php
    // Database connection
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

  <!-- Voice -->
  <audio src="" hidden class=speech></audio>

  <!-- Header -->
  <header>
    <div class="logo">
      <a href="http://unjex.com/" target="_blank">
        <img src="images/logo.png">
      </a>
    </div>
    <div class="guide-tip">
      <p>PRESIONE "F1" PARA ABRIR LA GUÍA</p>
    </div>
  </header>

  <!-- Content structure -->
  <div class="panels">
    <div class="top-panel">
      <textarea type="text" id="textarea" name="text" class="textarea"></textarea>
    </div>
    <div class="bottom-panel">
      <input type="button" id="select" style="display:none">
      <?php
        // Getting categories
        $sql = "SELECT * FROM categories";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result))
        {
          echo'
            <div name="'.$row["id"].'" class="categories option">
              <img src="images/pictograms/'.$row["id"].'/category.png">
              <div class="category-text">
                <h1>'.strtoupper($row["name"]).'</h1>
              </div>
            </div>
          ';
        }
      ?>
      <?php
        // Getting words
        $sql = "SELECT * FROM words";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result))
        {
          echo'
            <div name="'.utf8_encode($row["name"]).'" class="words option '.$row["category_id"].'">
              <img src="images/pictograms/'.$row["category_id"].'/'.$row["image"].'" style="height:100%; max-width: 100%">
            </div>
          ';
        }
      ?>
    </div>
  </div>

  <!-- Guide modal -->
  <div id="guide" class="guide" style="display: none">
    <h1 class="guide-title">GUÍA DE CONTROLES</h1>
    <ul class="guide-list">
      <li><div class="guide-key">F1</div> ABRIR/CERRAR GUÍA</li>
      <li><div class="guide-key">F2</div> SIGUIENTE CATEGORÍA/IMAGEN</li>
      <li><div class="guide-key">F3</div> SELECCIONAR CATEGORÍA/IMAGEN</li>
      <li><div class="guide-key">F4</div> HABLAR</li>
    </ul>
  </div>

  <!-- Block page in mobile resolutions -->
  <div class="low-res" style="display: none">
    <h1>
      ESTA APLICACIÓN NO ES COMPATIBLE CON DISPOSITIVOS MOVILES
    </h1>
  </div>

  <!-- JS Logic -->
  <script src="js/keyboard.js"></script>
  <script>
    function keyAction(event)
    {
      var keycode = event.keyCode;
      switch (keycode) {
        case 112:
          event.preventDefault();
          if(document.getElementById("guide").style.display == 'none')
          {
            document.getElementById("guide").style.display = 'block';
          }
          else
          {
            document.getElementById("guide").style.display = 'none';
          }
          return false;
          break;
        case 113:
          event.preventDefault();
          nextOption();
          return false;
          break;
        case 114:
          event.preventDefault();
          document.getElementById("select").click();
          return false;
          break;
        case 115:
          event.preventDefault();
          speak();
          return false;
          break;
        case 27:
          event.preventDefault();
          window.history.back();
          return false;
          break;
      }
    }

    document.addEventListener("keydown", keyAction, false);

    window.onload = function() {
      select();
      document.getElementById("textarea").select();
    }
  </script>

</body>
</html>﻿
