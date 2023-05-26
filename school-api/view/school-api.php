<?php

class SchoolApi {

    public function outputStudents(array $students): void {
        $json = [
            'student-count' => count($students),
            'result' => $students
        ];
       header("Content-Type: application/json");
       echo json_encode($students);

    }
    public function outputStudent (array $student) {
       header("Content-Type: application/json");
       echo json_encode($student);
    }
}

?>