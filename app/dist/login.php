<?php session_start(); 
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
?>

<?php include_once "header.php";?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Чатограмм</header>
            <form action="#">
                <div class="error-txt">Текст ошибки</div>
                <div class="name-details">
                    <div class="field"> <input type="text" placeholder=" " name="email" autocomplete="off"><label for="email">Email</label>
                    </div>
                    <div class="field"> <input type="password" placeholder=" " name="password" autocomplete="off"><label
                            for="password">Пароль</label><i class="fas fa-eye"></i></div>
                    <div class="field button"> <input type="submit" value="Перейти в чат"></div>
                </div>
            </form>
            <div class="link">Еще не зарегистрированы?<a href="index.php"> Зарегистрироваться</a></div>
        </section>
    </div>
</body>
<script src="js/main.min.js"></script>
<script src="js/login.min.js"></script>

</html>