<?php

require 'model/student-model.php';
require 'view/student-api.php';

$studentModel = new StudentModel();
$studentApi = new StudentApi();


// $studentApi->outputStudents($studentModel->getAllStudents());

if(isset($_GET['action'])) {
    $choseAction = filter_var($_GET['action'], FILTER_SANITIZE_SPECIAL_CHARS);

        if($choseAction == 'students') {
            $studentApi->outputStudents($studentModel->getAllStudents());
        }
}
// http://localhost/PHP-assignments/school-api/?action=students
?>