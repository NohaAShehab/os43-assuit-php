<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container  fs-2'  >";

echo "<h1> Dealing with Variables </h1>";

//
//$name = 'Noha';
//$Name = 'Ahmed';
//
//var_dump($name);
//
//var_dump($Name);
//
//
//$year = 2023;
//var_dump($year);


########################################

function sayhello(){

    $name = 'noha';
    echo "<h1> {$name} </h1>";
}

sayhello();

var_dump($name);  # warning

echo 'test';





















