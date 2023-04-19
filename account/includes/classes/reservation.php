<?php

require_once 'database.php';
require_once 'bus.php';

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
        if ($this->hasActiveReservation($reservation['user_id'])) {
            $message = [];
            $sql = "INSERT INTO `reservation`(`customer_id`, `bus_id`, `departure_date`, `departure_time`, `arrival_date`, `arrival_time`, `departure_location`, `arrival_location`, `payment_total`)
        VALUES ('" . $reservation['user_id'] . "','" . $reservation['bus_id'] . "','" . $reservation['dept_date'] . "','" . $reservation['dept_time'] . "','" . $reservation['arr_date'] . "','" . $reservation['arr_time'] . "','" . $reservation['dept_location'] . "','" . $reservation['arr_location'] . "','" . $reservation['fee'] . "')";
            $result = $this->connection->query($sql);
            // Get the reservation ID of the last inserted row
            $reservation_id = $this->connection->insert_id;


            if ($result > 0) {
                $bus = new Bus;
                $bus->updateAvailability($reservation['bus_id'], 2);
                $message['error'] = false;
                $message['message'] = "Reservation Made Successfully";
                $message['reservation_id'] = $reservation_id;

            } else {
                $message['error'] = true;
                $message['message'] = "Something happened. Reservation failed. Check and try again.";
                
            }
        } else {
            $message['error'] = true;
            $message['message'] = "Failed!! You alredy have an active reservation. Kindly complete the reservation and try again.";
        }

        return $message;

    }

    public function getCustomerOrders($customer_id)
    {
        $sql = "SELECT `reservation`.*, `bus`.`bus_type`, `bus`.`manufacturer` FROM `reservation` JOIN `bus` ON `reservation`.`bus_id`=`bus`.`bus_id` WHERE `reservation`.`customer_id` = $customer_id";
        $results = $this->connection->query($sql);

        $reservations = [];
        while ($row = $results->fetch_assoc()) {
            array_push($reservations, $row);
        }

        return $reservations;
    }

    private function hasActiveReservation($userID)
    {
        $sql = "SELECT * FROM `reservations` WHERE `customer_id`='$userID' AND `status`=1";
        $results = $this->connection->query($sql);

        return $results->num_rows > 0;
    }

    public function checkOut($paymentDetails)
    {

    }

    public function getReservation($reservationID)
    {
        $userID = $_SESSION['id'];
        $sql = "SELECT `reservation`.*, `bus`.`manufacturer`, `bus`.`bus_type`, `bus`.`fee` 
        FROM `reservation` 
        JOIN `bus` ON `reservation`.`bus_id` = `bus`.`bus_id` WHERE `reservation_id` = '$reservationID' AND `customer` = '$userID' AND `status`=2";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $reservation = $row;
            }
            return $reservation;
        } else {
            return null;
        }
    }
}