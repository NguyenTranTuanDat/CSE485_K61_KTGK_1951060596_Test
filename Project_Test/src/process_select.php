<?php
    require "config.php";
    $name   = $_POST['name'];
    $sex    = $_POST['sex'];
    $age    = $_POST['age'];
    $bgroup = $_POST['bgroup'];
    $regdate= $_POST['regdate'];
    $phone  = $_POST['phone'];

    $sql = "INSERT INTO blood_donor(name, sex, age, bgroup, regdate, phone) VALUES('$name','$sex','$age','$bgroup','$regdate','$phone') ";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        header('location: error.php');
    }else{
        header('location: index.php');
    } 
    mysqli_close();   
?>