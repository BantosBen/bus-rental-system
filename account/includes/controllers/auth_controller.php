<?php

require_once '../classes/auth.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $auth = new Auth;

    $form_type = $_POST['form-type'];
    if ($form_type === 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $response = $auth->login($email, $password);

        echo json_encode($response);

    } else if ($form_type === 'signup') {
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

        $response = $auth->createCustomerAccount($user);

        echo json_encode($response);

    }
}
