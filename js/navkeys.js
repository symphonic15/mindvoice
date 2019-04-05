var categoriesIndex = 0;
var wordsIndex = 0;
var categorySelected = 0;
var category = null;
var word = null;

function showCategoriesSlides() {
  if(categorySelected == 0)
  {
    var i;
    var categories = document.getElementsByClassName("categories");
    categories[categoriesIndex].classList.remove("active-category");
    categoriesIndex++;
    if (categoriesIndex + 1 > categories.length) {categoriesIndex = 0}
    categories[categoriesIndex].className += " active-category";
    categoriesTimer = setTimeout(showCategoriesSlides, 1500);
  }
}

function showWordsSlides() {
  if(categorySelected == 1)
  {
    var i;
    var words = document.getElementsByClassName("words option "+ category);
    words[wordsIndex].classList.remove("active-word");
    wordsIndex++;
    if (wordsIndex + 1 > words.length) {wordsIndex = 0}
    words[wordsIndex].className += " active-word";
    wordsTimer = setTimeout(showWordsSlides, 1500);
  }
}

function nextOption() {
  if(categorySelected == 0)
  {
    clearTimeout(categoriesTimer);
    var i;
    var categories = document.getElementsByClassName("categories");
    categories[categoriesIndex].classList.remove("active-category");
    categoriesIndex++;
    if (categoriesIndex + 1 > categories.length) {categoriesIndex = 0}
    categories[categoriesIndex].className += " active-category";
    categoriesTimer = setTimeout(showCategoriesSlides, 1500);
  }
  if(categorySelected == 1)
  {
    clearTimeout(wordsTimer);
    var i;
    var words = document.getElementsByClassName("words option "+ category);
    words[wordsIndex].classList.remove("active-word");
    wordsIndex++;
    if (wordsIndex + 1 > words.length) {wordsIndex = 0}
    words[wordsIndex].className += " active-word";
    wordsTimer = setTimeout(showWordsSlides, 1500);
  }
}

function select()
{
  showCategoriesSlides();

  document.getElementById("select").onclick = function()
  {
    if(categorySelected == 0)
    {
      clearTimeout(categoriesTimer);
      categorySelected = 1;
      category = document.getElementsByClassName("active-category")[0].getAttribute("name");
      showWordsSlides();
    }
    else
    {
      clearTimeout(wordsTimer);
      categorySelected = 0;
      var currentValue;
      word = document.getElementsByClassName("active-word")[0].getAttribute("name");
      currentValue = inputElement.val();
      currentValue = currentValue.slice(0, cursorPosition) +  word + ' ' + currentValue.slice(cursorPosition);
      inputElement.val(currentValue);
      cursorPosition = cursorPosition + word.length + 1;
      setCursorPosition(cursorPosition);
      wordsIndex = 0;
      document.getElementsByClassName("active-word")[0].classList.remove("active-word");
    }
    setTimeout(select, 100);
  };
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

function speak(){
  var text = document.getElementsByClassName("smart-tv-keyboard-input")[0].value;
  responsiveVoice.speak(text, getCookie('gender'));
  text=encodeURIComponent(text);
  var url="http://";
}
