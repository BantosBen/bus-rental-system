<?php

require_once 'database.php';

class Customer
{
    private $customerID;
    private $connection;

    public function __construct()
    {
        $this->customerID = $_SESSION['id'];
        $db = new Database;

        $this->connection = $db->connection;
    }

    public function getCurrentCustomer()
    {
        $sql = "SELECT * FROM `customer` WHERE `customer_id` = '$this->customerID'";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $customer = $row;
            }
            return $customer;
        } else {
            return null;
        }
    }

    private function isEmailExists($email, $table = "customer")
    {
        $sql = "SELECT * FROM $table WHERE email='$email' AND `customer_id` != $this->customerID";
        $result = $this->connection->query($sql);

        return $result > 0;
    }

    public function updateCustomer($user)
    {
        $message = [];

        $firstName = $user['first_name'];
        $lastName = $user['last_name'];
        $emailAddress = $user['email'];
        $customerAddress = $user['address'];
        $phoneNumber = $user['phone'];
        $city = $user['city'];
        $state = $user['state'];
        $zipCode = $user['zip'];

        if (!$this->isEmailExists($emailAddress)) {
            $sql = "UPDATE `customer` SET
            `first_name`='$firstName',
            `last_name`='$lastName',
            `email_address`='$emailAddress',
            `customer_address`='$customerAddress',
            `phone_number`='$phoneNumber',
            `city`='$city',
            `state`='$state',
            `zip_code`='$zipCode' WHERE `customer_id` = '$this->customerID'";

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

    public function updatePassword($password, $newPassword){
        $message = [];

        if ($this->isPasswordValid($password)) {
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $userId = $_SESSION['id'];

            $sql = "UPDATE `customer` SET `customer_password`='$hashedPassword' WHERE `customer_id`='$userId'";
            $result = $this->connection->query($sql);

            if ($result > 0) {
                $message['error'] = false;
                $message['message'] = "Password update was successful";

            } else {
                $message['error'] = true;
                $message['message'] = "Something happened. update failed. Check and try again.";

            }
        }else{
            $message['error'] = true;
            $message['message'] = "Incorrect password";
        }

        return json_encode($message);
    }

    private function isPasswordValid($password){
        $userId = $_SESSION['id'];
        $sql_raw = "SELECT * FROM `customer` WHERE `customer_id` = '$userId'";
        $result = $this->connection->query($sql_raw);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = $row;
            }
            return password_verify($password, $user['customer_password']);
        }else{
            return false;
        }
    }
}