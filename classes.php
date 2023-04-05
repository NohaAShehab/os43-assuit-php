<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";
echo "<h1>Classes   </h1>";

//
//class Person{
//    public $name;
//    function seyHello(){
//        echo "Hello ". $this->name;
//    }
//}
//$p= new Person();
//var_dump($p);
//# modify object property
//$p->name="Noha";
//# class function
//$p->seyHello();







//class Person{
//    public $name;
//    protected  $address ;
//    private  $age;
//    function seyHello(){
//        echo "Hello ". $this->name;
//    }
//
//
//
//}
//$p= new Person();
//var_dump($p);
//# modify object property
//$p->name="Noha";
//# class function
//$p->seyHello();
//
////$p->address = 'test';

#### constructor

//class Person{
//
//    ## properties / attributes
//    public $name;
//    protected  $address ;
//    private  $age;
//
//    function __construct($name, $address, $age){
//        echo "<h5>  this function is called
//            while creating the object</h5>";
////        var_dump($this);  # $this --> caller instance
//        $this->name = $name;
//        $this->address = $address;
//        $this->age = $age;
//    }
//    function seyHello(){
//        echo "Hello ". $this->name;
//    }
//
//
//
//}
//$p= new Person(
//    "noha", 'cairo', 30);
//var_dump($p);
//# modify object property
//$p->name="Noha Shehab";
//# class function
//$p->seyHello();
//### all objects from the same type must have the same
//# object architecture
//$p->country = 'Egypt ';  # add new property in the run
//var_dump($p);
//
////$p->address = 'test';
//
//
//$p2= new Person(
//    "Ahmed", 'cairo', 30);
//var_dump($p2);
//unset($p2->name);
//var_dump($p2);

##########################



//class Employee{
//    public  string $name;
//    private string $email;
//    public int $age;
//    protected  int $salary;
//
//    function __construct(string $name,
//             string $email,int $age ){
//        $this->name = $name;
//        $this->email = $email;
//        $this->age = $age;
//    }
//
//    /**
//     * @param int $salary
//     */public function setSalary( $salary)
//    {
//        if($salary> 0){
//            $this->salary = $salary;
//        }else{
//            $this->salary = 0;
//        }
//    }
//
//    /**
//     * @return int
//     */public function getSalary()
//    {
//        return $this->salary*.8;
//    }
//
//
//
//
//
//}
//
//
//$p = new Employee("noha",
//    'noha@gmail.com',30);
//var_dump($p);
//$p->name =200;
//
//var_dump($p);
//
//$p->setSalary(1000);
//echo $p->getSalary();
//var_dump($p);
//
//
//


















#########3 construct vs destructor
//class Employee
//{
//
//    static $no_of_objects;
//    public string $name;
//    private string $email;
//    public int $age;
//    protected int $salary;
//
//    function __construct(string $name,
//                         string $email, int $age)
//    {
//        $this->name = $name;
//        $this->email = $email;
//        $this->age = $age;
//
//        Employee::$no_of_objects ++;
//    }
//
//
//    function __destruct(){
//        echo "<h3 style='color: red'>
//
//        this function is being called while
//        destroying the object :{$this->name} </h3>";
//
//        Employee::$no_of_objects --;
//    }
//
//}
//
//
//
//
//$e= new Employee("Ahmed", 'ahmed',
//    23);
//var_dump($e);
//
//$e2= new Employee("Ali", 'ahmed',
//    23);
//var_dump($e2);
//
//unset($e);
//
//
//echo Employee::$no_of_objects;
//
//echo "<br> ----";
//
//echo "<br> ----";
//
//echo "<br> ----";
//
//echo "<br> ----";
//
//echo "<br> ----";



############## dynamic setters and getters

//class Employee
//{
//
//    static $no_of_objects;
//    public string $name;
//    private string $email;
//    public int $age;
//    protected int $salary;
//
//    function __construct(string $name,
//                         string $email, int $age)
//    {
//        $this->name = $name;
//        $this->email = $email;
//        $this->age = $age;
//
//        Employee::$no_of_objects ++;
//    }
//
//
////    function __destruct(){
////        echo "<h3 style='color: red'>
////
////        this function is being called while
////        destroying the object :{$this->name} </h3>";
////
////        Employee::$no_of_objects --;
////    }
//
//    function __set($name, $var){
//        echo "<h3 style='color: purple'> ---> this function is called
//         now</h3>";
//
////        $this->$name = $var;
//        throw new Exception("Cannot modify object in runtime");
//    }
//
//}
//
////$e= new Employee("Ahmed", 'ahmed',
////    23);
////var_dump($e);
//
//$e2= new Employee("Ali", 'ahmed',
//    23);
//var_dump($e2);
//$e2->manager = true;
//## the above line will call the function
////__set($variable_name, $value)'
////
//var_dump($e2);


######################################33

//class Employee
//{
//
//    static $no_of_objects;
//    public string $name;
//    private string $email;
//    public int $age;
//    protected int $salary;
//
//    function __construct($name, $email){
//        echo"<h5 style='color: green'> Hi I am the constructor I
//        am being called only on the first time
//        you creates an object
//        </h5>";
//        $this->name = $name;
//        $this->email = $email;
//    }
//
//    # this function will be called
//    # if the property doesn't exist in the object
//    function __set($name,$var){
//        echo"<h5 style='color: orangered'> Hi I am the
//    set function and I am being called each you try to
//    add new property to the object
//        </h5>";
//
//        $allowed = ['country', 'city'];
//        if(in_array($name, $allowed)){
//            $this->$name = $var;
//        }else{
//            throw new Exception("Cannot add new properties to the object");
//        }
//
//    }
//
//    function __get($name){
//        $allowed = ['country', 'city'];
//        if(in_array($name, $allowed)){
//            return $this->$name;
//        }else{
//            throw new Exception("no such property in the object ");
//        }
//
//    }
//}

#create object from the class
//$p = new Employee();
//var_dump($p);
/*
 * object(Employee)[1]
  public string 'name' => *uninitialized*
  private string 'email' => *uninitialized*
  public int 'age' => *uninitialized*
  protected int 'salary' => *uninitialized*
 *
 *
 * */
##### creating object via constructor
## constructor will be called only 1 time
## when you create new object


//$p = new Employee("nada", "nada@gmail.com");
//var_dump($p);
//
//$p->age = 23;
//
//var_dump($p);


### control setting new properties to the object
## in the run time  --> using __set
//$p = new Employee("nada", "nada@gmail.com");
//var_dump($p);
//
//$p->country = 23;
//var_dump($p);
//
////$p->n= 324;
//
//
//$p->name = 'Ahmed';
//
////var_dump($p);
//
//var_dump($p->country);
//var_dump($p->mm);



########## static members

//class Math
//{
//    const pi = 3.14159;
//    static function squared($input)
//    {
//        return $input*$input;
//    }
//}
//echo Math::squared(8);
//echo Math::pi;
//







class Employee
{

    static $no_of_objects;
    public string $name;
    private string $email;
    public int $age;
    protected int $salary;

    function __construct(string $name,
                         string $email, int $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        # self keyword --> refers to the current class
        self::$no_of_objects ++;
        var_dump(self::$no_of_objects);
        var_dump(Employee::$no_of_objects);
    }

}



$e = new Employee("Ahmed",'ahmed@gmil', 93);






















