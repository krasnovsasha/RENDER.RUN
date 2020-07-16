<?php
    include "configs/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151380770-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-151380770-2');
    </script>

    <meta charset="UTF-8">
    <title>
        <?php echo $lang['title'] ?>
    </title>
    <link rel="stylesheet" href="styles/style.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
</head>
<body>
    <header>
    <div class="headerLogo"><a href="index.php"><img src="images/renderRun.png" alt="logo"></a></div>
    <div class="headerMenu">
        <ul>
            <li><a href="me.php"><?php echo $lang['aboutMe'] ?></a> </li>
            <li><a href="projects.php"><?php echo $lang['projects'] ?></a></li>
            <li><a href="contacts.php"><?php echo $lang['contacts'] ?></a></li>
        </ul>
        </div>
</header>
    <div class="container">
    <div class="aboutMeImg"><img src="images/contacts.jpg" alt="me"></div>
    <div class="aboutMeText">
        <?php echo $lang['aboutMeText'] ?>
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
        <p><a href="me.php?lang=en"><?php echo $lang['langEn'] ?></a> | <a href="me.php?lang=ru"><?php echo $lang['langRu'] ?></a></p>
    </div>
</footer>
</body>
</html>