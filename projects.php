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
                </ul>
            </div>
    </header>
    <div class="container">
        <div class="wrapperProjects">
            <a href="project1.php">
                <img src="images/project1/i3.jpg">
            </a>
            <a href="project2.php">
                <img src="images/project2/BR_2.jpg">
            </a>
            <a href="project3.php">
                <img src="images/project3/BL%20(2).jpg">
            </a>
            <a href="project4.php">
                <img src="images/project4/kit3.jpg">
            </a>
            <a href="project5.php">
                <img src="images/project5/ST%20(2).jpg">
            </a>
            <a href="project6.php">
                <img src="images/project6/BR11.jpg">
            </a>
            <a href="project7.php">
                <img src="images/project7/mag%20(91).jpg">
            </a>
            <a href="project8.php">
                <img src="images/project8/LOFT%20(11).jpg">
            </a>
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
                <p><a href="projects.php?lang=en"><?php echo $lang['langEn'] ?></a> | <a href="projects.php?lang=ru"><?php echo $lang['langRu'] ?></a></p>
            </div>
    </footer>
</body>
</html>