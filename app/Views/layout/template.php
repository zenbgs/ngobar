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
    <script src="<?= base_url(); ?>assets/js/custom.js"></script>
    <?= $this->include('layout/triggertoast'); ?>
    <script>
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
                [{
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
    </script>
    <script>
        var win = navigator.platform.indexOf("Win") > -1;
        if (win && document.querySelector("#sidenav-scrollbar")) {
            var options = {
                damping: "0.5",
            };
            Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url(); ?>assets/js/soft-ui-dashboard.js?v=1.0.8"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles-confetti@2.12.0/tsparticles.confetti.bundle.min.js"></script>
    <script>
        function ade(id) {
            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Data yang telah dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/table/delete/" + id,
                        type: "get", //send it through get method
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                // title: 'menutup jendela...',
                                html: 'menutup jendela di <b></b> milliseconds.',
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
                                            zIndex: 0
                                        };

                                    function randomInRange(min, max) {
                                        return Math.random() * (max - min) + min;
                                    }

                                    const interval = setInterval(function() {
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
                                                    y: Math.random() - 0.2
                                                },
                                            })
                                        );
                                        confetti(
                                            Object.assign({}, defaults, {
                                                particleCount,
                                                origin: {
                                                    x: randomInRange(0.7, 0.9),
                                                    y: Math.random() - 0.2
                                                },
                                            })
                                        );
                                    }, 250);
                                    Swal.showLoading()
                                    const b = Swal.getHtmlContainer().querySelector('b')
                                    timerInterval = setInterval(() => {
                                        b.textContent = Swal.getTimerLeft()
                                    }, 100)
                                },
                                willClose: () => {
                                    clearInterval(timerInterval)
                                }
                            }).then((result) => {
                                window.location.reload();
                            })
                        },
                        error: function(xhr) {
                            //Do Something to handle error
                        }
                    });
                }


            })
        }
    </script>

</body>

</html>