<?php
session_start();
require_once 'includes/classes/reservation.php';

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $reservation_data = array('user_id' => $_SESSION['id'],
        'bus_id' => $_POST['bus_id'],
        'dept_date' => $_POST['dept_date'],
        'dept_time' => $_POST['dept_time'],
        'arr_date' => $_POST['arr_date'],
        'arr_time' => $_POST['arr_time'],
        'dept_location' => $_POST['dept_location'],
        'arr_location' => $_POST['arr_location'],
        'fee' => $_POST['fee']);

    $reservation = new Reservation;
    $response = $reservation->makeReservation($reservation_data);

    echo json_encode($response);

}

if (isset($_GET['id']) && isset($_GET['bus']) && isset($_GET['fee'])) {
    $busID = $_GET['id'];
    $busName = $_GET['bus'];
    $busFee = $_GET['fee'];

} else {
    header('Location: dashboard.php');
}
