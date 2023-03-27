<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container  fs-2'  >";
//
//echo "<h1> Notes   </h1>";
//
//$name ='Mohamed';
//echo "test", "<br>", 'Noha', "<br>", $name;
//
//
//print("test", $name);


//$var1 = 0;
//$var2 = (float)$var1;
//var_dump($var2);
//
//


//$num = 'noha20';
//$num = (int)$num;
//var_dump($num);


//$num = '20noha';
//$num = (int)$num;
//var_dump($num);

## variable of variable
//$track = 'osad';
//
//$osad = 'Opensource application development';
//
//var_dump($$track);
//
//
//$a = "Hello, ";
//$b = "World!";
//$result = $a.$b;
//var_dump($result);

#############3 reference operator


//$a = 5;
//$b = $a;
//
//var_dump($a);
//var_dump($b);
//
//
//$b = 'Ahmed';
//
//var_dump($a);
//var_dump($b);

####################3

//$a = 5;
//$b = &$a;
//
//var_dump($a);
//var_dump($b);
//
//
//$b = 'Ahmed';
//
//var_dump($a);
//var_dump($b);

//$num = @(5/0);
//var_dump($num);

###########################




//@var_dump($name);
//
//$out = `ls -l`;
//var_dump($out);
//
//$res = `touch test.txt`;



$num="10";
settype($num,"int");
echo gettype($num);
































