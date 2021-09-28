<?php
    session_start();
    include_once "config.php";
    
    $sql = "SELECT * FROM `users` WHERE NOT unique_id = {$_SESSION['unique_id']}";
    $query=$connect->prepare($sql);
    $query->execute();
    $output = "";
    if($query->rowCount()==0){
        $output .= "Пока нету пользователей...";
    }else if($query->rowCount()>0){
        include "data.php";
    }
    echo $output;
    
?>