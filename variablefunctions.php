
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container  fs-2'  >";

echo "<h1>  isset , empty </h1>";





#####################33
//$name;
//var_dump($name);
//
//var_dump(isset($name));  # False
//var_dump(empty($name));  # true

#################
//var_dump($name);
//
//var_dump(isset($name));  # False
//var_dump(empty($name));  # true


########################
//$name='';
//
//var_dump(isset($name));  # False
//var_dump(empty($name));  # true

#####################
//
//$name=null;
//
//var_dump(isset($name));  # False
//var_dump(empty($name));  # true


###############

//$name=false;
//
//var_dump(isset($name));  # False
//var_dump(empty($name));  # true

######################
$name='noha';

var_dump(isset($name));  # False
var_dump(empty($name));  # true
















$arr = [234,46,65,'noha'];

foreach ($arr as $item){
    echo "{$item}.<br>";
}









