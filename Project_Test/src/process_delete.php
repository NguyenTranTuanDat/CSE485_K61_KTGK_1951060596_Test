<?php
    require "config.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM blood_donor where id = '$id'";
    $result = mysqli_query($conn,$sql);
    if($result > 0){
        header("location: index.php");
    }else{
        header("location: error.php");
    }
    mysqli_close();
?>