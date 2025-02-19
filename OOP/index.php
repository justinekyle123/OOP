<?php
    include_once("connections/db.php");

    $sql = "SELECT * FROM student ";
    $result = $con->query($sql);

    $row = $result->fetch_assoc();

    do{
     echo   $row['first_name']
    }while(   $row = $result->fetch_assoc());
?>