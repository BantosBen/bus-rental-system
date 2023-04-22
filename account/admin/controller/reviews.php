<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
}

require_once('../includes/classes/reservation.php');

$reservation = new Reservation;
$reviews = $reservation->getAllReviews();