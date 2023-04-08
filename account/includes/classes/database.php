<?php

/**
 * Summary of Database
 */
class Database
{
    public $connection;

    public function __construct()
    {
        session_start();
        $this->connection = new mysqli("localhost", "root", "", "bus_rental_system");
    }
}
