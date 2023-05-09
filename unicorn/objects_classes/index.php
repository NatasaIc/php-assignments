<?php 
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
    private $color = "pink";
    private $age = 0;

    function __construct(string $name, string $color = "pink", int $age){
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    public function getMessage(): string{
        return foreach($u as $unicorns){
            "<p>{$this->name} says hello I am {$this->color} and {$this->age} years old!";)
        }
    }
}

class RenderUnicorn {
    public function renderMessage(Unicorn $unicorn): void {
        echo $unicorn->getMessage();
    }
}

$u = new Unicorn(
    [
        "name" => "Bosse", 
        "color" => "light green", 
        "age" => 16
    ],
    [
        "name" => "Lisa", 
        "color" => "blue", 
        "age" => 15
    ],
    [
        "name" => "Pearl", 
        "color" => "white", 
        "age" => 18
    ],
    [
        "name" => "Maggie", 
        "color" => "yellow", 
        "age" => 20
    ],
    [
        "name" => "Jack", 
        "color" => "orange", 
        "age" => 24
    ]
    );

$renderer = new RenderUnicorn();
$renderer->renderMessage($u);
?>
