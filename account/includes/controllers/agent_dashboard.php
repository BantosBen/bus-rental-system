<?php
session_start();
require_once 'includes/classes/bus.php';

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

$tableBus = new Bus;
$buses = $tableBus->getAllBuses();
