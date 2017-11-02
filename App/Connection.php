<?php

namespace App;

class Connection
{
    public static function getDb()
    {
        return new \PDO("mysql:host=localhost;dbname=mvc","root","1208");
    }
}