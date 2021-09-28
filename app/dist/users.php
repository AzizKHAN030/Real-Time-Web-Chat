<?php
    session_start();
    if(!isset($_SESSION["unique_id"])){
        header("Location: login.php");
    }
?>
<?php include_once "header.php";?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php 
                include_once "php/config.php";
                $sql = "SELECT * FROM `users` WHERE unique_id={$_SESSION['unique_id']}";
                $query = $connect->prepare($sql);
                $query->execute();
                if($query->rowCount()>0){
                    $userData = $query->fetch(PDO::FETCH_ASSOC);
                };
                ?>
                <div class="content"><img
                        src="php/images/<?=$userData['img']; ?>"
                        alt="">
                    <div class="details"> <span><?= $userData['first_name']." ".$userData['last_name']; ?></span>
                        <p><?= $userData['status']; ?></p>
                    </div>
                </div><a class="logout" href="php/logout.php?user_id=<?=$userData['unique_id'];?>">Выйти </a>
            </header>
            <div class="search"> <span class="text">Выберите пользователя</span><input type="text"
                    placeholder="Введите имя для поиска..."><button> <i class="fas fa-search"></i></button></div>
            <div class="users-list">
                
            </div>
        </section>
    </div>
</body>
<script src="js/main.min.js"> </script>
<script src="js/users.min.js"></script>
</html>