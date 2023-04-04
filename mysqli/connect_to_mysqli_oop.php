<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";
echo "<h1> Connect to Databases Mysqli-> OOP </h1>";

## 1- set connection credits
const DB_HOST ="localhost";
const DB_USER = "osassuit43";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "osassuit43";



try{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE, 3306 );
    var_dump($conn);

    ##################################### use mysqli to insert data ###################################
//    $query = "Insert into `osassuit43`.`students`(name, email) values
//                ('test', 'test@gmail.com');";
//
//    $res = $conn->query($query);
//    var_dump($res);
//    var_dump($conn->affected_rows);
//    var_dump($conn->insert_id);
//    if($conn->affected_rows){
//        echo "<h1> data inserted successfully </h1>";
//    }


    ####################################
    ######################### update
//    $query = "Update `osassuit43`.`students`set name='omar' where id=21;";
//    $res=$conn->query($query);
//    var_dump($res);  # return true if the query executed successfully
//    var_dump($conn->affected_rows);
//    if($conn->affected_rows){
//        echo "<h1> data updated successfully </h1>";
//    }
//
////    var_dump($conn);
//    mysqli_close($conn);
    ######################### update

    $query = "DELETE FROM `osassuit43`.`students` where id=19;";
    $res= $conn->query($query);
    var_dump($res);  # return true if the query executed successfully
//    var_dump(mysqli_affected_rows($conn));
    if($conn->affected_rows){
        echo "<h1> data Deleted successfully </h1>";
    }
//

    ################3 select
    $query = "SELECT * From `osassuit43`.`students`;";
    $res=$conn->query( $query);  # holds information about data
    var_dump($res);  # return true if the query executed successfully
    var_dump($conn);
//
//    $data  = $res->fetch_all(1);
////    $data  = mysqli_fetch_all($res,2); # indexed array
////    $data  = mysqli_fetch_all($res);  # fetch data into an array ==> indexed array
//    var_dump($data);
////    $data  = mysqli_fetch_all($res,1);
////    var_dump($data);
///
    # fetch data as object
//    while ($row = $res->fetch_assoc()){
//        var_dump($row);
//    }

//
//    while ($row = $res->fetch_object()){
//        var_dump($row);
//    }
    var_dump($res->num_rows);
    $data = $res->fetch_all();
    $res->free_result();
    echo "<table class='table'> <tr><th>ID</th>  <th>Name</th>  <th>Email</th></tr>";

    foreach ($data as $row){
        echo "<tr>";
        foreach ($row as $element){
            echo "<td>{$element} </td>";
        }
        echo "</tr>";
    }
//
    echo "</table>";

    var_dump($res);
    $res = $conn->query($query);
    var_dump($res);
    $conn->close();















}catch (Exception $e){
    echo $e->getMessage();
}
