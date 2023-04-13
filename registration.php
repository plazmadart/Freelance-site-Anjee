<?php
require_once "db.php";
include "functions.php";

if (isset($_POST['submitreg'])) 
{
    if (!empty($_POST['fam']) && !empty($_POST['name']) && !empty($_POST['otch']) && !empty($_POST['date_of_birth']) && !empty($_POST['phnum']) && !empty($_POST['email']) && !empty($_POST['type']) && !empty($_POST['login']) && !empty($_POST['password']))
    {
        if (checkUserExists($mysqli, $_POST['login'], $_POST['email']))
        {
            echo "<script>alert(\"Пользователь с таким логином или email уже существует\")</script>";
        }
        else
        {
            regUser($mysqli, $_POST['fam'], $_POST['name'], $_POST['otch'], $_POST['date_of_birth'], $_POST['pflink'], $_POST['phnum'], $_POST['email'], $_POST['type'], $_POST['aboutme'], $_POST['login'], $_POST['password']);
            echo "<script>window.location.href='authorization.php'</script>";
        }
    }
    else
    {
        echo "<script>alert(\"Заполните все поля.\")</script>";
    }
}

?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/registration.css" type="text/css">
</head>
<body>
    <div class="main">
        <section class="content-header">
            <div class="shapka">
                <div >
                    <a href="#"><img class="menu-but" src="img/menu.svg" alt="За стеклом"></a>     
                </div>
                <div class="test">
                    <img class="logo" src="img/logo.png">
                </div>  
            </div>
            
        </section>
        <div class="container">
            <section>
            <h1 class="zag">Регистрация</h1>
            <form method="POST" class="forma">
                <div>
                    <input type="text" placeholder="Фамилия" name="fam"/>
                </div>
                <div>
                    <input type="text" placeholder="Имя" name="name"/>
                </div>
                <div>
                    <input type="text" placeholder="Отчество" name="otch"/>
                </div>
                <div>
                    <input type="email" placeholder="Email" name="email"/>
                </div>
                <div>
                    <input type="text" placeholder="Номер телефона" name="phnum"/>
                </div>
                <div>
                    <input type="text" placeholder="Ссылка на портфолио" name="pflink" class="portfolio"/>
                </div>
                <div>
                    <label>
                        Дата рождения
                    </label>
                </div>
                <div>
                    <input type="date" id="start" name="date_of_birth"  min="1900-01-01" max="2023-12-31" placeholder="">
                </div>
                <div>
                    <input type="text" placeholder="Логин" name="login"class="from field"/>
                </div>
                <div>
                    <input type="password" placeholder="Пароль" name="password" class="from field"/>
                </div>
                <div>
                    <label>
                        Статус:
                    </label>
                </div>
                <div>
                    <select class="type" name="type">
                        <option value="2" name="devs">Исполнитель</option>
                        <option value="1" name="mangs">Заказчик</option>
                    </select>
                </div>
                <div>
                    <label>
                        Расскажите о себе:
                    </label>
                </div>
                <div>
                    <textarea rows="5" cols="40" class="message field" name="aboutme"></textarea>
                </div>
                <input type="submit" class="validateBtn" name="submitreg" value="Зарегестрироваться"/>
                <a href="#" onclick="window.location.href='authorization.php'"><p>Уже есть аккаут? Войдите!</p></a>  
            </form>
            </section>
        </div>
    </div>
</body>
</html>