<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MindVoice</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>

<!-- Header -->
  <header>
    <div class="logo">
      <img src="images/logo.png">
    </div>
    <div class="guide-tip">
      <p>HAGA CLICK EN LA OPCIÓN QUE DESEE O PRESIONE LA LETRA CORRESPONDIENTE EN EL TECLADO</p>
    </div>
  </header>

  <div class="index-panel">
    <!-- Voice gender -->
    <div class="options">
      <div id="male" class="option-left gender">
        <div class="gender-content" onclick="setGender(0)" style="text-align: right;">
          <h2>HOMBRE</h2>
          <img src="images/q.png" style="max-width: 100%; height: 60px; margin-left: 15px;">
        </div>
      </div><!--
   --><div id="female" onclick="setGender(1)" class="option-right gender">
        <div class="gender-content" style="text-align: left;">
          <img src="images/e.png" style="max-width: 100%; height: 60px; margin-right: 15px;">
          <h2>MUJER</h2>
        </div>
      </div>
    </div>

    <hr style="border: 0; height: 1px; background-color: #d5d5d5; width: 98%;">

    <!-- Interface -->
    <div class="options">
      <a href="keyboard.php">
        <div class="option-left">
          <h1>TECLADO NORMAL</h1>
          <img src="images/keyboard.png" style="max-width: 100%">
          <hr class="option-separator">
          <img src="images/a.png" style="max-width: 100%; margin: 5px;">
        </div>
      </a>
      <a href="navkeys.php">
        <div class="option-right">
          <h1>TECLADO ADAPTADO</h1>
          <img src="images/navkeys.png" style="max-width: 100%;">
          <hr class="option-separator">
          <img src="images/d.png" style="max-width: 100%; margin: 5px;">
        </div>
      </a>
    </div>
  </div>
  <!-- Block page in mobile resolutions -->
  <div class="low-res" style="display: none">
    <h1>
      ESTA APLICACIÓN NO ES COMPATIBLE CON DISPOSITIVOS MOVILES
    </h1>
  </div>

  <script>
    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays*24*60*60*1000));
      var expires = "expires="+ d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    function setGender(gender) {
      if(gender == 0)
      {
        setCookie('gender', 'Spanish Latin American Male', 360);
        document.getElementById("female").classList.remove("active");
        document.getElementById("male").className += " active";
      }
      else if(gender == 1)
      {
        setCookie('gender', 'Spanish Latin American Female', 360);
        document.getElementById("male").classList.remove("active");
        document.getElementById("female").className += " active";
      }
    }

    function keyAction(event) {
      var keycode = event.which || event.keyCode;
      switch (keycode) {
        case 65:
          window.location.href = "keyboard.php";
          event.preventDefault();
          return false;
          break;
        case 68:
          window.location.href = "navkeys.php";
          event.preventDefault();
          return false;
          break;
        case 81:
          event.preventDefault();
          setGender(0);
          break;
        case 69:
          event.preventDefault();
          setGender(1);
          break;
        case 27:
          window.history.back();
          event.preventDefault();
          return false;
          break;
      }
    }
    document.addEventListener("keydown", keyAction, false);

    window.onload = function() {
      if(getCookie('gender') == 'Spanish Latin American Male') {
        document.getElementById("male").className += " active";
      }
      else if(getCookie('gender') == 'Spanish Latin American Female') {
        document.getElementById("female").className += " active";
      }
    }
  </script>

</body>
</html>﻿
