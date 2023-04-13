<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnjeeWork</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="stylesheet" href="css/index.css" type="text/css">
</head>
<body>
    <script src="/js/script.js"></script>
    <div class="container">
        <section class="content-header">
            <div class="shapka">
                <div >
                    <a href="#"><img class="menu-but" src="img/menu.svg" alt="За стеклом"></a>     
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
            <div class="texts">
                <div class="info1">
                    <h2>Что такое AnjeeWork?</h2>
                    <p>
                        Это место, где вы можете заявить о себе, как о высококвалифицированном специалисте.
                    </p>
                    <p>
                        Каждый день сотни людей нуждаются решении самых различных проблем: поломка водопровода, установка забора, перевозка или сборка мебели.
                    </p>
                    <p>Мы предлагаем огромный выбор заданий, и какое из них Вы возьмете, Вы выбираете сами!</p>
               </div>
               <div class="info2">
                    <h2>Как это работает?</h2>
                    <p>
                        Любой желающий может разместить на портале заявку на решение своей проблемы. 
                    </p>
                    <p>
                        Наши специалисты быстро откликнутся на Вашу заявку и предложат свои услуги, чтобы удовлетворить Ваши потребности.
                    </p>
                    <p>Мы предлагаем огромный выбор заданий, и какое из них Вы возьмете, Вы выбираете сами!</p>
               </div>
            </div>
           <div class="down">
            <a href="#id1" ><img src="img/down.svg" alt=""></a>
           </div>
            
        </section> 
        <section class="cards">
            <h1 id="id1" class="heading">Категории</h1>
            <table class="categories">
                <tr>
                    <td>
                        <div class="category" onclick="window.location.href='part-time job.php'">
                            <div class="vacancy">
                                <p class="name">Подработка</p>
                                <p class="salary">до 50 000 рублей</p>
                            </div>

                            <div class="pic">
                                <img src="img/Подработкаpng.png">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="category" onclick="window.location.href='courier.php'">
                            <div class="vacancy">
                                <p class="name">Курьер</p>
                                <p class="salary">до 80 000 руб.</p>
                            </div>

                            <div class="pic">
                                <img src="img/курьер.png">
                            </div>
                        </div>  
                    </td>
                    <td>
                        <div class="category" onclick="window.location.href='driver.php'">
                            <div class="vacancy">
                                <p class="name">Водитель</p>
                                <p class="salary">до 100 000 руб.</p>
                            </div>
                            <div class="pic">
                                <img src="img/Водитель.png">
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="category" onclick="window.location.href='seller.php'">
                            <div class="vacancy">
                                <p class="name">Продавец</p>
                                <p class="salary">10 000 - 90 000 руб.</p>
                            </div>
                            <div class="pic">
                                <img src="img/Продавец.png">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="category" onclick="window.location.href='welder.php'">
                            <div class="vacancy">
                                <p class="name">Сварщик</p>
                                <p class="salary">до 170 000 руб.</p>
                            </div>
                            <div class="pic">
                                <img src="img/Сварщик.png">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="category" onclick="window.location.href='admin.php'">
                            <div class="vacancy">
                                <p class="name">Администратор</p>
                                <p class="salary">15 000 - 70 000 руб.</p>
                            </div>
                            <div class="pic">
                                <img src="img/Администратор.png">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="category" onclick="window.location.href='builder.php'">
                            <div class="vacancy">
                                <p class="name">Строитель</p>
                                <p class="salary">20 000 - 120 000 руб.</p>
                            </div>
                            <div class="pic">
                                <img src="img/Строитель.png">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="category" onclick="window.location.href='programmer.php'">
                            <div class="vacancy">
                                <p class="name">Программист</p>
                                <p class="salary">40 000 - 200 000 руб.</p>
                            </div>
                            <div class="pic">
                                <img src="img/Программист.png">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="category" onclick="window.location.href='manager.php'">
                            <div class="vacancy">
                                <p class="name">Менеджер</p>
                                <p class="salary">10 000 - 185 000 руб.</p>
                            </div>
                            <div class="pic">
                                <img src="img/Менеджер.png">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </section>
    </div>  
</body>
</html>