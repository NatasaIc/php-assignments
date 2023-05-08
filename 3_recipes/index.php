 <!-- Vi skapar en array med tre associativa arrayer. 
 Varje associativ array är ett recept. Alla recept har en titel, 
 en lista med ingredienser och en löptext som beskriver hur man lagar måltiden.

Skriv sedan ett program som skriver ut alla recept snyggt formaterade efter varandra.

Utmaning: se till att beskrivningen av hur man lagar måltiden är numrerad UTAN att ha några 
nummer i den associativa arrayen. -->

 <?php

$recipes = [
    ["name" => "applePie",
    "ingredients" =>[
            "Granny Smith Apples",
            "cinnamon",
            "butter",
            "flour",
            "water",
            "sugar",
            "egg",
        ], 
        "instructions" =>[
            "Preheat oven to 425˚F",
            "Melt butter in a medium saucepan over medium heat", 
            "Peel, remove cores and thinly slice 7 cups of apples and place them in a large bowl",
        ],
    ],
    [
        "name" => "blossomCookies",
        "ingredients" =>[
            "sugar",
            "brown sugar",
            "peanut butter",
            "butter",
            "eggs",
            "flour",
            "water",
            "sugar",
            "egg",
        ], 
            "instructions" =>[
            "Heat oven to 375°F. In large bowl, beat 1/2 cup granulated sugar, the brown sugar, peanut butter, butter and egg with electric mixer on medium speed, or mix with spoon, until well blended. Stir in flour, baking soda and baking powder until dough forms.",
            "Shape dough into 1-inch balls; roll in additional granulated sugar. On ungreased cookie sheets, place about 2 inches apart.",
            "Bake 8 to 10 minutes or until edges are light golden brown. Immediately press 1 milk chocolate candy in center of each cookie. Remove from cookie sheets to cooling rack.",
            ],
        ],
];

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>

    
    <h1>Grandmas recapies</h1>

    <h4><?= $recipes[0]["name"] ?></h4>

    <p>Ingredients</p>
    <ul><?php foreach($recipes[0]["ingredients"] as $ingredient) {
        echo "<li>$ingredient</li><br>";
        } 
        ?>
    </ul>
    <p>Instructions</p>
    <ol>
    <?php foreach($recipes[0]["instructions"] as $instruction) {
        echo "<li>$instruction</li><br>";
        } 
        ?>
    </ol>
    <h4><?= $recipes[1]["name"]?></h4>
    <p>Ingredients</p>
    <ul>
    <?php foreach($recipes[1]["ingredients"] as $ingredient) {
        echo "<li>$ingredient</li><br>";
        } 
        ?>
    </ul>
    <p>Instructions</p>
    <ol>
    <?php foreach($recipes[1]["instructions"] as $instruction) {
        echo "<li>$instruction</li><br>";
       } 
       ?>
    </ol>
</head>
<body>
    
</body>
</html>
