<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";
echo "<h1>functions  </h1>";

//getSum(55,55);
//function getSum($x,$y){
//    $z=$x+$y;
//    echo 'Sum of x and y is'.$z."<br>";
//}
//getsum(5,10);
#### functions and datatypes

//function getSum($x,$y){
//    echo "<h2>x = {$x} , y = {$y} </h2>";
//}
//
//
//getSum(3,5);
//getSum('Ahmed', 'Ali');
//getSum('test',10);

//function getSum(int $x,int $y){
//    echo "<h2>x = {$x} , y = {$y} </h2>";
//}
//
//
//getSum(3,5);
//getSum('Ahmed', 'Ali');
//getSum('test',10);


//function getSum(int $x,$y=1){
//    echo "<h2>x = {$x} , y = {$y} </h2>";
//}



//function getSum($y=1, int $x){
//    echo "<h2>x = {$x} , y = {$y} </h2>";
//}
//
//getSum(1, 19);
//getSum(4);

//$r = getSum(23,545);
//var_dump($r);  # return Null


### function that returns with result

//function getSum(int $x,$y=1){
//    echo "<h2>x = {$x} , y = {$y} </h2>";
//    $res = $x + $y;
//    return $res;
//}
//
//
//var_dump(getSum(4,5));
//
//

#### function with variable number of arguments


//function askforstudents(... $students ){
//    var_dump($students);
//    # accept data in form of array
//    echo json_encode($students);
//}
//
//
//askforstudents('Ahmed', 'noha', 'test');


## function

#1- called by value

# local
//function increment_num($num){
//    $num ++;
//    var_dump($num);
//}
//$num = 10 ;
//increment_num($num);
//var_dump($num);


#2- called by ref
# & --> reference operator

function increment_num(&$num){
    $num ++;
    var_dump($num);
}
$num = 10 ;
increment_num($num);
var_dump($num);










//function test(){
//    echo 'hi';
//    return 10;
//}
//
//unset(test());



//
//$res = function (){
//    echo 'Hi';
//};
//
//$res();
//
//unset($res);
//$res();
#####################3

$res();


$res = function (){
    echo 'Hi';
};


unset($res);














































