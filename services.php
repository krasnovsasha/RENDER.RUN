<?php
    include "configs/config.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151380770-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-151380770-2');
        </script>

        <meta charset="UTF-8">
        <title>
            <?php echo $lang['title'] ?>
        </title>
        <link rel="stylesheet" href="styles/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
</head>
<body>
    <header>
        <div class="headerLogo"><a href="index.php"><img src="images/renderRun.png" alt="logo"></a></div>
            <div class="headerMenu">
                <ul>
                    <li><a href="me.php"><?php echo $lang['aboutMe'] ?></a> </li>
                    <li><a href="projects.php"><?php echo $lang['projects'] ?></a></li>
                    <li><a href="contacts.php"><?php echo $lang['contacts'] ?></a></li>
                    <li><a href="services.php">услуги</a></li>
                </ul>
            </div>
    </header>
    <div class="container">
        <div class="wrapperMedServices">
            <img src="images/services.jpg" alt="услуги">
            <div class="services">
                    <div class="service">
                        <u>ДИЗАЙН-ПРОЕКТ</u><br><br>
                        комплекс мероприятий, направленных на создание уникального
                        объемно-пространственного решения интерьеров<br><br>
                        СТОИМОСТЬ:<br>
                        <ul>
                            <li>Площадь до 50 м2 -  250 000 рублей</li>
                            <li>51-150 м2 - 4 500 руб/м2</li>
                            <li>101-200 м2 -  4 000 руб/м2</li>
                            <li>201-300 м2 -  3 500 руб/м2</li>
                            <li>более 301 м2 -  2 500 руб/м2</li>
                        </ul>
                        СОСТАВ:<br>
                        <ul>
                            <li>планировочное решение</li>
                            <li>эскизный проект</li>
                            <li>рабочая документация</li>
                            <li>ведомости и спецификации</li>
                        </ul>
                    </div>
                    <div class="service">
                        <u>АВТОРСКОЕ СОПРОВОЖДЕНИЕ</u><br><br>
                        включает авторский надзор и комплектацию<br><br>
                        СТОИМОСТЬ:<br>
                        <ul>
                            <li>Площадь до 100м2 - 60 000 руб/мес</li>
                            <li>от 101м2 - 500 руб/м2/мес</li>
                        </ul><br>
                        СОСТАВ:<br>
                        <ul>
                            <li>авторский надзор за строительно-отделочными работами ,
                                включающий еженедельные выезды на объект
                            </li>
                            <li>выезд по салонам или магазинам для подбора мебели,
                                отделочных материалов, осветительного оборудования,
                                сантехники, аксессуаров, текстиля и т.д.
                            </li>
                            <li>составление коммерческих предложений с указанием фирм-поставщиков</li>
                            <li>контроль своевременного заказа и поставки отделочных материалов
                                и предметов мебели, согласно утверждённому графику работ.
                            </li>
                            <li>проверка и утверждение коммерческих предложений от поставщиков в части
                                соответствия размеров, комплектности и количества изделий.
                            </li>
                            <li>работа с рекламациями</li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footerSocialIcons">
                <a href="https://www.instagram.com/krasnova_viz/" target="_blank">
                    <img src="images/instagram-64x64.jpg" alt="Instagram" title="Instagram">
                </a>
            </div>
            <div class="footerInformation">
                <?php echo $lang['title'] ?><br>
                krasnova@render.run   <a href="tel:+79998736079">+7(999)873-60-79</a>
                <p><a href="services.php?lang=en"><?php echo $lang['langEn'] ?></a> | <a href="services.php?lang=ru"><?php echo $lang['langRu'] ?></a></p>
            </div>
    </footer>
</body>
</html>