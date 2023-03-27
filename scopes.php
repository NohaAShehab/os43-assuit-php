<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container  fs-2'  >";

echo "<h1> Scopes  </h1>";



$num = 10; # global

//function sayhello(){
//
//    $name = 'noha';
//    echo "<h1> {$name} </h1>";
//}
//
//sayhello();
//
//var_dump($name);  # warning
//
//echo 'test';
//var_dump($num);
################## Access global variable from inside the function
#
//$course = 'PHP';
//function printGlobal(){
//    global $course;
//    var_dump($course);
//    $course=  'PHP using OOP';
//}
//
//printGlobal();
//echo $course;
################ static
//function testStaticFunction(){
//    static $m= 0;
//    $m ++;
//    var_dump($m);
//}
//testStaticFunction(); #1
//testStaticFunction(); #2
//testStaticFunction(); #3


#########################

function parameterScope($var){  # parameter --- > local scope
    echo $var;
}
parameterScope(5); //5

//var_dump($var);


### constant can be accessed any where


//const track = 'OSAD';
//
//var_dump(track);
//
//
//function printcosntant(){
//    echo track;
//}
//
//printcosntant();

### super global variables ?

var_dump($_GET);

function testfun(){
    $_GET["name"]= 'Noha';
}

testfun();
var_dump($_GET);






























