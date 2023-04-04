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



try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, 3306);
//    var_dump($conn);

    $name = 'noha';
    $email = 'noha@gmail.com';
    ##################################### use mysqli to insert data ###################################
//    echo "Eslam";
//    $query = "Insert into `osassuit43`.`students`(name, email) values({$name}, {$email});";
//        var_dump($query);
//    exit;
//    $query = "Insert into `osassuit43`.`students`(name, email) values('{$name}', '{$email}');";
//
////    var_dump($query);
////    exit;
//    $res = $conn->query($query);
//    var_dump($res);
//    var_dump($conn->affected_rows);
//    var_dump($conn->insert_id);
//    if($conn->affected_rows){
//        echo "<h1> data inserted successfully </h1>";}

    ########################################### Prepared statement ################################################
//    $name='Ahmed';
//    $email='Ahmed@gmail.com';
//    $inst_query = "Insert into `osassuit43`.`students`(name, email) values(?, ?);";
//    $inst_stmt = $conn->prepare($inst_query);
//    var_dump($inst_stmt);
//
//    $res = $inst_stmt->execute([$name, $email]);
//    var_dump($res);
//    var_dump($conn->affected_rows);
//    var_dump($conn->insert_id);
//    if($conn->affected_rows){
//        echo "<h1> data inserted successfully </h1>";}

    ####################### select  ==> prepared statement ####################3

    $id = 20;

    $select_query = "select * from `osassuit43`.`students` where id  > ? ";

    $select_stmt = $conn->prepare($select_query);

    ##################### 1- first use for the query
    $select_stmt->bind_param('i', $id);
    $select_stmt->execute();
    $data_info = $select_stmt->get_result();
    var_dump($data_info);
//    var_dump($data_info);
//
////    $data = $data_info->fetch_all(1);
////    var_dump($data);
//
//    while($row = $data_info->fetch_assoc()){  # fetch_assoc --> one row
//        var_dump($row);
//    }
//
//    $row = $data_info->fetch_assoc();  # null
//    var_dump($row);

    $new_id = 10;
    $select_stmt->execute([$new_id]);
    $data_info = $select_stmt->get_result();
    var_dump($data_info);





















}catch (Exception $e){
    echo $e->getMessage();
}