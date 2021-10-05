<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    require_once 'functions.php';

    $book= get_book($_GET['book']);
    ?> 

    <h1><?= $book['name']?></h1>  
    <h2><?= implode(', ', $book['author'])?></h2> 
    <p><?= $book['year']?></p>
    <p><b><?= implode(', ', $book['category'])?></b></p>
    <img src=" <?= $book['image']?>" alt="">
    <p><?= $book['description']?></p>
</body>
</html>
