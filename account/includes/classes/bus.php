<?php

require_once 'database.php';

class Bus
{
    private $connection;

    public function __construct()
    {
        $db = new Database;

        $this->connection = $db->connection;
    }

    public function getAllBuses()
    {
        $sql = "SELECT * FROM `bus` ORDER BY RAND()";
        $result = $this->connection->query($sql);

        $buses = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($buses, $row);
            }
            return $buses;
        } else {
            return null;
        }
    }

    public function updateAvailability($busID, $availability)
    {
        $sql = "UPDATE `bus` SET availability = $availability WHERE bus_id = $busID";
        $this->connection->query($sql);
    }

    public function getTopBuses()
    {
        $sql = "SELECT * FROM `bus` ORDER BY RAND() LIMIT 3;";
        $result = $this->connection->query($sql);

        $buses = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($buses, $row);
            }
            return $buses;
        } else {
            return null;
        }

    }

    public function getBus($busID)
    {
        $sql = "SELECT * FROM `bus` WHERE `bus_id`=$busID";
        $response = $this->connection->query($sql);

        if ($response->num_rows > 0) {
            while ($row = $response->fetch_assoc()) {
                return $row;
            }
        } else {
            return null;
        }
    }
}