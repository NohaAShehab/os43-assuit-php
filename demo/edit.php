<?php

include 'connect_to_db.php';

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";

## 1- get old data

if(isset($_GET['id'])){
    $id = $_GET['id'];
    ## connect to databse ==

    try{

        $db = connect_to_db();
        if($db){
            $select_query= "Select * from students where id=:id";
            $stmt = $db->prepare($select_query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $res = $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if($row){
//                var_dump($row);
            }else{
                header("Location:datatable.php");
            }
        }
    }catch (Exception $e){
        echo $e->getMessage();
    }



}else{
    exit;
}

?>
<h1> Update student <?php  echo $row['name'];?> </h1>
<form action="update.php?id=<?php echo $row['id'] ?>" method="POST">
    <div class="mb-3">
        <input type="hidden" name="user_id" value="<?php echo $row['id'] ?>">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name='name'
               value="<?php  echo $row['name']; ?>"
               class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email"
               value="<?php  echo $row['email']; ?>"
               class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>