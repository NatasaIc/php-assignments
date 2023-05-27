<?php
require_once 'db.php';

class StudentModel extends DB {

    function getAllStudents() {
        $statement = $this->pdo->prepare('SELECT * FROM students');
        $statement->execute();
        return $statement->fetchAll();
    }

    function getSingleStudent(int $id) {
        $statement = $this->pdo->prepare("SELECT students.*, class.name AS class_name FROM students JOIN class ON class.id=students.class_id WHERE students.id = ?;");
        $statement->execute([$id]);
        return $statement->fetchAll();
    }
}