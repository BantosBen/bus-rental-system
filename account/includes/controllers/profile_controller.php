<?php

session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require_once '../classes/customer.php';

    $customer = new Customer;

    $user = [];

    $user['first_name'] = $_POST['first_name'];
    $user['last_name'] = $_POST['second_name'];
    $user['password'] = $_POST['password'];
    $user['email'] = $_POST['email'];
    $user['address'] = $_POST['address'];
    $user['phone'] = $_POST['phone'];
    $user['city'] = $_POST['city'];
    $user['state'] = $_POST['state'];
    $user['zip'] = $_POST['zip'];

    $response = $customer->updateCustomer($user);

    echo json_encode($response);

} else {
    require_once 'includes/classes/customer.php';

    $customer = new Customer;

    $customerData = $customer->getCurrentCustomer();
}
