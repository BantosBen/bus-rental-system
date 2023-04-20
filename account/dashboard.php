<?php require_once 'includes/controllers/agent_dashboard.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Safe Routes - Dashboard</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <?php include 'stylesheets.php'; ?>
</head>

<body>

    <?php include 'header.php' ?>

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
                            $buttonReservation = ($bus['availability'] == 1) ? '<a href="make-reservation.php?id=' . $bus['bus_id'] . '&fee=' . $bus['fee'] . '&bus=' . $bus['bus_type'] . ' ' . $bus['manufacturer'] . '" type="button" class="btn btn-block btn-outline-primary btn-sm" id="btn-' . $bus['bus_id'] . '">Book Now</a>' : '';
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
                                            <h5 class="card-title"><strong>$' . $bus['fee'] . '/Day</strong></h5>
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
    ' . $buttonReservation . '
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
                            <?php if ($reservation != null) {
                                $bus = $reservation['bus']; ?>
                                <div class="row">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5><strong>Bus Details</strong></h5>
                                            <hr class="dropdown-divider" />
                                            <div class="row mt-3">
                                                <div class="col-6">
                                                    <p class="card-text">
                                                        <i class="bi bi-bus"></i>
                                                        <span><b>Manufacturer:</b></span>
                                                        <?php echo $bus['manufacturer']; ?>
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="card-text">
                                                        <i class="bi bi-cog"></i>
                                                        <span><b>Model:</b></span>
                                                        <?php echo $bus['model']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row mt-sm-1">
                                                <div class="col-6">
                                                    <p class="card-text">
                                                        <i class="bi bi-car"></i>
                                                        <span><b>Plate Number:</b></span>
                                                        <?php echo $bus['licenseplate_number']; ?>
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="card-text">
                                                        <i class="bi bi-chair"></i>
                                                        <span><b>Capacity:</b></span>
                                                        <?php echo $bus['seating_capacity']; ?>
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
                                                        <?php echo $reservation['departure_date'] . ' | ' . $reservation['departure_time']; ?>
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <p>
                                                        <span><b>Arrival:</b></span>
                                                        <br />
                                                        <?php echo $reservation['arrival_date'] . ' | ' . $reservation['arrival_time']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p>
                                                    <span><b>Route:</b></span>
                                                    <?php echo $reservation['departure_location'] . ' - ' . $reservation['arrival_location']; ?>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <p>
                                                    <span><b>Amount:</b></span>
                                                    <?php echo $reservation['payment_total']; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#ratingModal"><i
                                                        class="bi bi-check-circle"></i>Complete</button>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-danger"><i
                                                        class="bi bi-exclamation-octagon"></i> Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="row d-flex m-4">
                                    <strong>
                                        <h5>No Reservation</h5>
                                    </strong>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- End Recent Activity -->
                </div>
                <!-- End Right side columns -->
            </div>
        </section>
        <div class="modal fade" id="ratingModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Rate our services</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 mt-lg-3" id="rating-form">
                            <input type="hidden" name="reservation_id"
                                value="<?php echo $reservation['reservation_id']; ?>">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingBusName"
                                        placeholder="Write a comment (Optional)">
                                    <label for="floatingBusName">Comment Review</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="5" id="floatingBusName"
                                        placeholder="Enter your ratings max 10">
                                    <label for="floatingBusName">Rate out of 10</label>
                                </div>
                            </div>
                            <div class="col-md-6"><button type="submit" class="btn btn-primary">Submit Reviews</button>
                            </div>
                        </form>
                        <!-- End Multi Columns Form -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Complete Reservation</button>
                    </div>
                </div>
            </div>
        </div><!-- End Basic Modal-->

        <div class="modal" id="loadingModal" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-md-8 d-flex justify-content-center">
                                <div class="spinner-border text-primary" role="status">
                                </div>
                                <p class="mt-2 mx-2">Placing your Reservation. Please wait...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End #main -->
    <?php include 'footer.php'; ?>
    <script>
        // Show the loading modal
        function showLoadingModal() {
            $('#loadingModal').modal('show');
        }

        // Hide the loading modal
        function hideLoadingModal() {
            $('#loadingModal').modal('hide');
        }

        function submitRating() {
            showLoadingModal();

            $.ajax({
                type: "POST",
                url: "includes/controllers/agent_dashboard.php",
                data: $('#rating-form').serialize(), // serialize the form data and send it to the PHP script
                dataType: "json",
                success: function (response) {
                    hideLoadingModal();
                    console.log(response);
                    if (!response.error) {
                        toastr.success(
                            response.message
                        );
                        setTimeout(function () {
                            window.location.href = 'dashboard.php';
                        }, 1500);
                    } else {
                        toastr.error(
                            response.message
                        );
                    }
                },
                error: function (xhr, textStatus, errorThrown) {
                    hideLoadingModal();
                    console.error('Error submitting data:', errorThrown);
                    console.log('Response text:', xhr.responseText);
                    toastr.error('Error! Failed to scan product');
                }
            });

        }

        $(document).ready(function () {
            $('#rating-form').submit(function (event) { // assuming the form has id "my-form"
                event.preventDefault(); // prevent the form from submitting in the default way
                submitRating();
            });
        });
    </script>
</body>

</html>