<!-- Skapa en multidimensionell array (dvs en array som innehåller arrayer). 
Se denna array som en tabell dvs det finns rader och kolumner, 
dessa bildar celler som har data och kolumner har rubriker. 
Skriv ett program som skriver ut denna array som en table i HTML.

Utmaning: kan vi bygga några funktioner som hjälper detta program? -->
<?php
    $table = array("id"=>array(1, 2, 3, 4), 
    "name"=>array("natasa", "patrik", "elli", "reah"), 
    "date"=>array("90-05-03", "92-06-24", "86-12-04", "94-05-27")); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
    <table>
        <tr>
            <th>Id</th>
            <?php foreach($table["id"] as $value) {
                echo "<th>$value</th>";
            } ?>
            </tr>
            <tr>
                <th>Name</th>
            <?php foreach($table["name"] as $value) {
                echo "<th>$value</th>";
            } ?>
            </tr>
            <tr>
                <th>Date</th>
            <?php foreach($table["date"] as $value) {
                echo "<th>$value</th>";
            } ?>
            </tr>
        </tr>
    </table>
    </table>
</body>
</html>