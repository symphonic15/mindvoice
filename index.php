<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MindVoice 1.0</title>
</head>
<body>

<div style="text-align: center">
  <img src="images/index-option.png" style="max-width: 100%">
</div>

<script>
  function keyAction(event)
  {
    var keycode = event.which || event.keyCode;
    switch (keycode) {
      case 37:
        window.location.replace("keyboard.php");
        event.preventDefault();
        return false;
        break;
      case 39:
        window.location.replace("navkeys.php");
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
  document.addEventListener("keydown", keyAction, false);
</script>

</body>
</html>﻿
