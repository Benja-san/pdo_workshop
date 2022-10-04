<?php
//Connect database
require_once "../includes/database.php";

//Prepare Data to Display
$query = 'SELECT * FROM story';
$statement = $pdo->query($query); 
$stories = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Workshop</title>
</head>
<body>
    <?php include_once "../includes/header.html" ?>
    <main>
        <h1>Index</h1>
        <ul>
            <?php foreach($stories as $story) : ?>
                <li>
                    <h2><?= $story["title"] ?></h2>
                    <p><?= $story["content"] ?></p>
                    <p><?= $story["author"] ?></p>
                </li>
            <?php endforeach ?>
        </ul>
    </main>
</body>
</html>