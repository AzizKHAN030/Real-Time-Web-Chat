<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_POST['outgoing_id'];
        $incoming_id = $_POST['incoming_id'];
        $output = "";
        $sql= "SELECT * FROM `messages`
        LEFT JOIN `users` ON users.unique_id = messages.outgoing_msg_id
         WHERE (outgoing_msg_id={$outgoing_id} AND incoming_msg_id={$incoming_id}) OR (outgoing_msg_id={$incoming_id} AND incoming_msg_id={$outgoing_id}) ORDER BY msg_id ASC";
        $query = $connect->prepare($sql);
        $query->execute();
        if($query->rowCount()>0){
            $messages = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($messages as $message) {
               if($message['outgoing_msg_id']===$outgoing_id){
                        $output .= '<div class="chat outgoing">
                        <div class="details">
                            <p>'. $message['message'] .'</p>
                        </div>
                    </div>';
                    }else{
                        $output.=' <div class="chat incoming"><img
                        src="php/images/'.$message['img'].'"
                        alt="">
                    <div class="details">
                        <p>'. $message['message'] .'</p>
                    </div>
                </div>';
                    }
            }
            $sql2 = "SELECT `status` FROM `users` WHERE unique_id={$incoming_id}";
            $query2 = $connect->prepare($sql2);
            $query2->execute();
            
            $status = $query2->fetch(PDO::FETCH_ASSOC)['status'];
            $statusInput = "<input type='hidden' value=\"{$status}\">";
            echo $output;
            echo $statusInput;
        }
    }else{
        header("../login.php");
    };
?>