<?php
require_once 'db.php';

class ClassModel extends {

function getAllClasses() {
$stmt = $this->pdo->prepare('SELECT * FROM class');
$stmt->execute();
return $stmt->fetchAll();
}

}