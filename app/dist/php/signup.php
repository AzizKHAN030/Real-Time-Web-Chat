<?php
    session_start();
    include_once 'config.php';

    $name = $_POST['name'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(!empty($name) && !empty($lname)&& !empty($email)&& !empty($pass)){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            $sql = "SELECT `email` FROM `users` WHERE `email`='{$email}'";
            $query = $connect->prepare($sql);
            $query->execute();
            if($query->rowCount()>0){
                echo "$email-уже имеется!";
            }else{
                if(isset($_FILES['photo'])){
                    $imgName = $_FILES['photo']['name'];
                    $tmpName = $_FILES['photo']['tmp_name'];
                    
                    $img_explode = explode('.',$imgName);
                    $img_ext = end($img_explode);
                    
                    $extensions = ['png','jpg','jpeg'];
                    if(in_array($img_ext,$extensions)===true){
                        $time = time();
                        $new_imgName = $time.$imgName;
                        if(move_uploaded_file($tmpName,"images/".$new_imgName)){
                            $status = "Онлайн";
                            $rand_id = rand(time(),10000000);
                            
                            $sql2 = "INSERT INTO `users` (unique_id,first_name,last_name,email,password,img,status) VALUES ({$rand_id},:fname,:lname,:email,:pass,'{$new_imgName}','{$status}')";
                            $query2=$connect->prepare($sql2);
                            $query2->execute([
                                'fname' => $name,
                                'lname' => $lname,
                                'email' => $email,
                                'pass' => hash('sha512',$pass)  
                            ]);
                            if($query2){
                                $sql3 = "SELECT * FROM `users` WHERE email = '{$email}'";
                                $query3 = $connect->prepare($sql3);
                                $query3->execute();
                                if($query3->rowCount()>0){
                                    $row = $query3->fetch(PDO::FETCH_ASSOC);
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo 'success';
                                }
                            }else{
                                echo 'что то пошло не так';
                            }
                        }
                    }else{
                        echo 'Загрузите фото формата jpeg,jpg,png';
                    }
                }else{
                    echo 'Загрузите фото';
                }
            }
        }else{
            echo "$email - неправильный email";
        }
        
    }else{
        echo 'Все поля должны быть заполнены!';
    }
?>