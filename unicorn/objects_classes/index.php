<?php 
//PART 1-2
// declare(strict_types=1);

// class Unicorn {
//     private $name = "";
//     private $color = "pink";
//     private $age = 0;

//     function __construct(string $name, string $color = "pink", int $age){
//         $this->name = $name;
//         $this->color = $color;
//         $this->age = $age;
//     }

//     public function getMessage(): string{
//         return "<p>Unicorn {$this->name} says hello I am {$this->color} and {$this->age} years old!</p>";
//     }
// }

// class RenderUnicorn {
//     public function renderMessage(Unicorn $unicorn): void {
//         echo $unicorn->getMessage();
//     }
// }

// $u = new Unicorn("Bosse", "light green", 16);
// $v = new Unicorn("Lisa", "blue", 15);

// $renderer = new RenderUnicorn();
// $renderer->renderMessage($u);
// $renderer->renderMessage($v);

// PART 3-4
// declare(strict_types=1);

// class Unicorn {
//     private $name = "";
//     private $color = "pink";
//     private $age = 0;

//     function __construct(string $name, string $color = "pink", int $age){
//         $this->name = $name;
//         $this->color = $color;
//         $this->age = $age;
//     }

//     public function getMessage(): string{
//         return "<p> {$this->name} says hello I am {$this->color} and {$this->age} years old!</p>";
//     }
// }

// class RenderUnicorn {
//     public function renderMessage(Unicorn $unicorn): void {
//         echo $unicorn->getMessage();
//     }
// }


// $unicorns = [];
// for($i = 0; $i < 5; $i++) {
//     $name = "Unicorn " . ($i + 1);
//     $age = rand(1, 100);
//     $color = sprintf('#%06X', rand(0, 0xFFFFFF));
//     $unicorns[] = new Unicorn($name, $color, $age);
// }

// $renderer = new RenderUnicorn();
// foreach ($unicorns as $unicorn) {
// $renderer->renderMessage($unicorn);
// }

declare(strict_types=1);

class Unicorn {
    private $name = "";
    private $color = "";
    private $age = 0;

    function __construct(string $name, string $color, int $age){
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    public function getMessage(): string{
        return "<p>{$this->name} says hello I am {$this->color} and {$this->age} years old!</p>";
    }

    public function getName(): string {
        return "<li>{$this->name}</li><br>";
    }

    public function getColor(): string {
        return "<li>{$this->color}</li><br>";
    }
}

class UnicornHotell {
    private $unicorns = [];

    function __construct($unicorns) {
        $this->unicorns = $unicorns;
    }

    function getUnicorns() {
        return $this->unicorns;
    }

}

class RenderColor {
    function renderColor(Unicorn $unicorn): string {
        return $unicorn->getColor();
    }
}

class RenderName {
    function renderName(Unicorn $unicorn): string {
        return $unicorn->getName();
    }
}

class RenderUnicorn {
    function renderUnicornInfo(Unicorn $unicorn): string {
        return $unicorn->getMessage();
    }
}

$allUnicorns = new UnicornHotell(
    [
        new Unicorn("Lisa","Pink", 12),
        new Unicorn("Jack","Green", 15),
        new Unicorn("Pearl","Silver", 17),
        new Unicorn("Sofie","Blue", 19),
        new Unicorn("Bob","Yellow", 22),
        new Unicorn("Bosse","Orange", 32),
    ],
);

$render = new RenderUnicorn();
$renderName = new RenderName();
$renderColor = new RenderColor();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn Hotell</title>
</head>
<body>
    <h1>🦄Unicorns🦄</h1>
    <?php
    foreach($allUnicorns->getUnicorns() as $unicorn) {
        echo $render->renderUnicornInfo($unicorn);
    }
    ?>
 <h1>List Name</h1>
 <ol>
    <?php
    foreach($allUnicorns->getUnicorns() as $unicorn) {
        echo $renderName->renderName($unicorn);
    }
    ?>
</ol>

 <h1>List Color</h1>
 <ol>
    <?php
    foreach($allUnicorns->getUnicorns() as $unicorn) {
        echo $renderColor->renderColor($unicorn);
    }
    ?>
</ol>
</body>
</html>