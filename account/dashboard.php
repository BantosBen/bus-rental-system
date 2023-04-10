<?php require_once 'includes/controllers/agent_dashboard.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Safe Routes</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Datepicker CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">


    <!-- Timepicker CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">



    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="" />
                <span class="d-none d-lg-block">Safe Routes</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword" />
                <button type="submit" title="Search">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle" href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                <!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" />
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            <?php echo $customerName; ?>
                        </span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $fullName; ?></h6>
                            <span>Customer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-heading">My Activities</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-box-seam"></i>
                    <span>My Orders</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-faq.html">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
            </li>
            <!-- End F.A.Q Page Nav -->
        </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row gy-4">
                        <?php
foreach ($buses as $bus) {
    echo '<div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card mb-3">
                                <div class="card-img">
                                    <img src="assets/img/service-1.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="card-title">' . $bus['bus_type'] . '</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="card-title"><strong>$1000/Day</strong></h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <p class="card-text">
                                                <i class="bi bi-bus"></i>
                                                <span><b>Manufacturer:</b></span>
                                                ' . $bus['manufacturer'] . '
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text">
                                                <i class="bi bi-cog"></i>
                                                <span><b>Model:</b></span>
                                                ' . $bus['model'] . '
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <p class="card-text">
                                                <i class="bi bi-calendar-alt"></i>
                                                <span><b>Year:</b></span>
                                                ' . $bus['year'] . '
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text">
                                                <i class="bi bi-chair"></i>
                                                <span><b>Capacity:</b></span>
                                                ' . $bus['seating_capacity'] . '
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <p class="card-text">
                                                <i class="bi bi-car"></i>
                                                <span><b>Plate Number:</b></span>
                                                ' . $bus['licenseplate_number'] . '
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text">';

    echo ($bus['availability'] == 1) ? '<i class="bi bi-circle-fill" style="color: green;"></i> Available' : '<i class="bi bi-circle-fill" style="color: red;"></i> Unavailable';
    echo '</p></div></div><div class="row mt-3">
                            <button type="button" class="btn btn-block btn-outline-primary btn-sm" id="btn-' . $bus['bus_id'] . '">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>';
}
?>

                    </div>
                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">
                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Current Reservation
                                <span>| Active</span>
                            </h5>
                            <div class="row" style="display: none;">
                                <div class="row">
                                    <div class="col-12">
                                        <h5><strong>Bus Details</strong></h5>
                                        <hr class="dropdown-divider" />
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <p class="card-text">
                                                    <i class="bi bi-bus"></i>
                                                    <span><b>Manufacturer:</b></span>
                                                    Mercedes Benz
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p class="card-text">
                                                    <i class="bi bi-cog"></i>
                                                    <span><b>Model:</b></span>
                                                    M0001
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-sm-1">
                                            <div class="col-6">
                                                <p class="card-text">
                                                    <i class="bi bi-car"></i>
                                                    <span><b>Plate Number:</b></span>
                                                    ABDC1234
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p class="card-text">
                                                    <i class="bi bi-chair"></i>
                                                    <span><b>Capacity:</b></span>
                                                    50
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-sm-1">
                                    <div class="col-12">
                                        <h5><strong>Reservation Details</strong></h5>
                                        <hr class="dropdown-divider" />
                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <p>
                                                    <span><b>Departure:</b></span>
                                                    2023-01-12 | 06:30:00
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p>
                                                    <span><b>Arrival:</b></span>
                                                    <br />
                                                    2023-01-12 | 06:30:00
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p>
                                                <span><b>Route:</b></span>
                                                New York - Atlanta
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p>
                                                <span><b>Amount:</b></span>
                                                125.00 USD
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex m-4">
                                <strong>
                                    <h5>No Reservation</h5>
                                </strong>
                            </div>
                        </div>
                    </div>
                    <!-- End Recent Activity -->
                </div>
                <!-- End Right side columns -->
            </div>
        </section>
        <?php
foreach ($buses as $bus) {
    echo '<div class="modal fade" id="modal-' . $bus['bus_id'] . '" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modal Dialog Scrollable</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="row g-3">
                <input type="hidden" name="bus_id" value="' . $bus['bus_id'] . '">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingBusName" placeholder="Bus Name" disabled value="' . $bus['bus_type'] . ' ' . $bus['manufacturer'] . '">
                    <label for="floatingBusName">Bus Name</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingBusFee" placeholder="Daily Charges" disabled value="' . $bus['fee'] . '">
                    <label for="floatingBusFee">Daily Charges</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                  <input type="text" id="floatingDeptDate" class="form-control datepicker" data-provide="datepicker">
                    <label for="floatingDeptDate">Departure Date</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" id="floatingDeptTime" class="form-control timepicker" data-provide="timepicker">
                    <label for="floatingDeptTime">Departure Time</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                  <input type="text" id="floatingArrDate" class="form-control datepicker" data-provide="datepicker">
                    <label for="floatingArrDate">Arrival Date</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" id="floatingArrTime" class="form-control timepicker" data-provide="timepicker">
                    <label for="floatingArrTime">Arrival Time</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingDept" placeholder="Departure Location">
                    <label for="floatingDept">Departure Location</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input class="form-control" placeholder="Arrival Location" id="floatingArrival">
                    <label for="floatingArrival">Arrival Location</label>
                  </div>
                </div>

                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary">Make Reservation</button>
                </div>
              </form>
                    </div>
                  </div>
                </div>
              </div>';
}
?>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright
            <strong><span>Safe Routes</span></strong>
            . All Rights Reserved
        </div>
        <div class="credits">
            Designed by
            <a href="https://bootstrapmade.com/">Safe Routes</a>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <!-- Timepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js">
    </script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
    $(document).ready(function() {
        $('.timepicker').timepicker();
        $('.timepicker').timepicker({
            minuteStep: 15
        });

        $('.datepicker').datepicker();
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });


        // loop through buttons and add click event listener to each button
        var buttons = document.querySelectorAll('button[id^="btn-"]');
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                // extract the unique identifier from the button id
                var id = this.id.split('-')[1];
                // get the corresponding modal and display it
                var modal = document.getElementById('modal-' + id);
                modal.style.display = 'block';
            });
        });
    });
    </script>
</body>

</html>