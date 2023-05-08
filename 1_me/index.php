<?php
$arr = array("namn"=>"natasa", "ålder"=>33, "hårfärg"=>"brunt", "bio"=>"Software developer student, currently in a state of improving and obtaining the necessary skills 
for me to become the best developer possible");

// echo "<p>";
// print_r($arr);
// echo "</p>"
echo "<ol>";
foreach($arr as $key => $value) {
    echo "<li>$key = $value</li><br>";
}
echo "</ol>";

?>