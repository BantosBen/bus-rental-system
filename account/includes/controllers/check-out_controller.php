<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

} else {
    require_once 'includes/classes/reservation.php';
    if (isset($_GET['id'])) {
        $reservationID = $_GET['id'];

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