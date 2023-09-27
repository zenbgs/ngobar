$('.btn-view').on('click', function() {
  const first_name = $(this).data('first_name');
  const last_name = $(this).data('last_name');
  const email = $(this).data('email')
  const country = $(this).data('country')
  const nameModal = $('.viewModal');
  nameModal.find('.first_name').val(first_name);
  nameModal.find('.last_name').val(last_name);
  nameModal.find('.email').val(email);
  nameModal.find('.country').val(country);
  $('.viewModal').modal('show');
});

$('.btn-edit').on('click', function() {
  const id = $(this).data('id');
  const first_name = $(this).data('first_name');
  const last_name = $(this).data('last_name');
  const email = $(this).data('email')
  const country = $(this).data('country')
  const nameModal = $('.editModal');
  nameModal.find('.id').val(id);
  nameModal.find('.first_name').val(first_name);
  nameModal.find('.last_name').val(last_name);
  nameModal.find('.email').val(email);
  nameModal.find('.country').val(country);
  $('.editModal').modal('show');
});

function delete_dynamic(id,route,method) {
  Swal.fire({
    title: "Are you sure want to delete?",
    text: "Data cant be restore!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: route + id,
        type: method,
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