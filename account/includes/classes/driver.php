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
}