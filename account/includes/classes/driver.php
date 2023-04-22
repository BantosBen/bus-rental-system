<?php

require_once 'database.php';

class Driver
{
    private $connection;

    public function __construct()
    {
        $db = new Database;

        $this->connection = $db->connection;
    }


    public function updateAVailability($driverID, $availability)
    {
        $sql = "UPDATE `driver` SET `status` = '$availability' WHERE driver_id = $driverID";
        $this->connection->query($sql);
    }

    public function getAvailableDrivers()
    {
        $sql = "SELECT * FROM `driver` WHERE `status`='available'";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            $drivers = [];

            while ($row = $result->fetch_assoc()) {
                array_push($drivers, $row);
            }

            return $drivers;
        } else {
            return null;
        }
    }

    public function getCount()
    {
        $sql = "SELECT * FROM `driver`";
        $results = $this->connection->query($sql);

        return $results->num_rows;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `driver`";
        $results = $this->connection->query($sql);

        if ($results->num_rows > 0) {
            $drivers = [];
            while ($row = $results->fetch_assoc()) {
                array_push($drivers, $row);
            }
            return $drivers;
        } else {
            return null;
        }
    }

    public function insert($driver)
    {
        $sql = "INSERT INTO `driver`(`first_name`, `last_name`, `email_address`, `phone_number`, `license_number`) 
        VALUES ('{$driver['first_name']}', '{$driver['last_name']}', '{$driver['email']}', '{$driver['phone']}', '{$driver['license_number']}')";
        $this->connection->query($sql);

    }

    public function update($driver)
    {
        $sql = "UPDATE `driver` SET 
        `first_name`='{$driver['first_name']}', 
        `last_name`='{$driver['last_name']}', 
        `email_address`='{$driver['email']}', 
        `phone_number`='{$driver['phone']}', 
        `license_number`='{$driver['license_number']}' 
        WHERE `driver_id`='{$driver['id']}'";
        $this->connection->query($sql);
    }

    public function delete($driverID)
    {
        $sql = "DELETE FROM `driver` WHERE `driver_id`='$driverID'";
        $this->connection->query($sql);
    }


}