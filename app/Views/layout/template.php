<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css">


    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="<?= base_url(); ?>css/ui-dashboard.css">
    <link href="<?= base_url(); ?>css/style.css" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>css/style.css">

    <style>
        .explosion {
            position: absolute;
            width: 600px;
            height: 600px;
            pointer-events: none;
        }

        .explosion .particle {
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            animation: pop 1s reverse forwards;
        }

        @keyframes pop {
            from {
                opacity: 0;
            }

            to {
                top: 50%;
                left: 50%;
                opacity: 1;
            }
        }

        html,
        body {
            height: 100%;
            background: #000;
        }

        h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -100%);
            color: #ccc;
            font-family: "Helvetica", "Arial", sans-serif;
            user-select: none;
            -webkit-touch-callout: none;
            /* iOS Safari */
            -webkit-user-select: none;
            /* Chrome/Safari/Opera */
            -moz-user-select: none;
            /* Firefox */
            cursor: default;
        }
    </style>

</head>

<body>

    <div id="app">
        <div id="hero">
            <?= $this->renderSection('content'); ?>
        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>lib/chart/chart.min.js"></script>
    <script src="<?= base_url(); ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url(); ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url(); ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url(); ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?= base_url(); ?>js/soft-ui-dashboard.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles-confetti@2.12.0/tsparticles.confetti.bundle.min.js"></script>



    <!-- Template Javascript -->
    <script src="<?= base_url(); ?>js/main.js"></script>
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

    <?php
    if (isset($_SESSION['titid'])) {
    ?>
        <script>
            Swal.fire(
                'Hahahaha',
                'Iyoai :)',
                'success'
            )
        </script>
    <?php } ?>


</body>

</html>