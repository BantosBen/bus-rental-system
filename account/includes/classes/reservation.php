<?php

require_once 'database.php';

class Reservation
{
    private $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->connection;
    }

    public function makeReservation($reservation)
    {
        $message = [];
        $sql = "INSERT INTO `reservation`(`customer_id`, `bus_id`, `departure_date`, `departure_time`, `arrival_date`, `arrival_time`, `departure_location`, `arrival_location`, `payment_total`)
        VALUES ('" . $reservation['user_id'] . "','" . $reservation['bus_id'] . "','" . $reservation['dept_date'] . "','" . $reservation['dept_time'] . "','" . $reservation['arr_date'] . "','" . $reservation['arr_time'] . "','" . $reservation['dept_location'] . "','" . $reservation['arr_location'] . "','" . $reservation['fee'] . ")";
        $result = $this->connection->query($sql);

        if ($result > 0) {
            $bus = new Bus;
            $bus->updateAvailability($reservation['bus_id'], 2);
            $message['error'] = false;
            $message['message'] = "Reservation Made Successfully";

        } else {
            $message['error'] = true;
            $message['message'] = "Something happened. Registration failed. Check and try again.";

        }

        return $message;

    }
}
