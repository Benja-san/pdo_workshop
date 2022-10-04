<?php
require_once "../includes/database.php";
//GET inputs
    $title = $_GET["title"] ? $_GET["title"] : "";
    $content = $_GET["content"] ? $_GET["content"] : "";
    $author = $_GET["author"] ? $_GET["author"] : "";

//Prepare queries and execute
if(!empty($_GET)){
    $query = 'INSERT INTO story (title, content, author) VALUES (:title, :content, :author)';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':title', $title, PDO::PARAM_STR);
    $statement->bindValue(':content', $content, PDO::PARAM_STR);
    $statement->bindValue(':author', $author, PDO::PARAM_STR);
    $statement->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once "../includes/header.html" ?>
    <main>
        <h1>Create a Story</h1>
        <form action="">
            <div>
                <label for="title">Title</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    minLength="1" 
                    maxlength="255" 
                    required
                >
            </div>
            <div>
                <label for="content">Content</label>
                <textarea type="text" id="content" name="content"></textarea>
            </div>
            <div>
                <label for="author">Author</label>
                <input 
                    type="text" 
                    id="author" 
                    name="author"
                    maxLength="100"
                >
            </div>
            <button type="submit">Send Story</button>
        </form>
    </main>
</body>
</html>