<?php

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
        $sql = "SELECT * FROM `bus`";
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
}