<?php
const DB_HOST = "localhost";
const DB_USER = "osassuit43";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "osassuit43";


function connect_to_db(){

    try {

        $dsn ='mysql:dbname=osassuit43;host=127.0.0.1;port=3306;';
        $db = new PDO($dsn, DB_USER, DB_PASSWORD);
        return $db;

        } catch (Exception $e){
                echo $e->getMessage();
    }
}

//var_dump(connect_to_db());