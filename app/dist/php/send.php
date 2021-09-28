<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_POST['outgoing_id'];
        $incomig_id = $_POST['incoming_id'];
        $message = $_POST['message'];
        
        if(!empty($message)){
            $sql = "INSERT INTO `messages` (incoming_msg_id, outgoing_msg_id, message) VALUES ('{$incomig_id}','{$outgoing_id}',:message)" or die();
        }
    }else{
        header("../login.php");
    }
    
    $query=$connect->prepare($sql);
    $query->execute([
        "message"=>$message,
    ])
?>