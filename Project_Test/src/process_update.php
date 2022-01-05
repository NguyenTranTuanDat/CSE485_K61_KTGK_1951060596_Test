<?php
    require "config.php";
    $id     = $_POST['id'];
    $name   = $_POST['name'];
    $sex    = $_POST['sex'];
    $age    = $_POST['age'];
    $bgroup = $_POST['bgroup'];
    $regdate= $_POST['regdate'];
    $phone  = $_POST['phone'];

    $sql = "UPDATE blood_donor SET name = '$name',sex = '$sex',age = '$age',bgroup = '$bgroup',regdate = '$regdate',phone = '$phone' WHERE id = $id  ";
    $result = mysqli_query($conn,$sql);

    if($result){
        header("location: index.php");
    }else{
        header("location: error.php");
    }

?>