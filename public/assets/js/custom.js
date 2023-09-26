$(function () {
  function isCharLetter(char) {
    return char.toLowerCase() !== char.toUpperCase();
  }
  var current = location.pathname;
  $(".navbar-nav .nav-item .nav-link").each(function (index, elem) {
    var $this = $(this);

    if (current == "/" || current == "") {
      if (index == 0) {
        $this.addClass("active");
      }
    }
    if ($this.attr("href").indexOf(current) !== -1 && current != "/") {
      $this.addClass("active");
    }
  });
});
