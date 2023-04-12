<?php require_once 'includes/controllers/agent_dashboard.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Safe Routes - Dashboard</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <?php include 'stylesheets.php';?>
</head>

<body>

    <?php include 'header.php'?>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-heading">My Activities</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="orders.php">
                    <i class="bi bi-box-seam"></i>
                    <span>My Orders</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="profile.php">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="logout.php">
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
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
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
    $buttonStatus = ($bus['availability'] == 1) ? '' : 'disabled';
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
                            <a ' . $buttonStatus . ' href="make-reservation.php?id=' . $bus['bus_id'] . '&fee=' . $bus['fee'] . '&bus=' . $bus['bus_type'] . ' ' . $bus['manufacturer'] . '" type="button" class="btn btn-block btn-outline-primary btn-sm" id="btn-' . $bus['bus_id'] . '">
                                Book Now
                            </a>
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
    </main>
    <!-- End #main -->
    <?php include 'footer.php';?>
</body>

</html>