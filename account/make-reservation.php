<?php require_once 'includes/controllers/make-reservation_controller.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Safe Routes</title>
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
            <h1>Make Reservation</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active">Make Reservation
                    </li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center">
                    <div class="card my-3">
                        <div class="card-body">
                            <form class="row g-3 mt-lg-3" id="reservation-form">
                                <input type="hidden" name="bus_id" value="<?php echo $busID; ?>">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingBusName"
                                            placeholder="Bus Name" disabled value="<?php echo $busName; ?>">
                                        <label for="floatingBusName">Bus Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input name="fee" type="text" class="form-control" id="floatingBusFee"
                                            placeholder="Daily Charges" disabled value="<?php echo $busFee; ?>">
                                        <label for="floatingBusFee">Daily Charges ($)</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" id="floatingDeptDate" class="form-control datepicker"
                                            data-provide="datepicker" name="dept_date">
                                        <label for="floatingDeptDate">Departure Date</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" id="floatingDeptTime" class="form-control timepicker"
                                            data-provide="timepicker" name="dept_time">
                                        <label for="floatingDeptTime">Departure Time</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" id="floatingArrDate" class="form-control datepicker"
                                            data-provide="datepicker" name="arr_date">
                                        <label for="floatingArrDate">Arrival Date</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" id="floatingArrTime" class="form-control timepicker"
                                            data-provide="timepicker" name="arr_time">
                                        <label for="floatingArrTime">Arrival Time</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingDept"
                                            placeholder="Departure Location" name="dept_location">
                                        <label for="floatingDept">Departure Location</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input class="form-control" placeholder="Arrival Location" id="floatingArrival"
                                            name="arr_location">
                                        <label for="floatingArrival">Arrival Location</label>
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary">Make Reservation</button>
                                </div>
                            </form>
                            <!-- End Multi Columns Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

    <?php include 'footer.php';?>

    <script>
    // Show the loading modal
    function showLoadingModal() {
        $('#loadingModal').modal('show');
    }

    // Hide the loading modal
    function hideLoadingModal() {
        $('#loadingModal').modal('hide');
    }

    $(document).ready(function() {
        $('.timepicker').timepicker();
        $('.timepicker').timepicker({
            minuteStep: 1,
            showMeridian: false,
        });

        $('.datepicker').datepicker();
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });

        $('#reservation-form').submit(function(event) { // assuming the form has id "my-form"
            event.preventDefault(); // prevent the form from submitting in the default way
            placeReservation();
        });
    });

    function placeReservation() {
        showLoadingModal();

        $.ajax({
            type: "POST",
            url: "includes/controllers/make-reservation_controller.php",
            data: $('#reservation-form').serialize(), // serialize the form data and send it to the PHP script
            dataType: "json",
            success: function(response) {
                hideLoadingModal();
                console.log(response);
                if (!response.error) {
                    toastr.success(
                        response.message
                    );
                    setTimeout(function() {
                        window.location.href = 'dashboard.php';
                    }, 500);
                } else {
                    console.log("ERROR: " + response.message);
                    toastr.error(
                        response.message
                    );
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                hideLoadingModal();
                console.error('Error submitting data:', errorThrown);
                console.log('Response text:', xhr.responseText);
                toastr.error('Error! Failed to scan product');
            }
        });

    }
    </script>
</body>

</html>