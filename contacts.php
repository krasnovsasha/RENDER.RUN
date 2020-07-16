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
            </a></div>
    </header>
    <div class="container">
        <div class="wrapperMedContacts">
                <img src="images/contacts.jpg" alt="контакты">
                <div class="contactTextForm">
                    КОНТАКТЫ (по вопросам дизайн-проекта)<br> <a href="tel:+79998736079">+7(999)873-60-79</a> <br>krasnova@render.run<br><br>
                    ПО ВОПРОСАМ СОТРУДНИЧЕСТВА <br><a href="tel:+79998736079">+7(999)873-60-79</a> <br>krasnova@render.run<br><br><br>
                    <?php
                        if(!isset($_POST['userName'])
                        and !isset($_POST['userNumber'])
                        and !isset($_POST['userMessage'])){
                    ?>
                    <form action="contacts.php" method="post">
                        <label for="username">ИМЯ *</label><br>
                        <input id="username" type="text" name="userName" required><br>
                        <br>
                        <label for="email"> EMAIL *</label><br>
                        <input id="email" type="text" name="userEmail"><br>
                        <br>
                        <label for="phoneNumber">ТЕЛЕФОН *</label><br>
                        <input id="phoneNumber" type="number" name="userNumber" required><br>
                        <br>
                        <label for="question"> ВАШ ВОПРОС *</label><br>
                        <input id="question" type="text" name="userMessage"><br>
                        <hr>
                        <input type="submit" value="Отправить">
                    </form>
                    <?php
                        } else {
                        $userName = $_POST['userName'];
                        $userEmail = $_POST['userEmail'];
                        $userNumber = $_POST['userNumber'];
                        $userMessage = $_POST['userMessage'];

                        $userName = htmlspecialchars($userName);
                        $userEmail = htmlspecialchars($userEmail);
                        $userNumber = htmlspecialchars($userNumber);
                        $userMessage = htmlspecialchars($userMessage);

                        $userName = urldecode($userName);
                        $userEmail = urldecode($userEmail);
                        $userNumber = urldecode($userNumber);
                        $userMessage = urldecode($userMessage);

                        $userName = trim($userName);
                        $userEmail = trim($userEmail);
                        $userNumber = trim($userNumber);
                        $userMessage = trim($userMessage);

                        $message = 'Спасибо. Ваше сообщение успешно отправлено.';
                        //$message = iconv("UTF-8", "windows-1251", $message);

                        if (mail("krasnova@render.run", "Новая заявка с сайта RENDER.RUN",
                            "Имя: " . $userName . "\r\nEmail: " . $userEmail . "\r\nТелефон: " .
                            $userNumber . "\r\nСообщение: " . $userMessage)){
                                echo $message;
                            }   else {
                            echo "При отправке сообщения возникли ошибки";
                            }
                        }
                    ?>
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
                <p><a href="contacts.php?lang=en"><?php echo $lang['langEn'] ?></a> | <a href="contacts.php?lang=ru"><?php echo $lang['langRu'] ?></a></p>
            </div>
    </footer>
</body>
</html>