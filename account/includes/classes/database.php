<?php

session_start();

/**
 * Summary of Database
 */
class Database
{
    public $connection;

    public function __construct()
    {
        $this->connection = new mysqli("localhost", "gloyaldi_saferoute", "123saferoute!@#", "gloyaldi_saferoute");
    }
}
