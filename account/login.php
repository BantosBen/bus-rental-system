<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Safe Route - Login</title>
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
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="" />
                                    <span class="d-none d-lg-block">Safe Route</span>
                                </a>
                            </div>
                            <!-- End Logo -->

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">
                                            Login to Your Account
                                        </h5>
                                        <p class="text-center small">
                                            Enter your username & password to login
                                        </p>
                                    </div>

                                    <form class="row g-3 needs-validation" id="auth-form" novalidate>
                                        <input type="hidden" name="form-type" value="login">
                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">
                                                Email
                                            </label>
                                            <input type="email" name="email" class="form-control" id="yourEmail"
                                                required />
                                            <div class="invalid-feedback">
                                                Please enter your Email!
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">
                                                Password
                                            </label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" required />
                                            <div class="invalid-feedback">
                                                Please enter your password!
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">
                                                Login
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">
                                                Don't have account?
                                                <a href="register.html">Create an account</a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="credits">
                                <!-- Designed by <a href="https://bootstrapmade.com/">DevThrone</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="modal" id="loadingModal" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-md-8 d-flex justify-content-center">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <p class="mt-2 mx-2">Authenticating. Please wait...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
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
        $.ajax({
            type: "POST",
            url: "include/controllers/auth_controller.php",
            data: this.serialize(), // serialize the form data and send it to the PHP script
            dataType: "json",
            success: function(response) {
                hideLoadingModal();
                console.log(response);
                if (!response.error) {
                    toastr.success(
                        response.message
                    );
                    setTimeout(function() {
                        if (response.is_customer) {
                            window.location.href = 'dashboard.php';
                        } else {
                            window.location.href = 'admin/dashboard.php';
                        }
                    }, 500);
                } else {
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
    });
    </script>
</body>

</html>
