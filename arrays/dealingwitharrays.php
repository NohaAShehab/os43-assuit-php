<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1>Arrays  </h1>";

//
//
//$arr = ['Mohamed', true,'Nada', 'Abdelrahman'];
//var_dump($arr);
//
//# arrays  mutable datatypes
//$arr[2] = 'Noha';
//var_dump($arr);
//
//#count elements of array ?
//
//var_dump(count($arr));
//
//
//## add element to the array
//array_push($arr, 'added value');
//
//var_dump($arr);
//
//## remove element from array
//$popped_element=array_pop($arr); # return with popped element
//# (The last element of the array)
//var_dump($popped_element);
//var_dump($arr);
//
//
//## loop over the array
////foreach ($arr as $item){
////    echo "<h4>{$item} </h4>";
////}
//
//
//foreach ($arr as $index=>$item){
//    echo "<h4>{$index}=>{$item} </h4>";
//}

#### get the last element of the array

//$lastelement = $arr[count($arr)-1];
//echo $lastelement;

//$lastelement = $arr[-1];
//echo $lastelement;

//
//echo end($arr);
//
//$arr1= array("Noha","Engineering","ITI");
//var_dump($arr1);

echo "<h1>Associative arrays   </h1>";

## $key=>$value

//$info = [
//    'name'=>'noha', 'track'=>'os application',
//    'branch'=>'Assuit'
//];
//
//var_dump($info);
//var_dump($info['name']);
//
////foreach ($info as $i){
////    echo "<h4>{$i} </h4>";
////}
//foreach ($info as $key=>$i){
//    echo "<h4>{$key}=>{$i} </h4>";
//}
//
//$info["age"]=30;
//var_dump($info);


######## create associative array from existing variables

//$name = 'noha';
//$track = 'OSAD';
////
//
//$myinfo = compact('name', 'track');
//var_dump($myinfo);
//
//
//array_push($myinfo, 'Ahmed');
//var_dump($myinfo);



//$arr = [4,5,643,54];
//$arr[10]='iti';
//var_dump($arr);


//$info = [
//    "name"=>"noha", 'track'=>'osad'
//];
//
//$userinfo = [
//    'track'=>'osad', 'name'=>'noha'
//];

//var_dump($info==$userinfo); #
//var_dump($info===$userinfo);
$info = [
    "name"=>"noha", 'track'=>'osad'
];

$userinfo = [
    'track'=>'ioweru', 'name'=>'noha', 4, True,
    'age'=>30
];

## add elements of the first array
#and  keys from the second array not appearing in the first array
#  , not exists int the first array
$newarr = $info + $userinfo;
var_dump($newarr);


$arr= [4,5,6];
var_dump($arr);

############################
//foreach($newarr as $k=>$v){
//    echo "<h5> {$k}=> {$v} </h5>";
//}
//
//$students=array(
//    1=>array("Ali","IOT"),
//    2=>array("Mostafa","Cloud"),
//    3=>["Noha","Application"]
//);
//
//var_dump($students);
//echo $students[2][1];
###############


//$names = array( 'noha', "Fatma", 10, "Dina", "Andrew","Shimaa","suliman" );
////sort($names);
////var_dump($names);
//
//
////rsort($names);
////var_dump($names);
//
//$nums = ['10', '100', '11', '2'];
//sort($nums, SORT_STRING);
//var_dump($nums);

#####################
//$prices = array( "meat"=>100, "sugar"=>10, "tea"=>8 );
//asort($prices);
//var_dump($prices);
//
//krsort($prices);
//var_dump($prices);

###################

//function cmp($a, $b)
//{
//    if ($a == $b) {
//        return 0;
//    }
//    return ($a < $b) ? 1 : -1;
//}
//$a = array(3, 2, 5, 6, 1, 'rer', 'er');
//var_dump($a);
//
//usort($a, 'cmp');
//var_dump($a);
//
//
//shuffle($a);
//var_dump($a);

#################
$colors = array(
    'one' => 'red',
    'two' => 'blue',
    'three' => 'yellow');
var_dump(array_flip($colors));

##############3
$fruits = ['banana'=>10, 'apple'];
$found = in_array('banana', $fruits);
var_dump($found);






































