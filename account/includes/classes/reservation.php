<?php

require_once 'database.php';
require_once 'bus.php';
require_once 'driver.php';

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
        if (!$this->hasActiveReservation($reservation['user_id'])) {
            $this->clearUnpaidReservations();
            $message = [];
            $sql = "INSERT INTO `reservation`(`customer_id`, `bus_id`, `departure_date`, `departure_time`, `arrival_date`, `arrival_time`, `departure_location`, `arrival_location`, `payment_total`, `driver_id`)
        VALUES ('" . $reservation['user_id'] . "','" . $reservation['bus_id'] . "','" . $reservation['dept_date'] . "','" . $reservation['dept_time'] . "','" . $reservation['arr_date'] . "','" . $reservation['arr_time'] . "','" . $reservation['dept_location'] . "','" . $reservation['arr_location'] . "','" . $reservation['fee'] . "','" . $reservation['driver'] . "')";
            $result = $this->connection->query($sql);
            // Get the reservation ID of the last inserted row
            $reservation_id = $this->connection->insert_id;


            if ($result > 0) {
                $bus = new Bus;
                $bus->updateAvailability($reservation['bus_id'], 2);
                $driver = new Driver;
                $driver->updateAVailability($reservation['driver'], "unavailable");

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

    public function checkOut($amount, $reservationID)
    {
        $message = [];
        $userID = $_SESSION['id'];
        $sql = "INSERT INTO `payment`(`reservation_id`, `customer_id`, `payment_method`, `amount`) VALUES ('$reservationID','$userID','Credit Card','$amount')";
        $response = $this->connection->query($sql);

        if ($response > 0) {
            $sql = "UPDATE `reservation` SET `status`=1 WHERE `reservation_id`=$reservationID";
            $response = $this->connection->query($sql);

            if ($response > 0) {
                $message['error'] = false;
                $message['message'] = "Reservation Successful";
            } else {
                $message['error'] = true;
                $message['message'] = "Failed!!Reservation activate failed. Kindly contact the Admin for assistance.";
            }
        } else {
            $message['error'] = true;
            $message['message'] = "Failed!! Something went wrong. Kindly try again later.";
        }

        return $message;
    }

    public function getReservation($reservationID)
    {
        $userID = $_SESSION['id'];
        $sql = "SELECT `reservation`.*, `bus`.`manufacturer`, `bus`.`bus_type`, `bus`.`fee` 
        FROM `reservation` 
        JOIN `bus` ON `reservation`.`bus_id` = `bus`.`bus_id` WHERE `reservation_id` = '$reservationID' AND `customer_id` = '$userID' AND `status`=2";
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

    private function clearUnpaidReservations()
    {
        $userID = $_SESSION['id'];

        $sql = "DELETE FROM `reservation` WHERE `customer_id`=$userID AND status=2";
        $this->connection->query($sql);
    }

    public function getActiveReservation()
    {
        $userID = $_SESSION['id'];
        $sql = "SELECT * FROM `reservation` WHERE `customer_id`=$userID AND status=1";
        $response = $this->connection->query($sql);

        if ($response->num_rows > 0) {
            $bus = new Bus;
            while ($row = $response->fetch_assoc()) {
                $row['bus'] = $bus->getBus($row['bus_id']);
                return $row;
            }
        } else {
            return null;
        }
    }

    public function changeReservationStatus($id, $status)
    {
        $sql = "UPDATE `reservation` SET `status`=$status WHERE `reservation_id`='$id'";
        $response = $this->connection->query($sql);

        return $response > 0;
    }

    public function addCustomerReview($reservationID, $busID, $reviewMessage, $ratings)
    {
        $message = [];

        if ($this->changeReservationStatus($reservationID, 0)) {

            $this->releaseResources($reservationID);

            $userID = $_SESSION['id'];
            $sql = "INSERT INTO `customer_review`(`customer_id`, `bus_id`, `rating`, `review_text`) VALUES ($userID,$busID,$ratings,'$reviewMessage')";
            $this->connection->query($sql);

            $message['error'] = false;
            $message['message'] = "Review submitted. Thank you for your feedback.";
        } else {
            $message['error'] = true;
            $message['message'] = "Failed!! Something went wrong. Kindly try again later.";
        }

        return json_encode($message);
    }

    public function completeReservation($reservationID)
    {
        $message = [];

        if ($this->changeReservationStatus($reservationID, 0)) {

            $this->releaseResources($reservationID);

            $message['error'] = false;
            $message['message'] = "Reservation Completed. Thank you for using our services";
        } else {
            $message['error'] = true;
            $message['message'] = "Failed!! Something went wrong. Kindly try again later.";
        }

        return json_encode($message);
    }


    public function cancelReservation($reservationID)
    {
        $message = [];
        if ($this->changeReservationStatus($reservationID, 3)) {

            $this->releaseResources($reservationID);

            $message['error'] = false;
            $message['message'] = "Reservation Cancelled. We're sad you're terminating your reservation.";
        } else {
            $message['error'] = true;
            $message['message'] = "Failed!! Something went wrong. Kindly try again later.";
        }

        return json_encode($message);
    }

    private function getReservationByID($reservationID)
    {
        $sql = "SELECT * FROM `reservation` WHERE `reservation_id`=$reservationID";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row;
            }
        } else {
            return null;
        }
    }

    private function releaseResources($reservationID)
    {
        $reservation = $this->getReservationByID($reservationID);

        $bus = new Bus;
        $bus->updateAvailability($reservation['bus_id'], 1);

        $driver = new Driver;
        $driver->updateAVailability($reservation['driver_id'], "available");
    }

    public function getActiveReservations()
    {
        $sql = "SELECT `reservation`.*, `bus`.`manufacturer`, `bus`.`bus_type` 
        FROM `reservation` 
        JOIN `bus` ON `reservation`.`bus_id` = `bus`.`bus_id` WHERE `reservation`.`status`=1";
        $results = $this->connection->query($sql);

        $reservations = [];
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                array_push($reservations, $row);
            }
            return $reservations;
        } else {
            return null;
        }
    }

    public function getAll()
    {
        $sql = "SELECT `reservation`.*, `bus`.`bus_type`, `customer`.`first_name`, `customer`.`last_name`, `customer`.`phone_number` 
        FROM `reservation`
        JOIN `bus` ON `reservation`.`bus_id` = `bus`.`bus_id`
        JOIN `customer` ON `reservation`.`customer_id` = `customer`.`customer_id`";

        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            $reservations = [];
            while ($row = $result->fetch_assoc()) {
                array_push($reservations, $row);
            }
            return $reservations;
        } else {
            return null;
        }
    }

    public function cancel($reservationID)
    {
        $sql = "UPDATE `reservation` SET `status`=3 WHERE `reservation_id` = $reservationID";
        $this->connection->query($sql);
    }

    public function getAllReviews()
    {
        $sql = "SELECT `customer_review`.*, `bus`.`bus_type`, `bus`.`manufacturer` 
        FROM `customer_review`
        JOIN `bus` ON `customer_review`.`bus_id` = `bus`.`bus_id`";

        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            $reviews = [];
            while ($row = $result->fetch_assoc()) {
                array_push($reviews, $row);
            }
            return $reviews;
        } else {
            return null;
        }
    }
}