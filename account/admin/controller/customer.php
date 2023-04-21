<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
}

require_once('../includes/classes/customer.php');

$customer = new Customer;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    if (isset($_POST['delete_id'])) {
        $response = $customer->deleteCustomer($_POST['delete_id']);
    }

    if (isset($_POST['edit_id'])) {
        $user = [];
        $user['id'] = $_POST['edit_id'];
        $user['first_name'] = $_POST['first-name'];
        $user['last_name'] = $_POST['second-name'];
        $user['email'] = $_POST['email'];
        $user['address'] = $_POST['address'];
        $user['phone'] = $_POST['phone'];
        $user['city'] = $_POST['city'];
        $user['state'] = $_POST['state'];
        $user['zip'] = $_POST['zip'];

        $response = $customer->updateCustomer($user);
    }

}

$customers = $customer->getAll();