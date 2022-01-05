<?php
    $conn = mysqli_connect('localhost','root','','nganhangmau');
    if(!$conn){
        die("<script>alert('Kết nối sql thất bại!')</script>");
    }
?>