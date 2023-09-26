<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="" />
    <title><?= $title ?></title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url(); ?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url(); ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url(); ?>assets/css/soft-ui-dashboard.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">

    <?= $this->include('layout/sidebar'); ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container-fluid py-4">
            <?= $this->include('layout/navbar'); ?>
            <?= $this->renderSection('content'); ?>
            <?= $this->include('layout/footer') ?>
        </div>
    </main>
    <?= $this->include('layout/configurator'); ?>
    <?= $this->include('layout/toastmessage'); ?>

    <!--   Core JS Files   -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/core/popper.min.js?v=1.0"></script>
    <script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js?v=1.0"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/dragula.min.js?v=1.0"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/jkanban.js?v=1.0"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/tilt.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/quill.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/choices.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/flatpickr.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/dropzone.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom.js?v=1.0"></script>
    <script src="<?= base_url() ?>assets/js/service.js"></script>
    <?= $this->include('layout/triggertoast'); ?>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url(); ?>assets/js/soft-ui-dashboard.js?v=1.0.8"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles-confetti@2.12.0/tsparticles.confetti.bundle.min.js"></script>

</body>

</html>