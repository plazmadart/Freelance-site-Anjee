<?php
require_once "db.php";
include "functions.php";

$orders = selectOrders($mysqli, 8);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Программист</title>
    <link rel="stylesheet" href="css/programmer.css" type="text/css">
</head>
<body>
    <div class="container">
        <!-- Шапка и категория -->
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
        <section class="main">
            <img src="img/" alt="">
            <div class="category-name"><p>Программист</p></div>
        </section>
    </div>
        <!-- Конец шапки и категории -->

        <!-- Основной блок -->
        <section>
            <div class="heading">
                <p>Открытые вакансии</p>
            </div>
            <div class="offers">
                <?php foreach ($orders as $row): ?>
                <div class="offer">
                    <div class="nameoffer">
                        <p><?php echo $row["description"]; ?></p>
                    </div>
                    <div class="salary">
                        <p><?php echo $row["salary"]; ?> руб.</p>
                    </div>
                    <div class="link">
                        <a href="#">Откликнуться</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
         <!-- Конец основного блока -->
</body>
</html>