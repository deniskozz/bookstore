<?php

function get_books(){
    return $books = require_once 'storage.php';   
}

function get_book($bookId){
    foreach (get_books() as $bookItem) {
        if ($bookItem['slug'] == $bookId) {
            return $bookItem;
        }
    }

    return null;
}

/* function get_authors(){
    foreach (get_books() as $book) {
        foreach($book['author'] as $author){
            if (in_array($author, $authors)) {
                continue;
            }
            $authors [] = $author;
        }
    }
} */