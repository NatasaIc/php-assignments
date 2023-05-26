<?php

class StudentModel
{

    private $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $db = 'skola';
        $user = 'skola';
        $password = '333abc';
        $charset = 'utf8';
       $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false
        ];
        $pdo = new PDO($dsn, $user, $password, $options);
        $this->pdo = $pdo;
    }

    function getAllStudents()
    {
        $statement = $this->pdo->prepare('SELECT students.*,class.name AS class_name FROM students JOIN class ON students.class_id=class.id;');
        $statement->execute();
        return $statement->fetchAll();
    }

    function getSingleStudent(int $id) {
        $statement = $this->pdo->prepare("SELECT students.*, class.name AS class_name FROM students JOIN class ON class.id=students.class_id WHERE students.id = ?;");
        $statement->execute([$id]);
        return $statement->fetchAll();
    }
}