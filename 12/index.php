<!-- Lagra lite data på länder (exvis landets namn, huvudstad, världsdel osv). 
Det räcker med fem länder och 3-5 saker per land.

Förslagsvis lägger du denna data i en array av associativa arrayer.

Vi vill skapa en index.php som visar upp en lista med länkar med alla länders namn. 
När man klickar på ett lands namn ska man komma till index.php igen men nu ska all data om landet visas upp nedanför listan.

Programmet ska fungera oavsett antal länder.

Gör programmet så robust som möjligt (med de kunskaper vi har så här långt).

Utmaning: Lägg till en nyckel “isDemocracy” som är antingen true eller false. 
När du visar data om landet ska denna visas som en “Demokrati ☑️” eller “Demokrati ❌”.

Utmaning: Lägg till en nyckel “famousFor” som innehåller en array av strängar med saker landet är känt för. 
Dessa ska sedan visas upp som en punktlista när man klickar in på landet. -->


<?php 

$countries = [
    [
        "id" => 1,
        "name" => "Afghanistan",
        "capital" => "Kabul",
        "continent_code" => "AFG",
        "isDemocracy" => "❌",
        "famousFor" => "Afghanistan has a history of more than six thousand years, 
        with many historical sights and attractions, among these are the more than two thousand year old famous 
        Buddha Statues, the tomb of Hazrate Ali (the son in law of Prophet Mohammed p.b.u.h and the fourth caliph of Islam)"
    ],
    [
        "id" => 2,
        "name" => "Algeria",
        "capital" => "Abuja",
        "continent_code" => "ALA",
        "isDemocracy" => "☑️",
        "famousFor" => "Algeria is best known for being filled with legendary landscapes that include 
        perfectly preserved Roman ruins and the Sahara Desert."
    ],
    [
        "id" => 3,
        "name" => "Andorra",
        "capital" => "Andorra la Vella",
        "continent_code" => "AND",
        "isDemocracy" => "❌",
        "famousFor" => "Andorra is known for its vast natural parks, mind-blowing ski slopes, and high-end, 
        
        duty-free shopping. Andorra is also famous for having the highest capital in Europe, 
        being the only co-principality in the world, and the only country with Catalan as its official language."
    ],
    [
        "id" => 4,
        "name" => "Angola",
        "capital" => "Luanda",
        "continent_code" => "AGO",
        "isDemocracy" => "❌",
        "famousFor" => "Oil is the most obvious answer. 
        Angola is one of the major oil producers and exporters of Africa and the World. What is this? According to the U.S. 
        Energy Information Administration, Angola produced more than 1.1 million barrels in 2021, 
        making it the 4th largest producer in Africa and 19th in the world.Oil is the most obvious answer. 
        Angola is one of the major oil producers and exporters of Africa and the World. 
        What is this? According to the U.S. Energy Information Administration, Angola produced more than 1.1 
        million barrels in 2021, making it the 4th largest producer in Africa and 19th in the world."
    ],
    [
        "id" => 5,
        "name" => "Anguilla",
        "capital" => "The Valley",
        "continent_code" => "AIA",
        "isDemocracy" => "❌",
        "famousFor" => "Anguilla is noted for its ecologically important coral reefs and beaches. 
        Apart from the main island of Anguilla itself, the territory includes a number of other smaller islands and cays, 
        mostly tiny and uninhabited: Anguillita. Blowing Rock."
    ],
    [
        "id" => 6,
        "name" => "Argentina",
        "capital" => "Buenos Aires",
        "continent_code" => "ARG",
        "isDemocracy" => "☑️",
        "famousFor" => "Argentina is known for its passion for soccer, Mate culture,
         and love for Tango. With stunning natural landscapes in Patagonia to vibrant city life in Buenos Aires, 
         the country offers a unique experience for travelers.
         Argentina is also famous for its quality wine, delicious food, and world-renowned landmarks."
    ]
    ];

    $chosen_country = [
        "name" => "",
        "capital" => "",
        "continent_code" => "",
        "isDemocracy" => "",
        "famousFor" => ""
    ];

    if(isset($_GET["id"])) {
        $sanitized_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
        $chosen_id = filter_var($sanitized_id, FILTER_VALIDATE_INT);

        foreach($countries as $find_country) {
            if($find_country["id"] === $chosen_id) {
                $chosen_country = $find_country;
            }
        }
    }

    include "view.php";

?>