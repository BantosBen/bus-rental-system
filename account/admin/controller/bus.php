<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
}

require_once('../includes/classes/bus.php');

$bus = new Bus;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['delete_id'])) {
        $bus->delete($_POST['delete_id']);
    }

    if (isset($_POST['edit_id'])) {
        $busArray = [];
        $busArray['bus_type'] = $_POST['bus_type'];
        $busArray['manufacturer'] = $_POST['manufacturer'];
        $busArray['model'] = $_POST['model'];
        $busArray['year'] = $_POST['year'];
        $busArray['seating_capacity'] = $_POST['capacity'];
        $busArray['licenseplate_number'] = $_POST['plate_number'];
        $busArray['fee'] = $_POST['fee'];
        $busArray['id'] = $_POST['edit_id'];

        $bus->update($busArray);
    }

}

$busses = $bus->getAllBuses();