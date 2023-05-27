<?php

class DB {

private $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $db = 'skola';
        $user = 'skola';
        $password = '333abc';
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $pdo = new PDO($dsn, $user, $password, $options);
        $this->pdo = $pdo;
    }
}
