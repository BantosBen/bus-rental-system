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
}
