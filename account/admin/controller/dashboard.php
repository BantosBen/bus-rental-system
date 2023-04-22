<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
}

require_once('../includes/classes/customer.php');
require_once('../includes/classes/bus.php');
require_once('../includes/classes/driver.php');
require_once('../includes/classes/reservation.php');

$customer = new Customer;
$numberOfCustomers = $customer->getCount();

$bus = new Bus;
$numberOfBuses = $bus->getCount();

$driver = new Driver;
$numberOfDrivers = $driver->getCount();


$reservation = new Reservation;
$activeReservations = $reservation->getActiveReservations();
if ($activeReservations != null) {
    $numberOfActiveReservatio = count($activeReservations);
} else {
    $numberOfActiveReservatio = 0;
}


$topBuses = $bus->getTopBuses();