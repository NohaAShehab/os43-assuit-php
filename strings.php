<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1>String operations </h1>";

//$text = "\t\tThese are a few words :) ...   ";
//var_dump($text);
#  * Strip whitespace (or other characters) from
# the beginning of a string and the end of string

//$trimmed = trim($text);
//var_dump($trimmed);

//$trimmed = trim($text, "T\t s");
//var_dump($trimmed);


//$trimmed = ltrim($text, "T\t s");
//var_dump($trimmed);

//$trimmed = rtrim($text, "T\t s");
//var_dump($trimmed);

##############
//$str="You came
//to me
//in that hour
//of need";
////echo($str."<br>");
//echo nl2br($str);

//$txt="wel";
////printf($txt);
//printf("[%'#10s]\n",$txt);
//
////printf("[%b]", 10);
////printf('%c', 65);



//$num = 5;
//$location = 'tree';
//$format = 'There are %d monkeys in the %s';

//echo "There are {$num} monkeys in the {$location}";

//$temp= "There are %d monkeys in the %s";
//echo sprintf($temp, $num, $location);
//echo '<br>';
//echo sprintf($temp, 893, 'jksfh');
####################################


//$question = "what's your best friend name? $ \\";
//
//## format string to a storage
//$newq= addslashes($question);
//echo $newq. "<br>";
//
//echo stripslashes($newq);


//$InputArray = array('OS','Application','Track');
////echo implode('_', $InputArray);
//echo join('_', $InputArray);

### string tokenization

//$string = "My name is Noha, I works at ITI";
//
//# split string to tokens ---> tokens --> ' '
//$tok = strtok($string, ' ');
//
//echo "{$tok} <br>";
//echo "#{$tok} #<br>";
//
////echo "{$string} <br>";
//
//## php --> rest of the value: name is Noha, I works at ITI"
//echo "-------------------------<br>";
//while($tok=strtok(' ')){
//    echo "{$tok} <br>";
//
//}
################################
$var1 = "Hello";
$var2 = "hello";
//if (strcmp($var1, $var2) !== 0) {
//    echo '$var1 is not equal to $var2 in
//a case sensitive string comparison';
//}

//var_dump(strcmp($var1, $var2) );
//var_dump(strcasecmp($var1, $var2) );


//$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
//$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
//echo $onlyconsonants."<br>";



$input = array('A: XXX', 'B: XXXnoha', 'C: XXXail');
var_dump($input);
$input=substr_replace($input, '***************', 1);
var_dump($input);
//echo implode('; ', $input);





















