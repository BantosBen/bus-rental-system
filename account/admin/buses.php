<?php require_once('controller/bus.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Safe Routes - Bus</title>

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
                        <a href="pages/widgets.html" class="nav-link active">
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
                        <h1 class="m-0">Buses Management</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Bus</li>
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
                                <h3 class="card-title">Bus Details</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-block btn-outline-primary btn-md"
                                        data-toggle="modal" data-target="#modal-add">
                                        <i class="fa fa-add"></i>
                                        Add New Bus
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Bus Type</th>
                                            <th>Manufacturer</th>
                                            <th>Model</th>
                                            <th>Year</th>
                                            <th>Capacity</th>
                                            <th>Plate Number</th>
                                            <th>Availability</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($busses as $mBus) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $mBus['bus_type'] ?>
                                            </td>
                                            <td>
                                                <?php echo $mBus['manufacturer'] ?>
                                            </td>
                                            <td>
                                                <?php echo $mBus['model'] ?>
                                            </td>
                                            <td>
                                                <?php echo $mBus['year'] ?>
                                            </td>
                                            <td>
                                                <?php echo $mBus['seating_capacity'] ?>
                                            </td>
                                            <td>
                                                <?php echo $mBus['licenseplate_number'] ?>
                                            </td>
                                            <td>
                                                <?php if ($mBus['availability'] == 2) { ?>
                                                <small class="badge badge-danger">
                                                    <i class="far fa-clock"></i>
                                                    Not Available
                                                </small>
                                                <?php } else { ?>
                                                <small class="badge badge-success">
                                                    <i class="far fa-clock"></i>
                                                    Available
                                                </small>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="button"
                                                            class="btn btn-block btn-outline-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#modal-edit-<?php echo $mBus['bus_id'] ?>">
                                                            <i class="fa fa-edit"></i>
                                                            Edit
                                                        </button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="button"
                                                            class="btn btn-block btn-outline-danger btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#modal-delete-<?php echo $mBus['bus_id'] ?>">
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
                                            <th>Bus Type</th>
                                            <th>Manufacturer</th>
                                            <th>Model</th>
                                            <th>Year</th>
                                            <th>Capacity</th>
                                            <th>Plate Number</th>
                                            <th>Availability</th>
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
        <div class="modal fade" id="modal-add">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Bus</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="" enctype="multipart/form-data">
                        <input value="1" required type="hidden" name="add_id" class="form-control" id="add_id"
                            placeholder="Enter Bus Type">
                        <div class="modal-body row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="bus-type">Bus Type</label>
                                    <input required type="text" name="bus-type" class="form-control" id="bus-type"
                                        placeholder="Enter Bus Type">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="manufacturer">Manufacturer</label>
                                    <input required type="text" name="manufacturer" class="form-control"
                                        id="manufacturer" placeholder="Enter Manufacturer">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="text">Model</label>
                                    <input required type="model" name="model" class="form-control" id="model"
                                        placeholder="Enter Model">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="fee">Fee</label>
                                    <input required type="number" name="fee" class="form-control" id="fee"
                                        placeholder="Enter Fee">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="year">Year</label>
                                    <input required type="text" name="year" class="form-control" id="year"
                                        placeholder="Enter Year">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="capacity">Capacity</label>
                                    <input required type="number" name="capacity" class="form-control" id="capacity"
                                        placeholder="Enter Capacity">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="plate-number">Plane Number</label>
                                    <input required type="text" name="plate-number" class="form-control"
                                        id="plate-number" placeholder="Enter Plate Number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input required type="file" class="custom-file-input" name="bus_image"
                                            id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose Bus Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <button type="submit" class="btn btn-secondary">Add New Bus</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


        <?php foreach ($busses as $mBus) { ?>

        <div class="modal fade" id="modal-edit-<?php echo $mBus['bus_id'] ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Bus Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="" enctype="multipart/form-data">
                        <input value="<?php echo $mBus['bus_id'] ?>" required type="hidden" name="edit_id"
                            class="form-control" id="edit-id" placeholder="Enter Bus Type">
                        <div class="modal-body row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="bus-type">Bus Type</label>
                                    <input value="<?php echo $mBus['bus_type'] ?>" required type="text" name="bus-type"
                                        class="form-control" id="bus-type" placeholder="Enter Bus Type">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="manufacturer">Manufacturer</label>
                                    <input value="<?php echo $mBus['manufacturer'] ?>" required type="text"
                                        name="manufacturer" class="form-control" id="manufacturer"
                                        placeholder="Enter Manufacturer">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="text">Model</label>
                                    <input value="<?php echo $mBus['model'] ?>" required type="model" name="model"
                                        class="form-control" id="model" placeholder="Enter Model">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="fee">Fee</label>
                                    <input value="<?php echo $mBus['fee'] ?>" required type="number" name="fee"
                                        class="form-control" id="fee" placeholder="Enter Fee">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="year">Year</label>
                                    <input value="<?php echo $mBus['year'] ?>" required type="text" name="year"
                                        class="form-control" id="year" placeholder="Enter Year">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="capacity">Capacity</label>
                                    <input value="<?php echo $mBus['seating_capacity'] ?>" required type="number"
                                        name="capacity" class="form-control" id="capacity" placeholder="Enter Capacity">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="plate-number">Plane Number</label>
                                    <input value="<?php echo $mBus['licenseplate_number'] ?>" required type="text"
                                        name="plate-number" class="form-control" id="plate-number"
                                        placeholder="Enter Plate Number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="bus_image" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose Bus Image</label>
                                    </div>
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



        <div class="modal fade" id="modal-delete-<?php echo $mBus['bus_id']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Bus</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="">
                        <div class="modal-body row">
                            <div class="col-12">
                                <p>Do you wish to delete
                                    <b>
                                        <?php echo $mBus['bus_type'] . ' ' . $mBus['manufacturer']; ?>
                                    </b>
                                </p>
                            </div>
                            <input value="<?php echo $mBus['bus_id'] ?>" required type="hidden" name="delete_id"
                                class="form-control" id="delete_id">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="submit" class="btn btn-danger">Delete Bus</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <?php } ?>
        <!-- /.content -->
    </div>
    <?php include 'footer.php'; ?>
    <!-- Page specific script -->
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