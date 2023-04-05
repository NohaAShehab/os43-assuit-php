<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";
echo "<h1> Inheritance </h1>";


//class Person{
//
//    private  $name;
//
//    /**
//     * @param mixed $name
//     */
//    public function setName($name): void
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getName()
//    {
//        return $this->name;
//    }
//}
//
//
//
//class Instructor extends Person{
//
//
//
//}
//
//$in = new Instructor();
//var_dump($in);
//$in->setName('Ahmed');
//echo $in->getName();

############ inheritence and constructors



class Person{

    private  $name;

    function __construct($name)
    {
            $this->name = $name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function  speak(){
        echo "<h1> My name is {$this->name} </h1>";
    }
}



//class Instructor extends Person{
//
//    private $email ;
//    public function __construct($email)
//    {
//        $this->email = $email;
//    }
//
//}
//
//$in = new Instructor("Ali");
//var_dump($in);
//echo $in->getName();

## calling the parent constructor
class Instructor extends Person{

    private $email ;
   public function __construct($name, $email='')
   {
        # call parent constructor inside the child constructor
       parent::__construct($name);
       $this->email = $email;
   }


    public function  speak(){
        parent::speak();
      echo "<h1 style='color:darkred;'> My name is
    {$this->email} </h1>";

    }


}

$in = new Instructor("Ali", 'ahmed@gmail.com');
var_dump($in);
echo $in->getName();
$in->speak();



## provide relation is-a relation
var_dump($in instanceof Person);













































