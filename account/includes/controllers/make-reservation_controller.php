<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require_once('../classes/reservation.php');

    $date = DateTime::createFromFormat('m/d/Y', $_POST['dept_date']);
    $deptDate = $date->format('Y-m-d');

    $date = DateTime::createFromFormat('m/d/Y', $_POST['arr_date']);
    $arrDate = $date->format('Y-m-d');

    $time = DateTime::createFromFormat('h:i A', $_POST['dept_time']);
    $deptTime = $time->format('H:i:s');

    $time = DateTime::createFromFormat('h:i A', $_POST['arr_time']);
    $arrTime = $time->format('H:i:s');

    $reservation_data = array(
        'user_id' => $_SESSION['id'],
        'bus_id' => $_POST['bus_id'],
        'dept_date' => $deptDate,
        'dept_time' => $deptTime,
        'arr_date' => $arrDate,
        'arr_time' => $arrTime,
        'dept_location' => $_POST['dept_location'],
        'arr_location' => $_POST['arr_location'],
        'fee' => $_POST['fee']
    );

    $reservation = new Reservation;
    $response = $reservation->makeReservation($reservation_data);

    echo json_encode($response);

} else {

    if (isset($_GET['id']) && isset($_GET['bus']) && isset($_GET['fee'])) {
        require_once('includes/classes/bus.php');

        $busID = $_GET['id'];
        $busName = $_GET['bus'];
        $busFee = $_GET['fee'];

        $busObj = new Bus;

        $drivers = $busObj->getAvailableDrivers();

    } else {
        header('Location: dashboard.php');
    }
}