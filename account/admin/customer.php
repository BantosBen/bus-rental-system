<?php require_once('controller/customer.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Safe Routes - Customers</title>

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
                        <a href="pages/widgets.html" class="nav-link active">
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
                        <a href="pages/widgets.html" class="nav-link">
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
                        <h1 class="m-0">Customer Management</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Customer</li>
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
                <!-- Main row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Customer Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($customers as $client) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $client['first_name'] . ' ' . $client['last_name'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $client['email_address'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $client['phone_number'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $client['customer_address'] ?>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <button type="button"
                                                                class="btn btn-block btn-outline-primary btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#modal-edit-<?php echo $client['customer_id'] ?>">
                                                                <i class="fa fa-edit"></i>
                                                                Edit
                                                            </button>
                                                        </div>
                                                        <div class="col-6">
                                                            <button type="button"
                                                                class="btn btn-block btn-outline-danger btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#modal-delete-<?php echo $client['customer_id'] ?>">
                                                                <i class="fa fa-trash"></i>
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Tools</th>
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
        <?php foreach ($customers as $client) { ?>
            <div class="modal fade" id="modal-edit-<?php echo $client['customer_id'] ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Customer Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="">
                            <div class="modal-body row">
                                <input value="<?php echo $client['customer_id'] ?>" required type="hidden" name="edit_id"
                                    class="form-control" id="edit_id">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name">First Name</label>
                                        <input value="<?php echo $client['first_name'] ?>" required type="text"
                                            name="first-name" class="form-control" id="first-name"
                                            placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="second-name">Second Name</label>
                                        <input value="<?php echo $client['last_name'] ?>" required type="text"
                                            name="second-name" class="form-control" id="second-name"
                                            placeholder="Enter Second Name">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input value="<?php echo $client['email_address'] ?>" required type="email"
                                            name="email" class="form-control" id="email" placeholder="Enter Email">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input value="<?php echo $client['customer_address'] ?>" required type="text"
                                            name="address" class="form-control" id="address" placeholder="Enter Address">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input value="<?php echo $client['phone_number'] ?>" required type="number"
                                            name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
                                    </div>
                                </div>

                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input value="<?php echo $client['city'] ?>" required type="text" name="city"
                                            class="form-control" id="city" placeholder="Enter City">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input value="<?php echo $client['state'] ?>" required type="text" name="state"
                                            class="form-control" id="state" placeholder="Enter State">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="zip">Zip Code</label>
                                        <input value="<?php echo $client['zip_code'] ?>" required type="text" name="zip"
                                            class="form-control" id="zip" placeholder="Enter Zip Code">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="modal-footer justify-content-between">
                                <button type="submit" class="btn btn-secondary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>


            <div class="modal fade" id="modal-delete-<?php echo $client['customer_id']; ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Customer</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="">
                            <div class="modal-body row">
                                <div class="col-12">
                                    <p>Do you wish to delete
                                        <b>
                                            <?php echo $client['first_name'] . ' ' . $client['last_name']; ?>
                                        </b>
                                    </p>
                                </div>
                                <input value="<?php echo $client['customer_id'] ?>" required type="hidden" name="delete_id"
                                    class="form-control" id="delete_id">
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="submit" class="btn btn-danger">Delete Customer</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

        <?php } ?>
        <!-- /.content -->

        <div class="modal" id="loadingModal" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-md-8 d-flex justify-content-center">
                                <div class="spinner-border text-primary" role="status">
                                </div>
                                <p class="mt-2 mx-2">Please wait...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./wrapper -->
    <?php include 'footer.php'; ?>
    <!-- Page specific script -->
    <script>
        // Show the loading modal
        function showLoadingModal() {
            $('#loadingModal').modal('show');
        }

        // Hide the loading modal
        function hideLoadingModal() {
            $('#loadingModal').modal('hide');
        }

        $(function () {
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