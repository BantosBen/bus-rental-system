<?php

session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require_once '../classes/customer.php';

    $customer = new Customer;

    if (isset($_POST['first_name'])) {

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
        $user['id'] = $_SESSION['id'];

        $response = $customer->updateCustomer($user);

        echo json_encode($response);
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        $newPassword = $_POST['newpassword'];
        $renewPassword = $_POST['renewpassword'];

        if ($newPassword == $renewPassword) {
            $response = $customer->updatePassword($password, $newPassword);
            echo $response;
        } else {
            $message = [];
            $message['error'] = true;
            $message['message'] = "Passwords don't match. Kindly check and try again";
            echo json_encode($message);
        }
    }

} else {
    require_once 'includes/classes/customer.php';

    $customer = new Customer;

    $customerData = $customer->getCurrentCustomer();
}