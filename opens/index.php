<?php
require_once 'functions.php';


!




















foreach (get_books() as $book) {
    echo '<div>';
    echo "<h2>",$book['name']," " ,"(",$book['year'],")", " - ", implode(', ', $book['author']),"</h2>" /* $book['description'],  *//* "<br>" */;
    echo "<p>",implode(', ', $book['category']),"</p>";
    echo "<img width='100' src='" , $book['image'], "'>";
    echo "<a href='page.php?book=" , $book['slug'] ,"'>Посмотреть </a>", "<br>", "<br>", "<br>";
    echo '</div>';
}