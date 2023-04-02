

<?php

    if(isset($_GET["errors"])){
//        var_dump($_GET);
        $errors = json_decode($_GET["errors"], true);
//        var_dump($errors);
    }
    if(isset($_GET["old"])){
    //        var_dump($_GET);
        $old_data = json_decode($_GET["old"], true);
    //        var_dump($errors);
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1> Add user </h1>
<form method="POST" action="validatelogin.php" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control"
               value="<?php if(isset($old_data['email'])) echo $old_data['email']; ?>"
               name='email' id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        <span class="text-danger"> <?php if(isset($errors['email'])) echo $errors['email']; ?> </span>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name='password'
               value="<?php if(isset($old_data['password'])) echo $old_data['password']; ?>"

               id="exampleInputPassword1">
        <span class="text-danger"> <?php if(isset($errors['password'])) echo $errors['password']; ?> </span>
    </div>

    <button type="submit" class="btn btn-primary">Login </button>
</form>
</div>