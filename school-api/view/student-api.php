<?php

class StudentApi {

    public function outputStudents(array $students): void {

       header("Content-Type: application/json");
       echo json_encode($students);

    }
}

?>