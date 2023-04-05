<?php


$name = 'Tarek';

try{
    echo $name;
    $name = 'Ahmed';
}catch (Exception $e){
    echo $e->getMessage();
}


echo $name;