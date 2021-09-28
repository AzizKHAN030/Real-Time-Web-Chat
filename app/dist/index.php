<?php session_start(); 
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
?>
<?php include_once "header.php";?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Чатограмм</header>
            <form action="#">
                <div class="error-txt">Текст ошибки</div>
                <div class="name-details">
                    <div class="field"> <input type="text" placeholder=" " name="name" autocomplete="off"><label for="name">Имя</label>
                    </div>
                    <div class="field"> <input type="text" placeholder=" " name="lastName" autocomplete="off"><label
                            for="lastName">Фамилия</label></div>
                    <div class="field"> <input type="text" placeholder=" " name="email" autocomplete="off"><label for="email">Email</label>
                    </div>
                    <div class="field"> <input type="password" placeholder=" " name="password" autocomplete="off"><label
                            for="password">Пароль</label><i class="fas fa-eye"></i></div>
                    <div class="field"> <input type="file" name="photo"><label for="name">Выберите фото</label></div>
                    <div class="field button"> <input type="submit" value="Перейти в чат"></div>
                </div>
            </form>
            <div class="link">Уже зарегистрированы?<a href="login.php">Войти</a></div>
        </section>
    </div>
</body>
<script src="js/main.min.js"></script>
<script src="js/sign.min.js"></script>

</html>