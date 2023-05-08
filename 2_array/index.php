<!-- Skriv ett program i PHP som skriver ut alla element från en array av strängar.
 Arrayen ska kunna vara hur lång eller kort som helst och programmet ska fungera ändå. 
 Utskriften ska vara snygg HTML som formatterar alla strängar som en numrerad punktlista.

Tips:
https://www.php.net/manual/en/control-structures.for.php
https://www.php.net/manual/en/control-structures.foreach.php -->

<?php 

$courses = [
    [
        "name" => "Hypertext Preprocessor",
        "code" => "php",
    ],
    [
        "name" => "C plus plus",
        "code" => "c++",
    ],
    [
        "name" => "Javascript",
        "code" => "JS",
    ],
    [
        "name" => "Typescript",
        "code" => "TS",
    ],
    [
        "name" => "Hupertext Markup Language",
        "code" => "HTML",
    ],
    [
        "name" => "Cascading Style Sheets ",
        "code" => "CSS",
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<ol>
<?php foreach($courses as $key => $value){
    echo "<li>Name: $value[name] <br> Code: $value[code]</li><br>";   
} ?>
</ol>
</body>
</html>