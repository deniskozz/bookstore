<?php
$books = require 'storage.php';
$authors =[];

foreach ($books as $book) {
    foreach($book['author'] as $author){
        if (in_array($author, $authors)) {
            continue;
        }
        $authors [] = $author;
    }
}

