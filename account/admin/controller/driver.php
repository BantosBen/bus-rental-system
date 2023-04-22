<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
}

require_once('../includes/classes/driver.php');

$driver = new Driver;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['delete_id'])) {
        $driver->delete($_POST['delete_id']);
    }

    if (isset($_POST['edit_id'])) {
        $driverData = [];
        $driverData['first_name'] = $_POST['first_name'];
        $driverData['last_name'] = $_POST['last_name'];
        $driverData['email'] = $_POST['email'];
        $driverData['phone'] = $_POST['phone'];
        $driverData['license_number'] = $_POST['license_number'];
        $driverData['id'] = $_POST['edit_id'];

        $driver->update($driverData);
    }

    if (isset($_POST['add_id'])) {
        $driverData = [];
        $driverData['first_name'] = $_POST['first_name'];
        $driverData['last_name'] = $_POST['last_name'];
        $driverData['email'] = $_POST['email'];
        $driverData['phone'] = $_POST['phone'];
        $driverData['license_number'] = $_POST['license_number'];

        $driver->insert($driverData);
    }
}

$drivers = $driver->getAll();