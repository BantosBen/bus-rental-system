<?php require_once 'includes/controllers/check-out_controller.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Safe Routes</title>
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
            <h1>Service Billing</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active">Service Billing
                    </li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row mt-md-3">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Services Offered</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3 sticky-top">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">
                                    <?php echo $reservation['bus_type'] . ' - ' . $reservation['manufacturer']; ?>
                                </h6>
                                <small class="text-muted">Bus for hire</small>
                            </div>
                            <span class="text-muted">$
                                <?php echo $reservation['fee']; ?>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$
                                <?php echo $reservation['fee']; ?>
                            </strong>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <form class="needs-validation" id="payment" novalidate="">
                        <h4 class="mb-3">Payment</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                    checked="" required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" disabled type="radio"
                                    class="custom-control-input" required>
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" disabled type="radio"
                                    class="custom-control-input" required>
                                <label class="custom-control-label" for="paypal">PayPal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" name="cc-name" placeholder=""
                                    required="">
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback"> Name on card is required </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" name="cc-number" placeholder=""
                                    required>
                                <div class="invalid-feedback"> Credit card number is required </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback"> Expiration date required </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-cvv">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback"> Security code required </div>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="amount" name="fee"
                            value="<?php echo $reservation['fee']; ?>" hidden placeholder="" required>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-block" type="submit">Pay Now $
                            <?php echo $reservation['fee']; ?>
                        </button>
                    </form>
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
                                <p class="mt-2 mx-2">Making payment transaction. Please wait...</p>
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

        $(document).ready(function () {
            $('#payment').submit(function (event) { // assuming the form has id "my-form"
                event.preventDefault(); // prevent the form from submitting in the default way
                placeReservation();
            });
        });

        function placeReservation() {
            showLoadingModal();

            $.ajax({
                type: "POST",
                url: "includes/controllers/check-out_controller.php",
                data: $('#payment').serialize(), // serialize the form data and send it to the PHP script
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
                        console.log("ERROR: " + response.message);
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
    </script>
</body>

</html>