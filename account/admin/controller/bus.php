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
        $fileName = "";
        if (isset($_FILES['bus_image'])) {
            $fileName = uploadImage($_FILES['bus_image']);
        }
        $busArray = [];
        $busArray['image'] = $fileName;
        $busArray['bus_type'] = $_POST['bus-type'];
        $busArray['manufacturer'] = $_POST['manufacturer'];
        $busArray['model'] = $_POST['model'];
        $busArray['year'] = $_POST['year'];
        $busArray['seating_capacity'] = $_POST['capacity'];
        $busArray['licenseplate_number'] = $_POST['plate-number'];
        $busArray['fee'] = $_POST['fee'];
        $busArray['id'] = $_POST['edit_id'];

        $bus->update($busArray);
    }

    if (isset($_POST['add_id'])) {
        $fileName = "";
        if (isset($_FILES['bus_image'])) {
            $fileName = uploadImage($_FILES['bus_image']);
        }
        $busArray = [];
        $busArray['image'] = $fileName;
        $busArray['bus_type'] = $_POST['bus-type'];
        $busArray['manufacturer'] = $_POST['manufacturer'];
        $busArray['model'] = $_POST['model'];
        $busArray['year'] = $_POST['year'];
        $busArray['seating_capacity'] = $_POST['capacity'];
        $busArray['licenseplate_number'] = $_POST['plate-number'];
        $busArray['fee'] = $_POST['fee'];

        $bus->insert($busArray);
    }
}

$busses = $bus->getAllBuses();


function uploadImage($file)
{
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];

    // Move the uploaded file to a desired directory
    $upload_dir = "uploads/";
    move_uploaded_file($file_tmp, $upload_dir . $file_name);

    return $file_name;
}