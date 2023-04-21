<?php

require_once 'database.php';

class Auth
{
    private $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->connection;
    }

    public function login($email, $password)
    {
        $message = [];
        $sql_raw = "SELECT * FROM `customer` WHERE `email_address` = '$email'";
        $result = $this->connection->query($sql_raw);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = $row;
            }

            if (password_verify($password, $user['customer_password'])) {
                $message['error'] = false;
                $message['message'] = "Successfully login";
                $message['id'] = $user['customer_id'];
                $message['is_customer'] = true;

                $this->createSession($user['customer_id'], true);

            } else {
                $message['error'] = true;
                $message['message'] = "Invalid password. Check and try again.$password," . $user['customer_password'] . "";

            }

        } else {
            $sql = "SELECT * FROM `login` WHERE `email_address` = '$email'";
            $result = $this->connection->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $user = $row;
                }

                if (password_verify($password, $user['password'])) {
                    $message['error'] = false;
                    $message['message'] = "Successfully login";
                    $message['id'] = $user['user_id'];
                    $message['is_customer'] = false;

                    $this->createSession($user['user_id'], false);

                } else {
                    $message['error'] = true;
                    $message['message'] = "Invalid password. Check and try again.";

                }

            } else {
                $message['error'] = true;
                $message['message'] = "Email address provided is not in our records. Check and try again.";
            }

        }

        return json_decode(json_encode($message));

    }

    public function createCustomerAccount($user)
    {
        $message = [];

        $firstName = $user['first_name'];
        $lastName = $user['last_name'];
        $customerPassword = $user['password'];
        $emailAddress = $user['email'];
        $customerAddress = $user['address'];
        $phoneNumber = $user['phone'];
        $city = $user['city'];
        $state = $user['state'];
        $zipCode = $user['zip'];

        if (!$this->isEmailExists($emailAddress, 'customer')) {
            $hashedPassword = password_hash($customerPassword, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `customer`(`first_name`, `last_name`, `customer_password`, `email_address`, `customer_address`, `phone_number`, `city`, `state`, `zip_code`)
            VALUES ('$firstName','$lastName','$hashedPassword','$emailAddress','$customerAddress','$phoneNumber','$city','$state','$zipCode')";

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
    public function createAdminAccount($user)
    {
        $message = [];

        $name = $user['name'];
        $password = $user['password'];
        $emailAddress = $user['email'];
        $phoneNumber = $user['phone'];

        if (!$this->isEmailExists($emailAddress, 'login')) {
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

    private function isEmailExists($email, $table)
    {
        $sql = "SELECT * FROM $table WHERE email='$email'";
        $result = $this->connection->query($sql);

        return $result > 0;
    }

    private function createSession($id, $isCustomer)
    {
        if ($isCustomer) {
            $_SESSION['id'] = $id;
        } else {
            $_SESSION['admin'] = $id;
        }
    }
}