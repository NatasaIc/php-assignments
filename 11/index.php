/*Lägg till så att varje student går i en klass.
Lägga till e-post för varje student
Lägg till tre studenter till.
*/

<?php

    $students = [
        [
            "id" => 1,
            "name" => "Natasa Iconomou",
            "email" => "natasa@ngt.se",
            "grade" => "VG",
            "class" => "B1"
        ],
        [
            "id" => 2,
            "name" => "Patrik Larsson",
            "email" => "patrik@ngt.se",
            "grade" => "VG",
            "class" => "B3"
        ],
        [
            "id" => 3,
            "name" => "Elli Iconomou",
            "email" => "elli@ngt.se",
            "grade" => "VG",
            "class" => "B1"
        ],
        [
            "id" => 4,
            "name" => "Maria Wiber",
            "email" => "maria@ngt.se",
            "grade" => "VG",
            "class" => "B3",
            "class" => "B3"
        ],
        [
            "id" => 5,
            "name" => "Sara Larsson",
            "email" => "sara@ngt.se",
            "grade" => "VG",
            "class" => "B1"
        ],
        [
            "id" => 6,
            "name" => "Stephanie Eriksson",
            "email" => "stephanie@ngt.se",
            "grade" => "VG",
            "class" => "B1"
        ]
    ];

    $chosen_student = [
        "name" => "",
        "email" => "",
        "grade" => "",
        "class" => "",
    ];

    if(isset($_GET['id'])){
        $sanitized_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $chosen_id = filter_var($sanitized_id, FILTER_VALIDATE_INT);

        foreach($students as $find_student){
            if($find_student['id'] === $chosen_id){
                $chosen_student = $find_student;
            }
        }
    }

    include "view.php";
?>