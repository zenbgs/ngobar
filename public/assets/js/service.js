$('.btn-view').on('click', function() {
  const first_name = $(this).data('first_name');
  const last_name = $(this).data('last_name');
  const email = $(this).data('email')
  const country = $(this).data('country')
  $('.first_name').val(first_name);
  $('.last_name').val(last_name);
  $('.email').val(email);
  $('.country').val(country);
  $('.viewModal').modal('show');
});