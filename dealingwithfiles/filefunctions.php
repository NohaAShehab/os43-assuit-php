<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1>File functions  </h1>";

/*
 * if you are trying to open file with write / append mode ---> if file doesn't exists -->PHP will try
 * to create it -->if file cannot be created due permissions PHP--> raise warning 0--> return with False
 * */

try{
    # if you open file with write mode then close it ---> old content of the file will be removed

    $fileobj = fopen("users.txt", 'r');  # if file not found ---> return false
    var_dump($fileobj);
    if ($fileobj){
        $line = fgets($fileobj);
        var_dump($line);
        $line = fgets($fileobj);
        var_dump($line);
        ## reset file pointer to the first line
//        rewind($fileobj);
//        $line = fgets($fileobj);
//        var_dump($line);
//        fseek($fileobj, 18);  # reset pointer of the file to the offset 20 --> from the begining of the file
//        $line = fgets($fileobj);
//        var_dump($line);

        var_dump(ftell($fileobj));  # tell me where is the pointer now
        var_dump(filetype('users.txt'));
        var_dump(filetype('demo'));

        var_dump(file_exists('demo'));

        var_dump(is_link('mycv.txt'));
        var_dump(is_link('mycvlink'));

        $mycvfile= '/var/www/html/osassuit43/day02/dealingwithfiles/mycv.txt';

        $filename = basename($mycvfile);
        var_dump($filename);



        fclose($fileobj);
    }
}catch (Exception $e){
    echo $e->getMessage();
}
