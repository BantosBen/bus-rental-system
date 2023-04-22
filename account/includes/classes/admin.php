<?php

require_once 'database.php';

class Admin
{
    private $adminID;
    private $connection;

    public function __construct()
    {
        $this->adminID = $_SESSION['admin'];
        $db = new Database;

        $this->connection = $db->connection;
    }

    public function getCurrentAdmin()
    {
        $sql = "SELECT * FROM `login` WHERE `user_id` = '$this->adminID'";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $admin = $row;
            }
            return $admin;
        } else {
            return null;
        }
    }

    private function isEmailExists($email)
    {
        $sql = "SELECT * FROM `login` WHERE email_address='$email' AND `user_id` != $this->adminID";
        $result = $this->connection->query($sql);

        return $result > 0;
    }

    public function update($user)
    {
        $message = [];

        $name = $user['name'];
        $emailAddress = $user['email'];
        $phoneNumber = $user['phone'];

        if (!$this->isEmailExists($emailAddress)) {
            $sql = "UPDATE `login` SET
            `name`='$name',
            `email_address`='$emailAddress',
            `phone_number`='$phoneNumber' WHERE `user_id` = '$this->adminID'";

            $result = $this->connection->query($sql);

            if ($result > 0) {
                $message['error'] = false;
                $message['message'] = "Account update was successful";

            } else {
                $message['error'] = true;
                $message['message'] = "Something happened. Update failed. Check and try again.";

            }
        } else {
            $message['error'] = true;
            $message['message'] = "Email address is already taken. Check and try again.";

        }
        return json_decode(json_encode($message));

    }

    public function updatePassword($password, $newPassword)
    {
        $message = [];

        if ($this->isPasswordValid($password)) {
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            $sql = "UPDATE `login` SET `password`='$hashedPassword' WHERE `user_id`='$this->adminID'";
            $result = $this->connection->query($sql);

            if ($result > 0) {
                $message['error'] = false;
                $message['message'] = "Password update was successful";

            } else {
                $message['error'] = true;
                $message['message'] = "Something happened. update failed. Check and try again.";

            }
        } else {
            $message['error'] = true;
            $message['message'] = "Incorrect password";
        }

        return json_encode($message);
    }

    private function isPasswordValid($password)
    {
        $sql_raw = "SELECT * FROM `login` WHERE `user_id` = '$this->adminID'";
        $result = $this->connection->query($sql_raw);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = $row;
            }
            return password_verify($password, $user['password']);
        } else {
            return false;
        }
    }

    public function create($user)
    {
        $message = [];

        $name = $user['name'];
        $password = $user['password'];
        $emailAddress = $user['email'];
        $phoneNumber = $user['phone'];

        if (!$this->isEmailExists($emailAddress)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `login`(`password`, `email_address`, `name`, `phone_number`)
            VALUES ('$hashedPassword','$emailAddress','$name','$phoneNumber');";

            $result = $this->connection->query($sql);

            if ($result > 0) {
                $message['error'] = false;
                $message['message'] = "Registration successful";

            } else {
                $message['error'] = true;
                $message['message'] = "Something happened. Registration failed. Check and try again.";

            }
        } else {
            $message['error'] = true;
            $message['message'] = "Email address is already taken. Check and try again.";

        }
        return json_decode(json_encode($message));

    }
}