

<?php


    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

    echo "<div class='container  fs-2'  >";
    echo "<h1> Welcome to Registeration page  </h1>";


## super global array ---> $_REQUEST- --> request data --->
    #### ---> method ---> $_GET
    ### ---> method  ===> $_POST

//    echo $_REQUEST;
//    var_dump($_REQUEST);
//
//    echo "<br>";
//
//    var_dump($_POST);
//    echo "<h1> if you sending request data using get method or sending data in the query string
//        you will find in $_GET
//
//
//        </h1>";
//
//    var_dump($_GET);
//
//    var_dump($_SERVER);


//echo "Welcome";
//
$email = $_POST["email"];
echo $_POST["email"];

var_dump($_POST);
