<?php

require "connection.php";

$id = $_GET["id"]; // här ska vi sanera och validera!

// $sql = "SELECT * FROM  monkeys";
// $statement = $pdo->query($sql);
$data = [
        'name' => "Marry",
        'age' => 34,
        'color' => "grey"
    ];

// $sql = "SELECT * FROM  monkeys WHERE id=?";
$sql = "INSERT INTO monkeys (name, age, color) VALUES (:name,:age,:color)";

$statement = $pdo->prepare($sql);
$statement->execute($data);

$monkeys = $statement->fetchAll(PDO::FETCH_ASSOC);

// $benny = $monkeys[0];
// echo "{$benny["name"]}";

echo "<ul>";
foreach($monkeys as $monkey) {
 echo "<li>Name: {$monkey["name"]} Age: {$monkey["age"]} Color: {$monkey["color"]}</li>";
}
echo "</ul>";