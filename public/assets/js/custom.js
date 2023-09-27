$(function () {
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

if (document.getElementById("editor")) {
  var quill = new Quill("#editor", {
    theme: "snow", // Specify theme in configuration
  });
}

if (document.getElementById("choices-multiple-remove-button")) {
  var element = document.getElementById("choices-multiple-remove-button");
  const example = new Choices(element, {
    removeItemButton: true,
  });

  example.setChoices(
    [
      {
        value: "One",
        label: "Label One",
        disabled: true,
      },
      {
        value: "Two",
        label: "Label Two",
        selected: true,
      },
      {
        value: "Three",
        label: "Label Three",
      },
    ],
    "value",
    "label",
    false
  );
}

if (document.querySelector(".datetimepicker")) {
  flatpickr(".datetimepicker", {
    allowInput: true,
  }); // flatpickr
}

$('.team').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: false,
  arrows: false,
  autoplay: true,
  autoplayspeed: 500,
});

Dropzone.autoDiscover = false;
var drop = document.getElementById("dropzone");
var myDropzone = new Dropzone(drop, {
  url: "/file/post",
  addRemoveLinks: true,
});

var win = navigator.platform.indexOf("Win") > -1;
if (win && document.querySelector("#sidenav-scrollbar")) {
  var options = {
    damping: "0.5",
  };
  Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
}
