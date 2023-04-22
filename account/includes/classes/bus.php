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
        $sql = "SELECT bus.*, AVG(customer_review.rating) AS avg_rating
FROM bus
LEFT JOIN customer_review ON bus.bus_id = customer_review.bus_id
GROUP BY bus.bus_id
ORDER BY avg_rating DESC
LIMIT 6;
";
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

    public function getCount()
    {
        $sql = "SELECT * FROM `bus`";
        $results = $this->connection->query($sql);

        return $results->num_rows;
    }

    public function delete($busID)
    {
        $sql = "DELETE FROM `bus` WHERE `bus_id`=$busID";
        $result = $this->connection->query($sql);
    }

    public function update($bus)
    {
        $sql = "UPDATE `bus` SET 
        `bus_type`='" . $bus['bus_type'] . "', 
        `manufacturer`='" . $bus['manufacturer'] . "', 
        `model`='" . $bus['model'] . "', 
        `year`='" . $bus['year'] . "', 
        `seating_capacity`='" . $bus['seating_capacity'] . "', 
        `licenseplate_number`='" . $bus['licenseplate_number'] . "', 
        `fee`='" . $bus['fee'] . "'";

        if (!empty($bus['image'])) {
            $sql .= ", `image`='" . $bus['image'] . "'";
        }

        $sql .= " WHERE `bus_id`='" . $bus['id'] . "'";

        $result = $this->connection->query($sql);
    }

    public function insert($bus)
    {
        $sql = "INSERT INTO `bus`(`bus_type`, `manufacturer`, `model`, `year`, `seating_capacity`, `licenseplate_number`, `fee`, `image`) 
        VALUES ('{$bus['bus_type']}', '{$bus['manufacturer']}', '{$bus['model']}', '{$bus['year']}', '{$bus['seating_capacity']}', '{$bus['licenseplate_number']}', '{$bus['fee']}', '{$bus['image']}')";
        $this->connection->query($sql);
    }

}