<?php
    include_once "config.php";
    $searchTxt = trim($_POST['searchTxt']);
    $output = "";
    $sql = "SELECT * FROM  `users` WHERE first_name LIKE '%{$searchTxt}%' OR last_name LIKE '%{$searchTxt}%'";
    $query=$connect->prepare($sql);
    $query->execute();
    if($query->rowCount()>0){
        include "data.php";
    }else{
        $output = "<span class='search-result'>Пользователь не найден</span>";
    }
    echo $output;
?>