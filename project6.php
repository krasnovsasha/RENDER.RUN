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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        <div class="wrapperProject">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/project6/BR1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <?php echo $lang['projectInstruments'] ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/project6/BR2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/project6/BR3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
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
                <p><a href="project6.php?lang=en"><?php echo $lang['langEn'] ?></a> | <a href="project6.php?lang=ru"><?php echo $lang['langRu'] ?></a></p>
            </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>