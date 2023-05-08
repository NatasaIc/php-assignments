<!-- Skriv ett program som skriver ut 5x5 kvadrater i ett rutmönster.
 Rutorna kan vara div-taggar med en bakgrundsfärg satt. 
 Programmet slumpar från en array med färger.

Utmaning 1: Se till att alla färger används lika många gånger.

Utmaning 2: Se till att två angränsande rutor inte har samma färg.

Utmaning 3: Se till att allt ovan fungerar oavsett hur lång arrayen av färger är 
(testa genom att ändra antalet färger i arrayen).

Tips: https://www.php.net/manual/en/book.random.php -->

<?php 
    function getOneColor($colors) {
        $rand_index = mt_rand(0, count($colors) -1);
        return $colors[$rand_index];
    }

    function initColors(){
    return ["purple", "green", "red", "black", "blue"];
    }

    function cutOneColor($colors){
    global $colors;
    
     // get a random color from the $colors array
    if(count($colors) === 0){
        $colors = initColors();
    }
    $rand_index = mt_rand(0, count($colors)-1);
    return array_splice($colors,$rand_index,1)[0];
    }

    $pattern_size = 5;
    $colors = [];
    $pattern = [];

    // generate square pattern and store in $pattern
 for($i=0; $i<$pattern_size; $i++){
    // generate row
    $pattern_row = [];
    for($j=0; $j<$pattern_size; $j++){
        array_push($pattern_row, cutOneColor($colors));
    }
    array_push($pattern, $pattern_row);
 }

 $output = "<section>";
 foreach($pattern as $row){
    $output .= "<div class='row'>";
    foreach($row as $color_div){
        $output .= "<div class='box' style='background-color: $color_div'></div>";
    }
    $output .= "</div>";
 }
$output .= "</section>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color patterns</title>
</head>
<style>
        .row {
            display:flex;
            flex-direction: row;
        }
        .box {
            width: 50px;
            height: 50px;
            border: solid 1px black;
        }
    </style>
<body>
    <?= $output ?>
</body>
</html>
