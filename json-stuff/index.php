<?php
$dog = [
"name" => "Max", 
"race" => "Labrador Retriver", 
"weight" => 25, 
"height" => 56, 
"age" => 5, 
"color" => "yellow"    
];

$dogs = [
    [
        "name" => "Max",
        "race" => "Labrador",
        "weight" => 25,
        "height" => 60,
        "age" => 4,
        "color" => "gul"
    ],
    [
        "name" => "Bella",
        "race" => "Golden Retriever",
        "weight" => 30,
        "height" => 55,
        "age" => 3,
        "color" => "gul"
    ],
    [
        "name" => "Charlie",
        "race" => "Schäfer",
        "weight" => 35,
        "height" => 65,
        "age" => 5,
        "color" => "svart"
    ]
];

// header("Content-Type: application/json");
// echo json_encode($dogs);


// STUDENTER
$student = [
    "id" => 1,
    "name" => "Natasa Iconomou",
    "email" => "natasa@ngt.se",
    "age" => 33,
    "class" => "B1"
];


$students = [
        [
            "id" => 1,
            "name" => "Natasa Iconomou",
            "email" => "natasa@ngt.se",
            "age" => 33,
            "class" => "B1"
        ],
        [
            "id" => 2,
            "name" => "Patrik Larsson",
            "email" => "patrik@ngt.se",
            "age" => 22,
            "class" => "B3"
        ],
        [
            "id" => 3,
            "name" => "Elli Iconomou",
            "email" => "elli@ngt.se",
            "age" => 25,
            "class" => "B1"
        ],
        [
            "id" => 4,
            "name" => "Maria Wiber",
            "email" => "maria@ngt.se",
            "age" => 42,
            "class" => "B3",
            "class" => "B3"
        ],
        [
            "id" => 5,
            "name" => "Sara Larsson",
            "email" => "sara@ngt.se",
            "age" => 21,
            "class" => "B1"
        ],
        [
            "id" => 6,
            "name" => "Stephanie Eriksson",
            "email" => "stephanie@ngt.se",
            "age" => 36,
            "class" => "B1"
        ]
    ];

// header("Content-Type: application/json");
// echo json_encode($students);


// MONSTER

$monsters = [ 
    "numbers" => 
    [
    'a' => 10, 
    'b' => 20, 
    'c' => 30
    ],
    "result" =>
    [
        'name' => 'Monster 1',
        'color' => 'Green',
        'age' => 100,
        'eyes' => 3,
        'arms' => 4
    ],
    [
        'name' => 'Monster 2',
        'color' => 'Blue',
        'age' => 200,
        'eyes' => 2,
        'arms' => 3
    ],
    [
        'name' => 'Monster 3',
        'color' => 'Red',
        'age' => 300,
        'eyes' => 1,
        'arms' => 2
    ],
    [
        'name' => 'Monster 4',
        'color' => 'Yellow',
        'age' => 400,
        'eyes' => 1,
        'arms' => 2
    ]
    
    ];

header("Content-Type: application/json");
echo json_encode($monsters);
?>
