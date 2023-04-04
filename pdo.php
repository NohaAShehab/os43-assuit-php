<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";
echo "<h1> Connect to Databases PDO -PHP Data object- </h1>";

## 1- set connection credits
const DB_HOST = "localhost";
const DB_USER = "osassuit43";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "osassuit43";


try {

    $dsn ='mysql:dbname=osassuit43;host=127.0.0.1;port=3306;';
    $db = new PDO($dsn, DB_USER, DB_PASSWORD);
    if($db){
        var_dump($db);

        #### select data
        $query = "select * from `students`";
        $select_stmt = $db->prepare($query);
        $res=$select_stmt->execute();
        var_dump($res);

//        $data = $select_stmt->fetchAll();
//        var_dump($data);

//        $data = $select_stmt->fetchAll(PDO::FETCH_OBJ);
//        var_dump($data);

//        $data = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
//        var_dump($data);
//
//        echo $select_stmt->errorInfo();
//
//        $db=null;
//        unset($db);
        # prepared statement

//        $query="Insert INTO `students` (`name`, `email`) Values(?,?)";
//        $stmt=$db->prepare($query);
//        $success=$stmt->execute(['test', 'test@gmail.com']);
//        var_dump($success);
//        var_dump($stmt->rowCount());
//        var_dump($db->lastInsertId());

        #################  colon placeholder
        $name ='jkhf';
        $email = 'jsklfj';
        $query="Insert INTO `students` (`name`, `email`) Values(:username,:useremail)";

//        $stmt=$db->prepare($query);
//        $stmt->bindParam(":useremail", $email, PDO::PARAM_STR);
//        $stmt->bindParam(":username", $name, PDO::PARAM_STR);
//        $stmt->execute();
//        var_dump($stmt->rowCount());
//        var_dump($db->lastInsertId());
        ############################################3
//        $stmt=$db->prepare($query);
//        $stmt->bindValue(":username", "noha", PDO::PARAM_STR);
//        $stmt->bindValue(":useremail", "noha@gmail.com", PDO::PARAM_STR);
//        $stmt->execute();
//        var_dump($stmt->rowCount());
//        var_dump($db->lastInsertId());

        #######################################
        $update_query="UPDATE students
                SET `name` = :student_name WHERE `id`=:student_id ";
        $statement = $db->prepare($update_query);
        $db->beginTransaction();
        $statement->execute([":student_name"=>'OS', ":student_id"=>34]);
        $statement->execute([":student_name"=>'Application', ":student_id"=>35]);
        $db->commit();


















//    echo $db->errorInfo();















    }














} catch (Exception $e) {
    echo $e->getMessage();
}
