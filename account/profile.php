<?php require_once 'includes/controllers/profile_controller.php';?>

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
                <a class="nav-link collapsed" href="dashboard.php">
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
                <a class="nav-link" href="profile.php">
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
            <h1>My Account Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" />
                            <h2><?php echo $customerData['first_name'] . " " . $customerData['last_name']; ?></h2>
                            <h3>Customer</h3>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">
                                        Edit Profile
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">
                                        Change Password
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
                                    <!-- Profile Edit Form -->
                                    <form class="row g-3 needs-validation" id="auth-form" novalidate>
                                        <div class="col-md-6">
                                            <label for="first-name" class="form-label">
                                                First Name
                                            </label>
                                            <input name="first_name" placeholder="John" type="text" class="form-control"
                                                id="first-name" value="<?php echo $customerData['first_name']; ?>" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="second-name" class="form-label">
                                                Second Name
                                            </label>
                                            <input name="second_name" placeholder="Doe" type="text" class="form-control"
                                                id="second-name" value="<?php echo $customerData['last_name']; ?>" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">
                                                Email
                                            </label>
                                            <input name="email" placeholder="abc@gmail.com" type="email"
                                                class="form-control" id="inputEmail5"
                                                value="<?php echo $customerData['email_address']; ?>" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword5" class="form-label">
                                                Phone
                                            </label>
                                            <input name="phone" placeholder="+1 3234 55467 98" type="number"
                                                class="form-control" id="inputPassword5"
                                                value="<?php echo $customerData['phone_number']; ?>" />
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress5" class="form-label">
                                                Address
                                            </label>
                                            <input name="address" type="text" class="form-control" id="inputAddres5s"
                                                placeholder="1234 Main St"
                                                value="<?php echo $customerData['customer_address']; ?>" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">City</label>
                                            <input name="city" placeholder="New York" type="text" class="form-control"
                                                id="inputCity" value="<?php echo $customerData['city']; ?>" />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputState" class="form-label">State</label>
                                            <input name="state" placeholder="NY" type="text" class="form-control"
                                                id="inputState" value="<?php echo $customerData['state']; ?>" />
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputZip" class="form-label">Zip</label>
                                            <input name="zip" placeholder="12125" type="text" class="form-control"
                                                id="inputZip" value="<?php echo $customerData['zip_code']; ?>" />
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-primary w-100" type="submit">
                                                Save Changes
                                            </button>
                                        </div>
                                    </form>
                                    <!-- End Profile Edit Form -->
                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">
                                                Current Password
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="currentPassword" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">
                                                New Password
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                    id="newPassword" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">
                                                Re-enter New Password
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                    id="renewPassword" />
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">
                                                Change Password
                                            </button>
                                        </div>
                                    </form>
                                    <!-- End Change Password Form -->
                                </div>
                            </div>
                            <!-- End Bordered Tabs -->
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
                                <p class="mt-2 mx-2">Authenticating. Please wait...</p>
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

    function updateProfile() {
        showLoadingModal();

        $.ajax({
            type: "POST",
            url: "includes/controllers/profile_controller.php",
            data: $('#auth-form').serialize(), // serialize the form data and send it to the PHP script
            dataType: "json",
            success: function(response) {
                hideLoadingModal();
                console.log(response);
                if (!response.error) {
                    toastr.success(
                        response.message
                    );
                    setTimeout(function() {
                        window.location.href = 'profile.php';
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
                toastr.error('Error! Something went wrong kindly try again later');
            }
        });

    }

    $(document).ready(function() {
        $('#auth-form').submit(function(event) { // assuming the form has id "my-form"
            event.preventDefault(); // prevent the form from submitting in the default way
            //toastr.info('Scanning item order...');
            updateProfile();
        });
    });
    </script>

</body>

</html>