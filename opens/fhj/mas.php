<?php
$count = $_GET['count'];
$min = $_GET['min'];
$max = $_GET['max'];

if ($min>=$max) {
    echo 'oshibka';
    die();
}

if (($max - $min) < $count ){
    echo 'Неверный диапазон';
    die();    
}

for ($i=0 ; $i < $count ; $i++ ) { 
    $result[]=rand($min, $max);
}
echo('<pre>');
var_dump($result);
