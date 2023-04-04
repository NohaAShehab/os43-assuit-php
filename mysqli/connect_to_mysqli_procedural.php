<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";
echo "<h1> Connect to Databases Mysqli </h1>";

## 1- set connection credits
const DB_HOST ="localhost";
const DB_USER = "osassuit43";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "osassuit43";



try{
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE,
        3306);

//    var_dump($conn);
    ## use connection to create table
    # serial in mysql  --> create column with datatype unsigned big it , auto_increment.
//    $query = "create table if not exists
//        `students`(`id` serial primary key, `name` varchar (40), `email` varchar (100))";
//
//    # to execute query
//    $res=mysqli_query($conn, $query);
//    var_dump($res);
//
//    ## close connection
//    mysqli_close($conn);
    ##################################### use mysqli to insert data ###################################
    $query = "Insert into `osassuit43`.`students`(name, email) values
                ('test', 'test@gmail.com');";

    $res=mysqli_query($conn, $query);
    var_dump($res);
    var_dump(mysqli_affected_rows($conn));
    var_dump(mysqli_insert_id($conn));
    if(mysqli_insert_id($conn)){
        echo "<h1> data inserted successfully </h1>";
    }

//    var_dump($conn);
//    mysqli_close($conn);
    ######################### update
//    $query = "Update `osassuit43`.`students`set name='omar' where id=9;";
//    $res=mysqli_query($conn, $query);
//    var_dump($res);  # return true if the query executed successfully
//    var_dump(mysqli_affected_rows($conn));
//    if(mysqli_affected_rows($conn)){
//        echo "<h1> data updated successfully </h1>";
//    }
//
////    var_dump($conn);
//    mysqli_close($conn);
//    ##### delete #########################
//    $query = "DELETE FROM `osassuit43`.`students` where id=9;";
//    $res=mysqli_query($conn, $query);
//    var_dump($res);  # return true if the query executed successfully
//    var_dump(mysqli_affected_rows($conn));
//    if(mysqli_affected_rows($conn)){
//        echo "<h1> data Deleted successfully </h1>";
//    }
//
////    var_dump($conn);
//    mysqli_close($conn);

    #################### select query

    $query = "SELECT * From `osassuit43`.`students`;";
    $res=mysqli_query($conn, $query);  # holds information about data
    var_dump($res);  # return true if the query executed successfully
    var_dump($conn);

//    $data  = mysqli_fetch_all($res,1); # associative array
//    $data  = mysqli_fetch_all($res,2); # indexed array
//    $data  = mysqli_fetch_all($res);  # fetch data into an array ==> indexed array
//    var_dump($data);
//    $data  = mysqli_fetch_all($res,1);
//    var_dump($data);
//

//    while ($row = mysqli_fetch_assoc($res)) {
//        var_dump($row);
//        printf ("%s (%s)\n", $row["id"], $row["name"]);
//    }

    while ($row = mysqli_fetch_object($res)) {
//        var_dump($row);
        printf ("%s (%s)\n", $row->id, $row->name);
    }

    echo "<table class='table'> <tr><th>ID</th>  <th>Name</th>  <th>Email</th></tr>";

//    foreach ($data as $row){
//        echo "<tr>";
//        foreach ($row as $element){
//            echo "<td>{$element} </td>";
//        }
//        echo "</tr>";
//    }
//
//    echo "</table>";

    $query = "SELECT name From `osassuit43`.`students`";
    $new_res= mysqli_query($conn, $query);
    $new_data = mysqli_fetch_all($new_res);
    var_dump($new_data);

    mysqli_close($conn);















}catch (Exception $e){
    echo $e->getMessage();
}


