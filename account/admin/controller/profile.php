<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
}

require_once('../includes/classes/admin.php');

$admin = new Admin;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['password_id'])) {
        $adminData = [];
        $currentPasword = $_POST['password'];
        $newPassword = $_POST['new_password'];

        $admin->updatePassword($currentPasword, $newPassword);
    }

    if (isset($_POST['edit_id'])) {
        $adminData = [];
        $adminData['name'] = $_POST['name'];
        $adminData['email'] = $_POST['email'];
        $adminData['phone'] = $_POST['phone'];

        $admin->update($adminData);
    }

    if (isset($_POST['add_id'])) {
        $adminData['name'] = $_POST['name'];
        $adminData['email'] = $_POST['email'];
        $adminData['phone'] = $_POST['phone'];
        $adminData['password'] = $_POST['password'];

        $admin->create($adminData);
    }
}

$adminProfile = $admin->getCurrentAdmin();