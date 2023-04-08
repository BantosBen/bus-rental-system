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
        $this->connection = new mysqli("localhost", "gloyaldi_saferoute", "123saferoute!@#", "gloyaldi_saferoute");
    }
}
