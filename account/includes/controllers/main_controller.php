<?php

require_once 'account/includes/classes/bus.php';

$tableBus = new Bus;
$buses = $tableBus->getTopBuses();

$busContent = '';
if (count($buses) > 0) {
    foreach ($buses as $bus) {
        $buttonReservation = ($bus['availability'] == 1) ? '<a href="account/make-reservation.php?id=' . $bus['bus_id'] . '&fee=' . $bus['fee'] . '&bus=' . $bus['bus_type'] . ' ' . $bus['manufacturer'] . '" type="button" class="btn btn-block btn-outline-primary btn-sm" id="btn-' . $bus['bus_id'] . '">Book Now</a>' : '';
        $busContent .= '<div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card mb-3">
                                <div class="card-img">
                                    <img src="assets/img/service-1.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="card-title">' . $bus['bus_type'] . '</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="card-title"><strong>$' . $bus['fee'] . '/Day</strong></h5>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-6">
                                            <p class="card-text">
                                                <i class="bi bi-bus"></i>
                                                <span><b>Manufacturer:</b></span>
                                                ' . $bus['manufacturer'] . '
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text">
                                                <i class="bi bi-cog"></i>
                                                <span><b>Model:</b></span>
                                                ' . $bus['model'] . '
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-6">
                                            <p class="card-text">
                                                <i class="bi bi-calendar-alt"></i>
                                                <span><b>Year:</b></span>
                                                ' . $bus['year'] . '
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text">
                                                <i class="bi bi-chair"></i>
                                                <span><b>Capacity:</b></span>
                                                ' . $bus['seating_capacity'] . '
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-6">
                                            <p class="card-text">
                                                <i class="bi bi-car"></i>
                                                <span><b>Plate Number:</b></span>
                                                ' . $bus['licenseplate_number'] . '
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text">';

        $availability = ($bus['availability'] == 1) ? '<i class="bi bi-circle-fill" style="color: green;"></i> Available' : '<i class="bi bi-circle-fill" style="color: red;"></i> Unavailable';
        $busContent .= $availability;
        $button = '</p></div></div><div class="row mt-3">
    ' . $buttonReservation . '
                        </div>
                    </div>
                </div>
            </div>';
        $busContent .= $button;
    }
}
