<?php
session_start();
require_once 'includes/classes/customer.php';
require_once 'includes/classes/bus.php';

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

$customer = new Customer;
$customerData = $customer->getCurrentCustomer();

$first_name = $customerData['first_name'];
$second_name = $customerData['last_name'];

// Get the first initial of the first name and capitalize it
$first_initial = strtoupper(substr($first_name, 0, 1));

// Combine the first initial with the second name
$customerName = $first_initial . ". " . $second_name;
$fullName = $first_name . ' ' . $second_name;

$tableBus = new Bus;
$buses = $tableBus->getAllBuses();
