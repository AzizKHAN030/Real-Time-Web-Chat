<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $user_id = $_GET['user_id'];
        if(isset($user_id )){
            $status = "Офлайн";
            $sql = "UPDATE users SET status='{$status}' WHERE unique_id={$user_id}";
            $query=$connect->prepare($sql);
            $query->execute();
            session_unset();
            session_destroy();
            header("Location: ../login.php");
        }
    }else{
        header("Location: ../login.php");
    }
    
?>