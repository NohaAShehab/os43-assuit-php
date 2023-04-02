<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1>Delete user </h1>";

var_dump($_GET);
$user_id = $_GET["id"];

//
//$str = 'trr'; # literal value
//
//echo '{$user_id}';
//
//$str = "" ; # php try to evaluate value in the string
//
//echo "{$user_id}";

#######################
# 1- check if users  exists in the file

## 2- delete it


//var_dump(file_exists('users.txt'));

$users=  file('users.txt');
var_dump($users);

foreach ($users as $index=>$user){
    echo $user, $index, '<br>';
    $users_data = explode(':', $user);
    if($users_data[0]==$user_id){
        unset($users[$index]);  # delete from the array
        break;
    }

}

var_dump($users);

$fileobj = fopen("users.txt", 'w');
foreach ($users as $user){
    fwrite($fileobj, $user);
}
fclose($fileobj);

header("Location:userstable.php");



