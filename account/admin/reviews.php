<?php require_once('controller/reviews.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Safe Routes - Reviews</title>

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
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/profile-img.jpg" class="img-circle elevation-2" alt="User Image" />
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">MANAGEMENT</li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                Customer
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fa fa-bus"></i>
                            <p>
                                Buses
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fa fa-address-card"></i>
                            <p>
                                Driver
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">REVIEW</li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fa fa-archive"></i>
                            <p>
                                Reservations
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link active">
                            <i class="nav-icon fa fa-star"></i>
                            <p>
                                Customer Reviews
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fa fa-credit-card"></i>
                            <p>
                                Payments
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">OTHERS</li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                My Profile
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
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
                        <h1 class="m-0">Customer Reviews Management</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Customer Reviews</li>
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
                <!-- Main row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Customer Reviews Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Review ID</th>
                                            <th>Bus Type</th>
                                            <th>Bus Manufacturer</th>
                                            <th>Rating</th>
                                            <th>Comment</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($reviews as $review) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $review['review_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $review['bus_type']; ?>
                                            </td>
                                            <td>
                                                <?php echo $review['manufacturer']; ?>
                                            </td>
                                            <td>
                                                <?php echo $review['rating']; ?>
                                            </td>
                                            <td>
                                                <?php echo $review['review_text']; ?>
                                            </td>
                                            <td>
                                                <?php echo $review['review_date']; ?>
                                            </td>
                                          </tr>
                                        <?php } ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Review ID</th>
                                            <th>Bus Type</th>
                                            <th>Bus Manufacturer</th>
                                            <th>Rating</th>
                                            <th>Comment</th>
                                            <th>Date</th>
                                        </tr>
                                    </tfoot>
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

    <?php include 'footer.php'; ?>

    <script>
    // Set the text content of the HTML element to the current year
    document.getElementById('current-year').textContent = currentYear
    $(function() {
        $('#example1')
            .DataTable({
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print', 'colvis'],
            })
            .buttons()
            .container()
            .appendTo('#example1_wrapper .col-md-6:eq(0)')
        $('#example2').DataTable({
            paging: true,
            lengthChange: false,
            searching: false,
            ordering: true,
            info: true,
            autoWidth: false,
            responsive: true,
        })
    })
    </script>
    </body>

</html>