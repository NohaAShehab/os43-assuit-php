<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";
echo "<h1>Clousers  </h1>";



## you need to define a function ---> use it as a
# parameter passed to the function or returned to it
# function ---> use it once --->


//function test(){
//    echo "<h2 style='color: purple'> hello world </h2>";
//}
//test();


$called_function = function (){
    echo "<h2 style='color: purple'> hello world </h2>";
};

//var_dump($called_function);
//
//$called_function();
//
////$called_function();
////$called_function();
//
//var_dump(is_callable($called_function));


#############################

//function muliplynumby10(int $num){
//    return $num*10;
//}
//function addnums(int $num1,int $num2){
//    $res=  $num1  + $num2;
//    echo $res;
//
//    return muliplynumby10($res);
//}
//
//
//$res = addnums(5,6);
//
//var_dump($res);

#####################33


//function muliplynumby10(int $num){
//    return $num*10;
//}
//function addnums(int $num1,int $num2){
//    $res=  $num1  + $num2;
//    echo $res;
//
//    return function (int $res){
//        return $res*10;
//    };
//}
//
//
//$res = addnums(5,6);
//
////var_dump($res);
//
//var_dump($res(345));


############ closure use variable from inside the function

## function accept function as a parameter
# or return function --> call higher order function



function addnums(int $num1,int $num2){
    $res=  $num1  + $num2;
    echo $res;

    return function(int $num) use ($res){
        return $num + $res;
    };
}
# staging execution

//$res = addnums(5,6);
//
//var_dump($res);
//
//var_dump($res(345));
//
//
//var_dump(addnums(3,4)(10));

//
//$x = addnums(4,6, 344);
//var_dump($x(34));
//
$quantity = 1;  # global
# use special keyword to use the variable form outside
//$calculator = function($number) use($quantity) {
//    return $number + $quantity;
//};
//var_dump($calculator(7)); // 8


//function test(){
//    global $quantity;
//    $quantity=6;
//
////    global  $quantity;
//    $quantity ++;
//}
//
//test();
//echo $quantity;
########## function return function



//function get_data_From_table($tablename){
//
//    $data=[];
//
//    echo $data;
//
//    echo "<table> </table>";
//    return function()use( $data){
//
//        echo "<table> </table>";
//        header("Location:functions.php");
//    };
//
//}















































