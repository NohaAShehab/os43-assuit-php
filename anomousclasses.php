<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";
echo "<h1> Interfaces   </h1>";


interface DisplayMsg {
    public function printMsg(string $msg);
}


class Application {
    private $displayer;
    public function getDisplayer(): DisplayMsg {
        return $this->displayer;
    }
    public function setDisplayer(DisplayMsg $dismsg) {
        $this->displayer = $dismsg;
    }
}


class Helper implements DisplayMsg{
    public function printMsg(string $msg)
    {
       echo "<h1 style='color: red'> {$msg} </h1>";
    }
}
###### class application contains function setdisplayer , get displayer
## these functions to work need objects from display message
## interface ==> so I have created class helper implement
# Display message interface
$app = new Application();
var_dump($app);

$h = new Helper();
### use the helper object (display message )--> to set the
# displayer for the app object
$app->setDisplayer($h);
var_dump($app);

#### when I call the function getDisplayer ? will return with
### object --> display (Helper)
$res=$app->getDisplayer();
var_dump($res);
var_dump($res instanceof DisplayMsg);
var_dump($res instanceof Helper);

## then I can call the function printMsg in the Interface
$res->printMsg("My name is noha");

# the problem with the above solution
# is that we had to create new class to use object form it?

# so check this better solution


$app2 = new Application();

$app2->setDisplayer(new class implements DisplayMsg{
    public function printMsg(string $msg)
    {
        // TODO: Implement printMsg() method.
        echo "<h2 style='color: green;font-size: xx-large'> {$msg} </h2>";
    }
});

$app2->getDisplayer()->printMsg("PHP is simple");

$app3 = new Application();

$app3->setDisplayer(new class implements DisplayMsg{
    public function printMsg(string $msg)
    {
        echo "Hi from my customized function";
        echo "<h2 style='color: purple;font-size: xx-large'> {$msg} </h2>";
    }
});


$app3->getDisplayer()->printMsg("The lecture is interesting");


























