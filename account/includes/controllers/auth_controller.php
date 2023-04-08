<?php

require_once 'include/auth.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $auth = new Auth;

    $form_type = $_POST['form-type'];
    if ($form_type === 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $response = $auth->login($email, $password);

        echo json_encode($response);
        
    } else if ($form_type === 'signup') {
        // Handle the sign up form submission
    }
}