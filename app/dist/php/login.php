<?php
     session_start();
     include_once 'config.php';
     
     $email = $_POST['email'];
     $pass = $_POST['password'];
     
     if(!empty($email) && !empty($pass)){
         $sql = "SELECT * FROM `users` WHERE `email` = :email AND password = :pass";
         $query=$connect->prepare($sql);
         $query->execute([
             'email'=>$email,
             'pass'=>hash('sha512',$pass)
         ]);
         if($query->rowCount()>0){
            $row = $query->fetch(PDO::FETCH_ASSOC);
            $status = "Онлайн";
            $sql2 = "UPDATE users SET status='{$status}' WHERE unique_id={$row['unique_id']}";
            $query2=$connect->prepare($sql2);
            $query2->execute();
            $_SESSION['unique_id'] = $row['unique_id'];
            echo 'success';
         }else{
            echo "Email или пароль неверный!";
         }
     }else{
         echo"Все поля должны быть заполнены!";
     }
?>