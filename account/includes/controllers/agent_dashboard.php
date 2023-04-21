<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once '../classes/reservation.php';

    $reservation = new Reservation;

    if (isset($_POST['ratings'])) {
        $reviewMessage = $_POST['comment'];
        $ratings = $_POST['ratings'];
        $reservationID = $_POST['reservation_id'];
        $busID = $_POST['bus_id'];

        $response = $reservation->addCustomerReview($reservationID, $busID, $reviewMessage, $ratings);
        echo $response;

    } else if (isset($_POST['complete'])) {
        $reservationID = $_POST['reservation_id'];

        $respoonse = $reservation->completeReservation($reservationID);
        echo $response;

    } else if (isset($_POST['cancel'])) {
        $reservationID = $_POST['reservation_id'];

        $respoonse = $reservation->cancelReservation($reservationID);
        echo $response;
    }
} else {
    require_once 'includes/classes/bus.php';
    require_once 'includes/classes/reservation.php';

    $tableBus = new Bus;
    $buses = $tableBus->getAllBuses();

    $reservationObj = new Reservation;
    $reservation = $reservationObj->getActiveReservation();
}