<?php require_once('controller/dashboard.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Safe Routes - Dashboard</title>

    <?php include 'stylesheets.php'; ?>

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
                        <a href="dashboard.php" class="nav-link active">
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
                        <a href="profile.php" class="nav-link">
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
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $numberOfCustomers; ?>
                                </h3>

                                <p>Customers</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <a href="customer.php" class="small-box-footer">
                                More info
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>
                                    <?php echo $numberOfBuses; ?>
                                </h3>

                                <p>Buses</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa fa-bus"></i>
                            </div>
                            <a href="buses.php" class="small-box-footer">
                                More info
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>
                                    <?php echo $numberOfDrivers; ?>
                                </h3>

                                <p>Drivers</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa fa-address-card"></i>
                            </div>
                            <a href="drivers.php" class="small-box-footer">
                                More info
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>
                                    <?php echo $numberOfActiveReservatio; ?>
                                </h3>

                                <p>Active Reservations</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa fa-archive"></i>
                            </div>
                            <a href="reservations.php" class="small-box-footer">
                                More info
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Top 5 Buses</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px;">#</th>
                                            <th>Manufacturer</th>
                                            <th>Model</th>
                                            <th>Plate Number</th>
                                            <th>Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($topBuses as $topBus) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $topBus['bus_id'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $topBus['manufacturer'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $topBus['model'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $topBus['licenseplate_number'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $topBus['avg_rating'] ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Active Reservations</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px;">#</th>
                                            <th>Bus Info</th>
                                            <th>Depature Time</th>
                                            <th>Arrival Time</th>
                                            <th>Route</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($activeReservations as $activeReservation) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $activeReservation['reservation_id'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $activeReservation['bus_type'] . ' - ' . $activeReservation['manufacturer']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $activeReservation['departure_date'] . ' ' . $activeReservation['departure_time']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $activeReservation['arrival_date'] . ' ' . $activeReservation['arrival_time']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $activeReservation['departure_location'] . ' - ' . $activeReservation['arrival_location']; ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'footer.php'; ?>
    </body>

</html>