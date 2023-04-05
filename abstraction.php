<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";
echo "<h1> Abstract classes  </h1>";

abstract class Shape{
    protected $area =0;

    abstract  function cal_area();

    function testtt(){
        echo 'Testttt';
    }


}

//abstract class Rectangle extends  Shape{
//    private $widh;
//    private $height;
//
//}
//$s=  new Shape();

class Rectangle extends  Shape{
    private $widh;
    private $height;

public function cal_area()
{
    // TODO: Implement cal_area() method.
}

}



final  class MM{

}