<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Countries</title>
</head>
<body>
    <section>
        <h1>Countries:</h1>
        <ol>
            <?php
                foreach($countries as $country) {
                    echo "<li>
                            <a href='index.php?id={$country["id"]}'>
                                {$country["name"]}
                            </a>
                        </li>";
                }
            ?>
        </ol>
    </section>
        <h2>Country info:</h2>
        <ul style="list-style: none">
            <li><strong>Namn:</strong> <?= $chosen_country["name"] ?></li><br>
            <li><strong>Capital:</strong> <?= $chosen_country["capital"] ?></li><br>
            <li><strong>Continent code:</strong> <?= $chosen_country["continent_code"] ?></li><br>
            <li><strong>Is Democracy:</strong> <?= $chosen_country["isDemocracy"] ?></li><br>
            <li><strong>Famous for:</strong> <?= $chosen_country["famousFor"] ?></li><br>
        </ul>
    <section>
    </section>
</body>
</html>