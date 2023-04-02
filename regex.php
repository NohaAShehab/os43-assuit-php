<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1> Regex </h1>";

//$email = 'noha@gmail.com@gff.com';
//
//
//$pattern = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";


//echo preg_match($pattern, $email);


//$str = "The rain in SPAIN falls mainly on the plains.";
//#pattern inside // , i for ignoring case
//$pattern = "/ain/i";
//if(preg_match_all($pattern, $str, $matches)) {
//    var_dump($matches);
//}

############ built-in constants -->


$email = 'noha@gmail.com';

var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));

















