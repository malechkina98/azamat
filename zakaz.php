<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
	<title>Азамат</title>
    <meta name="description" content="Адаптивный шаблон Достык">
    <meta name="keywords" content="гостиница, мытищи">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Подключение стилей CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/linearicons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Предзагрузчик -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Begin -->
    <header class="header-section other-page">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="top-widget">
                    <div class="top-info address">
                        <img src="img/placeholder.png" alt="">
                        <span>123456 Уалиханов<br />Нур-султан,Казакстан</span>
                    </div>
                    <div class="top-info phone-num">
                        <img src="img/phone.png" alt="">
                        <span>+7 771-285-07-08</span>
                    </div>
                </div>
                <div class="container">
                    <nav class="main-menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Главная</a></li>
                            <li><a href="./about-us.html">Гостиница</a></li>
                            <li><a href="./rooms.html">Номера</a></li>
                            <li><a href="./services.html">Сервис</a>
                                <ul class="drop-menu">
                                    <li><a href="./services.html">Эконом класс</a></li>
                                    <li><a href="./services.html">Двухкомнатные</a></li>
                                    <li><a href="./services.html">Апартаменты</a></li>
                                </ul>
                            </li>
                            <li><a href="./news.html">Новости</a></li>
                            <li><a href="./contact.php">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/contact-bg.jpg">
        <div class="hero-text">
            <div class="container">
               
                
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-left">
                        <div class="contact-information">
                            <h2>Информация для контактов</h2>
                            <ul>
                                <li><img src="img/placeholder-copy.png" alt=""> <span>Инд: 123456 Уалиханов,Нур-султан,Казакстан</span></li>
                                <li><img src="img/phone-copy.png" alt=""> <span>+7 747-769-46-50</span></li>
                                <li><img src="img/envelop.png" alt=""> <span>hello@youremail.ru</span></li>
                                <li><img src="img/clock-copy.png" alt=""> <span>Ежедневно: 06:00 - 22:00</span></li>
                            </ul>
                        </div>
                        <div class="social-links">
                            <h2>Мы в соцсетях:</h2>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h5>Заказ номера. Оставьте данные мы с Вами свяжемся...</h5>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>От</p>
                                    <div class="input-group">
                                        <input type="text" placeholder="Ваше имя" name="name">
                                        <img src="img/edit.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="email" placeholder="E-mail" name="mail">
                                        <img src="img/envelop-copy.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group phone-num">
                                        <input type="text" placeholder="Телефон" name="tele">
                                        <img src="img/phone-copy.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="message">
                                        <p>Опишите номер, количество человек.</p>
                                        <div class="textarea">
                                            <textarea placeholder="Описание номера ..." name="sms"></textarea>
                                            <img src="img/speech-copy.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit">Отправить <i class="lnr lnr-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
<?php
    // определяем начальные данные
    $db_host = 'bd';
    $db_name = 'bd';
    $db_username = 'mysql';
    $db_password = 'mysql';
    $db_table_to_show = 'zakaz';
$fam = $_POST['name'];
  $mai = $_POST['mail'];
  $im  = $_POST['tele'];
  $sm  = $_POST['sms'];
    // соединяемся с сервером базы данных
    $connect_to_db = mysql_connect($db_host, $db_username, $db_password);

    // подключаемся к базе данных
    mysql_select_db($db_name, $connect_to_db);
$qr_result = mysql_query("INSERT INTO `zakaz` VALUES ('$fam','$mai','$im','$sm')" );

        // закрываем соединение с сервером  базы данных
        mysql_close($connect_to_db);
?>
    <!-- Map Section Begin -->
    <div class="map">
<iframe src="https://yandex.kz/map-widget/v1/-/CGXOUPIw" width="560" height="560" frameborder="1" allowfullscreen="true"></iframe>
    </div>
    <!-- Map Section End -->

    <!-- Footer Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo">
                        <a href="#"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Адрес</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-map-marker"></i>
                            <p>Инд: 987654 Победы, <br />Нур-султан, Казакстан</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Администратор</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+7 771-285-07-08</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Ресепшен</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+7 771-285-07-08</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Ресторан</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+7 771-285-07-08</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                <div class="privacy-links">
                    <a href="services.html">Сервис</a>
                    <a href="contact.php">Контакты</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

	<script src="js/knopka.js"></script>
	<div class="go-up" title="Вверх" id='ToTop'>&#8657;</div>
    <div class="go-down" title="Вниз" id='OnBottom'>&#8659;</div>
	
</body>
</html>