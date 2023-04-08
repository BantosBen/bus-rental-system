<?php

/**
 * Summary of Database
 */
class Database
{
    public $connection;

    public function __construct()
    {
        $this->connection = new mysqli("localhost", "root", "", "bus_rental_system");
    }
}
