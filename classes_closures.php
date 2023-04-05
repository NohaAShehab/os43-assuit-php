<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";
echo "<h1>Classes and closure    </h1>";


//$printclosure=function(){
//    echo "<h4 style='color: orangered;'>
//        {$this->name} </h4>";
//};
//
//
//class Student{
//    public $name = 'Ahmed';
//}
//
//$s = new Student();
//### bind closure to the object--> apply
//# closure function on $s object
//
//$objclosure=$printclosure->bindTo($s);
//var_dump($objclosure);
//$objclosure();
//
//
//
//class Employee{
//    public $name='ali';
//}
//$emp = new Employee();
//$emp_col = $printclosure->bindTo($emp);
//var_dump($emp_col);
//$emp_col();
//
//class Test{
//
//}
//
//$t = new Test();
////$emp_col = $printclosure->bindTo($t);
////var_dump($emp_col);
////$emp_col();
//
//
//var_dump($s);


#### clousers and private , protected members
//$print_object_info=function(){
//    echo "<h4 style='color: orangered;'>
//        {$this->name} , {$this->email}
//           {$this->salary}
//        </h4>";
//};
//
//
//class Student{
//    public $name = 'Ahmed';
//    protected $email = 'ahmed@gmail.com';
//    private $salary = 1000;
//}
//
//$s = new Student();
//### bind closure to the object--> apply
//# closure function on $s object
//
////$objclosure=$print_object_info->bindTo($s);
////var_dump($objclosure);
////$objclosure();
//
//### bind class scope
//
//$objclosure=$print_object_info->bindTo($s,
//    Student::class);
//
//# closure you can work as you are inside the class
//var_dump($objclosure);
//$objclosure();

### modify object using closure

//
//$modify_object_info=function($email){
//    echo "<h4 style='color: orangered;'>
//        {$this->email}
//
//        </h4>";
//    $this->email  = $email;
//    $this->salary = 100000;
//};


//class Student{
//    public $name = 'Ahmed';
//    protected $email = 'ahmed@gmail.com';
//    private $salary = 1000;
//}
//
//$s = new Student();
//
//### bind class scope
//
////$objclosure=$modify_object_info->bindTo($s,
////    Student::class);
////
////# closure you can work as you are inside the class
////var_dump($objclosure);
////$objclosure("noha@gmail.com");
////var_dump($objclosure);
////
////var_dump($s);
//
//## call from php 7
//$modify_object_info->call($s, 'testtt');
//var_dump($s);
//
//### this valid only on this instanve


################### closure inside the class


class Greeting{
    private $message='Hello world';
    private $no_of_times = 1;


    /**
     * @return mixed
     */
    public function getMessage()
    {
        echo "{$this->message}";
        return function (){
            echo "<h3 style='color: rebeccapurple'>
        {$this->message} </h3>";
        };
    }

    /**
     * @return int
     */
    public function getNoOfTimes(): int
    {
        return $this->no_of_times;
    }


}

$g = new Greeting();
var_dump($g);
//
//$res = $g->getMessage();
//var_dump($res);
//$res();

#############################




























