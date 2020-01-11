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
      window.location.href = "keyboard.html";
      event.preventDefault();
      return false;
      break;
    case 68:
      window.location.href = "navkeys.html";
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
  if(getCookie('gender') == "") {
    setCookie('gender', 'Spanish Latin American Male', 360);
  }
  else {
    if(getCookie('gender') == 'Spanish Latin American Male') {
      document.getElementById("male").className += " active";
    }
    else if(getCookie('gender') == 'Spanish Latin American Female') {
      document.getElementById("female").className += " active";
    }
  }
}