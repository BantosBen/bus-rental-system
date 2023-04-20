<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

require_once 'includes/classes/bus.php';
require_once 'includes/classes/reservation.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

} else {

    $tableBus = new Bus;
    $buses = $tableBus->getAllBuses();

    $reservationObj = new Reservation;
    $reservation = $reservationObj->getActiveReservation();
}