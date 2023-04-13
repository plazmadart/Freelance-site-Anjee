<?php 
require_once "db.php";
include "functions.php";

if(isset($_POST['loginbtn']))
{
    if(!empty($_POST['login']) && !empty($_POST['password']))
    {
        if(checkPassword($mysqli, $_POST['login'], $_POST['password']))
        {
            echo "<script>window.location.href='lk.php'</script>";
        }
        else
        {
            echo "<script>alert(\"Вы ввели неправильный пароль\")</script>";    
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
    <title>Вход в личный кабинет</title>
    <link rel="stylesheet" href="css/authorization.css" type="text/css">
</head>
<body>
    <div class="main">
        <section class="content-header">
            <div class="shapka">
                <div>
                    <a href="#"><img class="menu-but" src="img/menu.svg" onclick="window.location.href='index.php'" alt="За стеклом"></a>     
                </div>
                <div class="test">
                    <img class="logo" src="img/logo.png">
                </div>
            </div>
        </section>
        <div class="container">
            <section>
            <h1 class="zag">Вход в личный кабинет</h1>
                <form method="POST" action="lk.php" class="forma">
                    <div>
                        <input  type="text" placeholder="Логин" name="login" class="from field"/>
                    </div>
                    <div>
                        <input type="password" placeholder="Пароль" name="password" class="from field"/>
                    </div>
                    <input type="submit" class="validateBtn" name="loginbtn" value="Войти"/>
                    <a href="#" onclick="window.location.href='registration.php'"><p>Нет аккаунта? Зарегестрируйтесь!</p></a>
                </form>
            </section>
        </div>
    </div>  
</body>
</html>