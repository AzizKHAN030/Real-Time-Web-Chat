<?php
    while($user = $query->fetch(PDO::FETCH_ASSOC)){
        $sql2 = "SELECT * FROM `messages` WHERE (incoming_msg_id={$user['unique_id']} OR outgoing_msg_id={$user['unique_id']}) AND (incoming_msg_id={$_SESSION['unique_id']} OR outgoing_msg_id={$_SESSION['unique_id']}) ORDER BY msg_id DESC LIMIT 1";
        $query2=$connect->prepare($sql2);
        $query2->execute();
        $usersMsg = $query2->fetch(PDO::FETCH_ASSOC);
        if($query2->rowCount()>0){
            $result = $usersMsg['message'];
        }else{
            $result = "Сообщений нет";
        }
        (strlen($result)>28)?$message = substr($result,0,28).'...':$message = $result;
        ($_SESSION['unique_id']==$usersMsg['outgoing_msg_id'])?$you = "Вы: ": $you="";
        
        ($user['status']=="Офлайн") ? $offline="offline" : $offline="";
        
        $output.='
        <a href="chat.php?user_id='.$user['unique_id'].'">
                <div class="content"> <img
                        src="php/images/'.$user['img'].'"
                        alt="">
                    <div class="details"> <span>'. $user['first_name']. " " . $user['last_name'].'</span>
                        <p>'.$you.$message.'</p>
                    </div>
                </div>
                <div class="status-dot '.$offline.'"> <i class="fas fa-circle"></i></div>
            </a>
            ';
    }
    
?>