<?php

// datadriven applikation om hundar, dvs info om hundar och kunna visa upp denna info

// lagra info om en hund, en klass Dog
// lagra info om alla hundar, dvs en array av Dog-objekt

// visa info om en Dog resp flera, visa info = output HTML, klass RenderDog
// =============================================================================

// DEL 1: Vår data och funktionalitet

class Dog {
    // egenskap = en variabel inne i ett objekt
    private $name = "";
    private $color = "";
    private $age = 0;

    // konstruktor
    function __construct(string $name, string $color, int $age) {
        $this->name = $name; // i JS this.name = name
        $this->color = $color;
        $this->age = $age;
    }

    // metod = funktion inne i objekt
    function getInfo(): string {
        return "Name: {$this->name}, Color: {$this->color}, Age: {$this->age}";
    }

    function getName(): string {
        return "<li><a{$this->name}></a></li>";
    }
}

class DogHotell {
    private $dogs = [];

    function __construct($dogs) {
        $this->dogs = $dogs;
    }

    function getDogs() {
        return $this->dogs;
    }
}

class RenderDog {

    function renderDogInfo(Dog $dog): string {
        return "<p>{$dog->getInfo()}</p>";
    }

}

class RenderName {
    function renderName(Dog $dog): string {
        return $dog->getName();
    }
}
// DEL 2: Vår app

//$testDog = new Dog("Pluto","orange", 12);
$myDogs = new DogHotell([
    new Dog("Pluto","orange", 12),
    new Dog("Pricken","svart-vit", 3),
    new Dog("Lady","beige", 5),
    new Dog("Fox","red", 4)
]);

$render = new RenderDog();
$renderName = new RenderName();

// DEL 3: Vår output = echo HTML

$chosen_dog = [
    "name" => "",
    "color" => "",
    "age" => "",
];

    if(isset($_GET["name"])) {
        $sanitized_name = filter_var($_GET["name"], FILTER_SANITIZE_NUMBER_INT);
        $chosen_name = filter_var($sanitized_name, FILTER_VALIDATE_INT);

        foreach($myDogs as $dog) {
            if($find_dog["name"] === $chosen_name) {
                $chosen_dog = $find_dog;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo-dog-php</title>
</head>
<body>
    <section>
        <h1>🦄Unicorns🦄</h1>
        <ol>
            <?php
                foreach($myDogs as $dog) {
                    echo "<li>
                            <a href='index.php?name={$dog["name"]}'></a>
                        </li>";
                }
            ?>
        </ol>
    </section>
        <h3>Select Unicorn:</h3>
        <ul style="list-style: none">
            <li><strong>Namn:</strong> <?= $chosen_dog["name"] ?></li><br>
            <li><strong>Age:</strong> <?= $chosen_dog["age"] ?></li><br>
            <li><strong>Color:</strong> <?= $chosen_dog["color"] ?></li><br>
        </ul>
    <section>
    
    <h1>&#128054; My Dogs &#128054;</h1>
    <?php
        foreach($myDogs->getDogs() as $dog) {
            echo $render->renderDogInfo($dog);
        }
    ?>

    <?php
        foreach($myDogs->getDogs() as $dog) {
            echo $renderName->renderName($dog);
        }
    ?>

</body>
</html>