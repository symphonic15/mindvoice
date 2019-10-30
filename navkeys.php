<html>
<head>
  <title>Mind Voice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/smart-tv-keyboard.min.css">
  <link rel="stylesheet" href="css/navkeys.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/responsivevoice.js"></script>
  <script src="layouts/spanish.js"></script>
  <script src="js/smartTvKeyboard.js"></script>
</head>
<body>

  <?php
    // Database connection
    $servername = "localhost"; //SQL Server
    $username = "root"; //Username
    $password = ""; //Password
    $dbname = "mindvoice"; //Database name

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
      <p>PRESIONE "H" PARA ABRIR LA GUÍA</p>
    </div>
  </header>

  <!-- Content structure -->
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
            <div name="'.$row["id"].'" class="categories option option-background">
              <img src="images/pictograms/'.$row["id"].'/category.png">
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
            <div name="'.utf8_encode($row["name"]).'" class="words option option-background '.$row["category_id"].'">
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
      <li><div class="guide-key">W</div> ARRIBA</li>
      <li><div class="guide-key">S</div> ABAJO</li>
      <li><div class="guide-key">A</div> IZQUIERDA</li>
      <li><div class="guide-key">D</div> DERECHA</li>
      <li><div class="guide-key">E</div> SELECCIONAR TECLA</li>
      <li><div class="guide-key">R</div> SIGUIENTE CATEGORIA/IMAGEN</li>
      <li><div class="guide-key">F</div> SELECCIONAR CATEGORÍA/IMAGEN</li>
      <li><div class="guide-key">Q</div> HABLAR</li>
      <li><div class="guide-key">H</div> ABRIR/CERRAR GUÍA</li>
    </ul>
    <p class="guide-warning">
      NOTA: SI NO ES CAPAZ DE OÍR LA VOZ, ASEGURESÉ DE HABER HABILITADO EL PERMISO DE REPRODUCCIÓN EN ESTA PÁGINA. PUEDE HACERLO PRESIONANDO EL ÍCONO SITUADO A LA IZQUIERDA DE LA DIRECCIÓN WEB, EN EL SECTOR SUPERIOR DEL NAVEGADOR.
    </p>
  </div>

  <!-- Block page in mobile resolutions -->
  <div class="low-res" style="display: none">
    <h1>
      ESTA APLICACIÓN NO ES COMPATIBLE CON DISPOSITIVOS MÓVILES
    </h1>
  </div>

  <!-- JS Logic -->
  <script src="js/navkeys.js"></script>
  <script>
    function showGuide(event) {
      var keycode = event.which || event.keyCode;
      if(keycode == 72) {
        if($('#guide').css('display') == 'none') {
          $('#guide').show();
        }
        else {
          $('#guide').hide();
        }
      }
    }

    document.addEventListener("keydown", showGuide, false);

    $('document').ready(function() {
      $('.text-input').smartTvKeyboard({
        layouts: {es: smartTvKeyboardLayouts.es},
        useNavKeys: true,
        useDirectEdit: false,
        navKeys: {
  				LEFT: 65,
  				UP: 87,
  				RIGHT: 68,
  				DOWN: 83,
  				ENTER: 69, // Select button
  				WORD: 70, // Select category/word
          NEXT: 82, // Next category/word
  				SPEAK: 81, // Speak
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
