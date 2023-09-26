<?php $session = \Config\Services::session();  ?>

<?php if($session->getFlashdata('success')){ ?>

<script>
  new bootstrap.Toast(document.getElementById('successToast')).show()
</script>

<?php } ?>

<?php if($session->getFlashdata('danger')){ ?>

<script>
   new bootstrap.Toast(document.getElementById('dangerToast')).show();
</script>

<?php } ?>