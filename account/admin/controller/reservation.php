<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
}

require_once('../includes/classes/reservation.php');

$reservation = new Reservation;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['cancel_id'])) {
        $reservation->cancel($_POST['cancel_id']);
    }
}

$reservations = $reservation->getAll();