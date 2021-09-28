<?php
    session_start();
    if(!isset($_SESSION["unique_id"])){
        header("Location: login.php");
    }
    $user_id = $_GET['user_id'];
?>
<?php include_once "header.php";?>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
            <?php 
                include_once "php/config.php";
                $sql = "SELECT * FROM `users` WHERE unique_id={$user_id}";
                $query = $connect->prepare($sql);
                $query->execute();
                if($query->rowCount()>0){
                    $userData = $query->fetch(PDO::FETCH_ASSOC);
                };
                ?>
                <a class="back-icon" href="users.php"><i class="fas fa-arrow-left"> </i></a><img
                    src="php/images/<?=$userData['img'];?>"
                    alt="">
                <div class="details"> <span><?=$userData['first_name']. " " . $userData['last_name'];?></span>
                    <p><?=$userData['status'];?></p>
                </div>
            </header>   
            <div class="chat-box">
                
               
            </div>
            <form class="typing-area" action="">
                <input type="hidden" name="outgoing_id" value = "<?= $_SESSION['unique_id'];?>">
                <input type="hidden" name="incoming_id" value = "<?= $user_id;?>">
                <input class="input-field" type="text" name="message" placeholder="Сообщение..." autocomplete="off">
                <button><i class="fas fa-share"></i></button>
            </form>
        </section>
    </div>
    <script src="js/main.min.js"></script>
    <script src="js/chat.min.js"></script>
                
</body>

</html>