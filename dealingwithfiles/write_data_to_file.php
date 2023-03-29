<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1> Writing data to the file   </h1>";

/*
 * if you are trying to open file with write / append mode ---> if file doesn't exists -->PHP will try
 * to create it -->if file cannot be created due permissions PHP--> raise warning 0--> return with False
 * */

//try{
//    # if you open file with write mode then close it ---> old content of the file will be removed
//
//    $fileobj = fopen("users.txt", 'w');  # if file not found ---> return false
//    var_dump($fileobj);
//    if ($fileobj){
//        echo "<h1> File opened  </h1>";
//        echo "<h2> Write data </h2>";
////        fwrite($fileobj,'I love PHP Much', 6);
////        fwrite($fileobj,'PHP is simple'.PHP_EOL);
////        fwrite($fileobj, "Dealing with file is simple with php\n");
////        fwrite($fileobj, "93238");
//
//
//        fclose($fileobj);
//    }
//}catch (Exception $e){
//    echo $e->getMessage();
//}

try{
    # if you open file with write mode then close it ---> old content of the file will be removed

    $fileobj = fopen("users.txt", 'a');
    # open file for writing starting from the end of the file
    var_dump($fileobj);
    if ($fileobj){
        echo "<h1> File opened  </h1>";
        echo "<h2> Write data </h2>";
        fwrite($fileobj,'I love PHP Much', 6);
        fwrite($fileobj,'PHP is simple'.PHP_EOL);
        fwrite($fileobj, "Dealing with file is simple with php\n");
        fwrite($fileobj, "93238");


        fclose($fileobj);
    }
}catch (Exception $e){
    echo $e->getMessage();
}