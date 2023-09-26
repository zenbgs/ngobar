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

function ade(id) {
  Swal.fire({
    title: "Apakah kamu yakin?",
    text: "Data yang telah dihapus tidak bisa dikembalikan!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "/table/delete/" + id,
        type: "get", //send it through get method
        success: function (response) {
          Swal.fire({
            icon: "success",
            // title: 'menutup jendela...',
            html: "menutup jendela di <b></b> milliseconds.",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: () => {
              const duration = 15 * 1000,
                animationEnd = Date.now() + duration,
                defaults = {
                  startVelocity: 30,
                  spread: 360,
                  ticks: 60,
                  zIndex: 0,
                };

              function randomInRange(min, max) {
                return Math.random() * (max - min) + min;
              }

              const interval = setInterval(function () {
                const timeLeft = animationEnd - Date.now();

                if (timeLeft <= 0) {
                  return clearInterval(interval);
                }

                const particleCount = 50 * (timeLeft / duration);

                // since particles fall down, start a bit higher than random
                confetti(
                  Object.assign({}, defaults, {
                    particleCount,
                    origin: {
                      x: randomInRange(0.1, 0.3),
                      y: Math.random() - 0.2,
                    },
                  })
                );
                confetti(
                  Object.assign({}, defaults, {
                    particleCount,
                    origin: {
                      x: randomInRange(0.7, 0.9),
                      y: Math.random() - 0.2,
                    },
                  })
                );
              }, 250);
              Swal.showLoading();
              const b = Swal.getHtmlContainer().querySelector("b");
              timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft();
              }, 100);
            },
            willClose: () => {
              clearInterval(timerInterval);
            },
          }).then((result) => {
            window.location.reload();
          });
        },
        error: function (xhr) {
          //Do Something to handle error
        },
      });
    }
  });
}

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
