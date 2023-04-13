<?php
require_once "db.php";
include "functions.php";

$login = $_POST['login'];
$userinfo = getUserInfo($mysqli, $login);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="css/lk.css" type="text/css">
</head>
<body>
    <div class="container">
        <!-- Шапка -->
        <section class="content-header">
            <div class="shapka">
                <div >
                    <a href="#"><img class="menu-but" src="img/menu.svg" onclick="window.location.href='index.php'" alt="За стеклом"></a>     
                </div>
                <div class="test">
                    <img class="logo" src="img/logo.png">
                </div>  
                
                <div class="buttons-header">
                    <a href="#" onclick="window.location.href='authorization.php'">Личный кабинет</a>
                </div>
            </div>            
        </section>
        <section class="heading">
            <p>Личный кабинет</p>
        </section>
        <section class="main">
            <div class="info">
                <form method="POST">
                    <div class="block1">
                        <?php foreach ($userinfo as $row): ?>
                        <div class="str">
                            <img src="/img/иконка ФИО.svg" alt="">
                            <p><?php echo $row['surname'] ?></p>
                            <p><?php echo $row['name'] ?></p>
                            <p><?php echo $row['otch'] ?></p>
                        </div>
                        <div class="str">
                            <img src="/img/иконка телефон.svg" alt="">
                            <p><?php echo $row['phnum'] ?></p>
                        </div>
                        <div class="str">
                            <img src="/img/иконка почты.svg" alt="">
                            <p><?php echo $row['email'] ?></p>
                        </div>
                        <div class="str">
                            <img src="/img/иконка календарь.svg" alt="">
                            <p><?php echo $row['dateofbirth'] ?></p>
                        </div>
                        <div class="str">
                            <img src="/img/исполнитель.svg" alt="">
                            <p><?php echo selectType($mysqli, $row['type']) ?></p>
                        </div>
                        <div class="str">
                            <img src="/img/иконка портфолио.svg" alt="">
                            <p><?php echo $row['pflink'] ?></p>
                        </div>
                        <div class="str">
                            <img src="/img/иконка личная информация.svg" alt="">
                            <p><?php echo $row['aboutme'] ?></p> 
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="block2">
                        <div class="str">
                            <img src="/img/login.svg" alt="">
                            <input type="text" placeholder="Логин" name="login" value="<?=$_POST['login'];?>" class="from_field"/>
                        </div>
                        <div class="str">
                            <img src="/img/password.svg" alt="">
                            <input  type="password" placeholder="Пароль" name="password" value="<?=$_POST['password'];?>" class="from_field"/>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

</body>
</html>