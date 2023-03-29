<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1> Dealing with files   </h1>";


try{

    $fileobj = fopen("mycv.txt", 'r');  # if file not found ---> return false
    var_dump($fileobj);
    if ($fileobj){
//        echo " File found";
        echo "<h2> Reading data from the file  into one string  </h2>";
//        $filesize = filesize('mycv.txt');  # no of bytes === no of chars
//        ## char - -> save one byte
//        var_dump($filesize);
//        $data= fread($fileobj, $filesize); # read content of the file into one string .
//        var_dump($data);
        echo "<h2> Reading data from the file line by line  </h2>";

//        $line = fgets($fileobj);  # read line till specified number
//        var_dump($line);
//
//        echo '<br> -----------';
////        var_dump(feof($fileobj)); ## return true if the pointer reached the end of the file
//        while (! feof($fileobj)){
//            $line = fgets($fileobj);  # read line till specified number
//            var_dump($line);
//        }

//        $line = fgetcsv($fileobj, 100, ' ');  # specify the line length
//        var_dump($line);  # read line into array
//        while (! feof($fileobj)){
//            $line = fgetcsv($fileobj);  # read line till specified number
//            var_dump($line);
//        }
        fclose($fileobj);
        echo "<h2> Reading data from the file into an array  </h2>";
//        $lines = file('mycv.txt');
////        var_dump($lines);
//
//        echo "<table class='table'> <tr><td>user name</td>  <td> user id</td>
//            <td> password</td> <td> group id </td> <td> comment about user </td><td> home directory </td>
//        <td> login shell </td>
//        </tr>";
//        foreach ($lines as $line){
//            $linedata= explode(":", $line);
//            echo "<tr>";
//            foreach ($linedata as $val){
//                echo "<td>{$val} </td>";
//            }
//            echo "</tr>";
//
//        }


        echo "<h1>Output file content to the stream </h1>";

        readfile("mycv.txt");
        echo "<h1>read file into one step  </h1>";

        $filedata = file_get_contents("mycv.txt");  # read file content into one string .
        var_dump($filedata);








    }
}catch (Exception $e){
    echo $e->getMessage();
}