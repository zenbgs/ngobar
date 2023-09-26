<?php $session = \Config\Services::session();  ?>

<!-- notification toast  -->
<div class="position-fixed bottom-1 end-1 z-index-2">
  <div class="toast fade p-2 bg-gradient-success hide" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">
    <div class="toast-header border-0">
      <i class="ni ni-check-bold text-success me-2"></i>
      <span class="me-auto font-weight-bold">Notification</span>
      <small class="text-body">Just Now</small>
      <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close" aria-hidden="true"></i>
    </div>
    <hr class="horizontal dark m-0" />
    <div class="toast-body text-white">
      <?= $session->getFlashdata('success') ?>
    </div>
  </div>
  <div class="toast fade p-2 mt-2 bg-gradient-info hide" role="alert" aria-live="assertive" id="infoToast" aria-atomic="true">
    <div class="toast-header bg-transparent border-0">
      <i class="ni ni-bell-55 text-white me-2"></i>
      <span class="me-auto text-white font-weight-bold">Soft UI Dashboard</span>
      <small class="text-white">11 mins ago</small>
      <i class="fas fa-times text-md text-white ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close" aria-hidden="true"></i>
    </div>
    <hr class="horizontal light m-0" />
    <div class="toast-body text-white">
      Hello, world! This is a notification message.
    </div>
  </div>
  <div class="toast fade p-2 mt-2 bg-gradient-warning hide" role="alert" aria-live="assertive" id="warningToast" aria-atomic="true">
    <div class="toast-header border-0">
      <i class="ni ni-spaceship text-warning me-2"></i>
      <span class="me-auto font-weight-bold">Soft UI Dashboard</span>
      <small class="text-body">11 mins ago</small>
      <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close" aria-hidden="true"></i>
    </div>
    <hr class="horizontal dark m-0" />
    <div class="toast-body">
      Hello, world! This is a notification message.
    </div>
  </div>
  <div class="toast fade p-2 mt-2 bg-gradient-danger hide" role="alert" aria-live="assertive" id="dangerToast" aria-atomic="true">
    <div class="toast-header border-0">
      <i class="ni ni-notification-70 text-danger me-2"></i>
      <span class="me-auto text-gradient text-danger font-weight-bold">Notification</span>
      <small class="text-body">Just Now</small>
      <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close" aria-hidden="true"></i>
    </div>
    <hr class="horizontal dark m-0" />
    <div class="toast-body text-white">
      <?= $session->getFlashdata('danger') ?>
    </div>
  </div>
</div>

<!-- end notification toast -->