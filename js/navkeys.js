var categoriesIndex = 0;
var wordsIndex = 0;
var categorySelected = 0;
var category = null;
var word = null;

function showCategoriesSlides() {
  if(categorySelected == 0)
  {
    var i;
    var categories = $('.categories');
    $.each(categories, function(){
      $(this).removeClass("active-category");
    });
    categoriesIndex++;
    if (categoriesIndex > categories.length) {categoriesIndex = 1}
    $(categories[categoriesIndex-1]).addClass("active-category");
    categoriesTimer = setTimeout(showCategoriesSlides, 1500);
  }
}

function showWordsSlides() {
  if(categorySelected == 1)
  {
    var i;
    var words = document.getElementsByClassName("words option "+ category);
    $.each(words, function(){
      $(this).removeClass("active-word");
    });
    wordsIndex++;
    if (wordsIndex > words.length) {wordsIndex = 1}
    words[wordsIndex-1].className += " active-word";
    wordsTimer = setTimeout(showWordsSlides, 1500);
  }
}

function select()
{
  showCategoriesSlides();

  $('#select').one('click', function() {
    if(categorySelected == 0)
    {
      clearTimeout(categoriesTimer);
      categorySelected = 1;
      category = $('.active-category').first().attr('name');
      showWordsSlides();
    }
    else
    {
      clearTimeout(wordsTimer);
      categorySelected = 0;
      var currentValue;
      word = $('.active-word').first().attr('name');
      currentValue = inputElement.val();
      currentValue = currentValue.slice(0, cursorPosition) +  word + ' ' + currentValue.slice(cursorPosition);
      inputElement.val(currentValue);
      cursorPosition = cursorPosition + word.length + 1;
      setCursorPosition(cursorPosition);
      $('.active-word').first().removeClass("active-word");
    }
    setTimeout(select, 100);
  });
}

function speak(){
  var text = $(".smart-tv-keyboard-input").val();
  responsiveVoice.speak(text,"Spanish Latin American Male");
  text=encodeURIComponent(text);
  var url="http://";
}
