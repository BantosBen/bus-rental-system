<?php require_once('controller/profile.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Safe Route | Admin Profile</title>

    <?php include 'stylesheets.php'; ?>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: 0.8;" />
            <span class="brand-text font-weight-light">Safe Routes</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <?php include 'user_panel.php'; ?>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">MANAGEMENT</li>
                    <li class="nav-item">
                        <a href="customer.php" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                Customer
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="buses.php" class="nav-link">
                            <i class="nav-icon fa fa-bus"></i>
                            <p>
                                Buses
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="drivers.php" class="nav-link">
                            <i class="nav-icon fa fa-address-card"></i>
                            <p>
                                Driver
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">REVIEW</li>
                    <li class="nav-item">
                        <a href="reservations.php" class="nav-link">
                            <i class="nav-icon fa fa-archive"></i>
                            <p>
                                Reservations
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="reviews.php" class="nav-link">
                            <i class="nav-icon fa fa-star"></i>
                            <p>
                                Customer Reviews
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="payments.php" class="nav-link">
                            <i class="nav-icon fa fa-credit-card"></i>
                            <p>
                                Payments
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">OTHERS</li>
                    <li class="nav-item">
                        <a href="profile.php" class="nav-link active">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                My Profile
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../logout.php" class="nav-link">
                            <i class="nav-icon fa fa-power-off"></i>
                            <p>
                                Sign Out
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Admin Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="dist/img/profile-img.jpg"
                                        alt="User profile picture" />
                                </div>

                                <h3 class="profile-username text-center">
                                    <?php echo $adminProfile['name'] ?>
                                </h3>

                                <p class="text-muted text-center">Administrator ID
                                    <?php echo $adminProfile['user_id'] ?>
                                </p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#activity" data-toggle="tab">
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#timeline" data-toggle="tab">
                                            Change Password
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#settings" data-toggle="tab">
                                            Create Admin
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <form class="form-horizontal" method="post" action="">
                                            <input value="1" type="hidden" class="form-control" name="edit_id"
                                                placeholder="Name" />
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">
                                                    Name
                                                </label>
                                                <div class="col-sm-10">
                                                    <input required value="<?php echo $adminProfile['name'] ?>"
                                                        name="name" type="email" class="form-control" id="inputName"
                                                        placeholder="Name" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">
                                                    Email
                                                </label>
                                                <div class="col-sm-10">
                                                    <input required value="<?php echo $adminProfile['email_address'] ?>"
                                                        name="email" type="email" class="form-control" id="inputEmail"
                                                        placeholder="Email" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">
                                                    Phone Number
                                                </label>
                                                <div class="col-sm-10">
                                                    <input required value="<?php echo $adminProfile['phone_number'] ?>"
                                                        name="phone" type="number" class="form-control" id="inputName2"
                                                        placeholder="Phone Number" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">
                                                        Save Changes
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="timeline">
                                        <form class="form-horizontal" method="post" action="">
                                            <input value="1" type="hidden" class="form-control" name="password_id"
                                                placeholder="Name" />
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">
                                                    Current Password
                                                </label>
                                                <div class="col-sm-10">
                                                    <input required type="password" name="password" class="form-control"
                                                        id="inputName" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">
                                                    New Password
                                                </label>
                                                <div class="col-sm-10">
                                                    <input required type="password" name="new_password"
                                                        class="form-control" id="inputEmail" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">
                                                        Update Password
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal" method="post" action="">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">
                                                    Name
                                                </label>
                                                <div class="col-sm-10">
                                                    <input name="name" required type="text" class="form-control"
                                                        id="inputName" placeholder="Name" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">
                                                    Email
                                                </label>
                                                <div class="col-sm-10">
                                                    <input name="email" required type="email" class="form-control"
                                                        id="inputEmail" placeholder="Email" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">
                                                    Phone Number
                                                </label>
                                                <div class="col-sm-10">
                                                    <input name="phone" required type="number" class="form-control"
                                                        id="inputName2" placeholder="Phone Number" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">
                                                    Password (Default Password)
                                                </label>
                                                <div class="col-sm-10">
                                                    <input name="password" class="form-control" id="inputName2"
                                                        value="2023@SR" disabled />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">
                                                        Create Account
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'footer.php'; ?>
    </body>

</html>