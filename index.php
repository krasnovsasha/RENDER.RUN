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
        <title>3D визуализация жилых помещений</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    </head>
    <body>
        <header>
            <div class="headerLogo"><a href="index.php"><img src="images/renderRun.png" alt="logo"></a></div>
            <div class="headerMenu">
                <ul>
                    <li><a href="me.html">о себе</a> </li>
                    <li><a href="projects.html">проекты</a></li>
                    <li><a href="contacts.php">контакты</a></li>
                </ul>
            </div>
        </header>
        <div class="container">
            <div class="containerIndexImg">
                <img class="animation" src="images/mainRender1.jpg">
                <img class="animation" src="images/mainRender2.jpg">
                <img class="animation" src="images/mainRender3.jpg">
            </div>
        </div>
        <footer>
            <div class="footerSocialIcons">
                <a href="https://www.instagram.com/krasnova_viz/" target="_blank">
                    <img src="images/instagram-64x64.jpg" alt="Instagram" title="Instagram">
                </a>
            </div>
            <div class="footerInformation">
                RENDER.RUN - 3D визуализация интерьеров<br>
                krasnova@render.run   <a href="tel:+79998736079">+7(999)873-60-79</a>
                <p>English | Russian</p>
            </div>
        </footer>
    </body>
</html>