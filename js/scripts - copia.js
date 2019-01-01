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
    var categories_dots = document.getElementsByClassName("categories_dots");
    for (i = 0; i < categories.length; i++) {
       categories[i].style.display = "none";
       categories[i].className = categories[i].className.replace(" active-category", "");
    }
    categoriesIndex++;
    if (categoriesIndex > categories.length) {categoriesIndex = 1}
    categories[categoriesIndex-1].className += " active-category";
    setTimeout(showCategoriesSlides, 1500);
  }
}

function showWordsSlides() {
  if(categorySelected == 1)
  {
    var i;
    var words = document.getElementsByClassName("words option "+ category);
    var words_dots = document.getElementsByClassName("words_dots");
    for (i = 0; i < words.length; i++) {
       words[i].style.display = "none";
       words[i].className = words[i].className.replace(" active-word", "");
    }
    wordsIndex++;
    if (wordsIndex > words.length) {wordsIndex = 1}
    words[wordsIndex-1].className += " active-word";
    setTimeout(showWordsSlides, 1500);
  }
  else
  {
    var i;
    var words = document.getElementsByClassName("words option "+ category);
    var words_dots = document.getElementsByClassName("words_dots");
    for (i = 0; i < words.length; i++) {
       words[i].style.display = "none";
       words[i].className = words[i].className.replace(" active-word", "");
    }
    wordsIndex++;
    if (wordsIndex > words.length) {wordsIndex = 1}
  }
}

function select(){
  $('.smart-tv-keyboard-button-color-toggle').one('click', function() {
    if(categorySelected == 0)
    {
      category = document.getElementsByClassName('active-category')[0].getAttribute("name");
      console.log(category);
      categorySelected = 1;
      showWordsSlides();
      $('.smart-tv-keyboard-button-color-toggle').click(false);
    }
    else
    {
      var currentValue;
      var input_text = document.getElementsByClassName('smart-tv-keyboard-input')[0].value;
      word = document.getElementsByClassName('active-word')[0].getAttribute("name");
      cursorPosition++;
      currentValue = inputElement.val();
      currentValue = currentValue.slice(0, cursorPosition) + word + currentValue.slice(cursorPosition);
      inputElement.val(currentValue);
      setCursorPosition(cursorPosition);
      categorySelected = 0;
      showCategoriesSlides();
    }
        setTimeout(select, 1000);
    });
}

function speak(){
  var text = $(".smart-tv-keyboard-input").val();
  responsiveVoice.speak(text,"Spanish Latin American Male");
  text=encodeURIComponent(text);
  var url="http://";
}

$('document').ready(function(){
  $('.text-input').smartTvKeyboard({
    layouts: {en: smartTvKeyboardLayouts.en},
    useNavKeys: true,
    useDirectEdit: false
  });
  $('.text-input').focus();
  $('.text-input').select();

  showCategoriesSlides();
  select();
});
