<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1>Save user  </h1>";

var_dump($_POST);


### I need to save the users data to the file

try{

    $fileobj =fopen('users.txt', 'a');

    $id = time();
    $user_data= "{$id}:{$_POST["email"]}:{$_POST["password"]}".PHP_EOL;
    fwrite($fileobj, $user_data);
    fclose($fileobj);

    header('Location:userstable.php');
//    readfile('users.txt');

}catch (Exception $e){
    echo $e->getMessage();
}