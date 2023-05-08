<!-- Skriv ett program som fyller en array med rymdvarelser. 
Varje rymdvarelse är en associativ array som berättar antal ögon, antal armar, ålder, 
färg och namn. Alla dessa värden är slumpade. 
Antingen från ett numeriskt intervall eller från en array av värden.

Namn är alltid dubbelnamn där första delen av namnet slumpas ur en array och 
andra delen av namnet slumpas från en annan array.

När arrayen av rymdvarelser är fylld så skriver programmet ut den snyggt formaterad med HTML.

Man ska kunna ändra en siffra i koden på ett ställe så skriver programmet ut så 
många rymdvarelser. -->

<?php 
$aliens =
    [
    
            "eyes"=>[3, 6, 4,],

            "arms"=>[4, 6, 2,],
        
            "age"=>[102, 233, 103,],
        
            "color"=>["blue","green", "red",],
        
            "name"=>["Naalu", "Vanacancia", "Namekian",],
    ];
   
    finction shuffle_aliens($aliens) {
        $aliens_keys = array_keys($aliens);
        shuffle($aliens_keys);
        $random = [];

        foreach($aliens_keys as $key) {
            $random[$key] = $aliens[$key];
        }
        return $random;
    }
    // $random_keys = array_rand($aliens);
    // $part = $aliens[$random_keys][0];
    // $random_values = $aliens[$random_keys][1];
    // echo "<p>$random_values</p>";

    


?>