<?php

session_start();

require_once 'includes/classes/reservation.php';

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

$reserve = new Reservation;

$reservations = $reserve->getCustomerOrders($_SESSION['id']);

$table_content = '';
if (count($reservations) > 0) {
    foreach ($reservations as $reservation) {
        $table_content .= '<tr>
                      <td>' . $reservation['reservation_id'] . '</td>
                      <td>' . $reservation['bus_type'] . ' ' . $reservation['manufacturer'] . '</td>
                      <td>' . $reservation['departure_date'] . ' ' . $reservation['departure_time'] . '</td>
                      <td>' . $reservation['arrival_date'] . ' ' . $reservation['arrival_time'] . '</td>
                      <td>
                        ' . $reservation['departure_location'] . ' - ' . $reservation['arrival_location'] . '
                      </td>
                      <td>' . $reservation['payment_total'] . '</td>
                    </tr>';
    }
}
