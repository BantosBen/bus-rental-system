<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require_once '../classes/reservation.php';

    if (isset($_POST['fee'])) {
        $amount = $_POST['fee'];
        $reservationID = $_SESSION['reservation_id'];

        $obj = new Reservation;
        $response = $obj->checkOut($amount, $reservationID);

        echo json_encode($response);
    }

} else {
    require_once 'includes/classes/reservation.php';
    if (isset($_GET['id'])) {
        $reservationID = $_GET['id'];
        $_SESSION['reservation_id'] = $reservationID;

        $obj = new Reservation;
        $reservation = $obj->getReservation($reservationID);

        if ($reservation == null) {
            header('Location: dashboard.php');
            exit();
        }

    } else {
        header('Location: dashboard.php');
    }
}