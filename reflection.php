<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";
echo "<h1> Reflection   </h1>";



class OpenSource {
    private $instructor;
    protected $sub_tracks;
    public $list_of_courses;
    const PI = 3.1415;
    public function __construct() {
        $this->instructor = "Noha";
        $this->sub_tracks = "Application";
        $this->list_of_courses = ["Python","PHP","Scala","Laravel","Admin"];
    }
    public function getInstructor() {
        return $this->instructor;
    }
    public function setInstructor($instructor) {
        $this->instructor = $instructor;
    }
    private function getsub_tracks() {
        return $this->sub_tracks;
    }
}
//
//
//
//$reflection =
//    new ReflectionClass('Opensource');
//
//
//var_dump($reflection);
//
//
//var_dump($reflection->getProperties());
//
//var_dump($reflection->getConstants());
//
//var_dump($reflection->getConstant('PI'));
//
//var_dump($reflection->getMethods());
//
//
//var_dump($reflection->getModifiers());


###### Reflection for PDO




$pdo_reflection =
    new ReflectionClass("PDO");
//var_dump($pdo_reflection->getMethods());
//
//var_dump($pdo_reflection->getConstants());
//
//var_dump($pdo_reflection->getAttributes());


$method = new ReflectionFunction("gettype");
var_dump($method);
var_dump($method->getAttributes());
var_dump($method->getReturnType());
var_dump($method->getName());














