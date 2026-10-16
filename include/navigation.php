<?php
$hour = (int) date('G');
$themeClass = ($hour >= 22 && $hour < 24) ? 'light-theme' : 'dark-theme';

if (!isset($base)) $base = '';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="<?= $base ?>content/css/style.css">
    <meta charset="utf-8">
    <title>Моё портфолио</title>
    <meta name="description"
        content="Сайт на тему Винтажный магазин одежды. Он создан для развлекательных целей и не несет вреда потребителю">
    <meta name="author" content="Береза Алёна Олеговна">
</head>
<body>
    <div class="<?php echo $themeClass; ?>">
    <div class="back">
        <div class="text-navig">
        </div>
    <nav id="navigation">
        <div class="content">
            <div id="position_nav">
                <div class="logo-navig1">
                    <a href="#"><img src="<?= $base ?>content/images/logo-navig1.png"></a>
                </div>
                <ul id="menu">
                    <li><a href="<?= $base ?>index.php" target="_parent">Главная</a></li>
                    <li><a href="<?= $base ?>pages/o_nas.php" target="_parent">О нас</a></li>
                    <li><a href="<?= $base ?>pages/catalog.php" target="_parent">Каталог</a></li>
                    <li><a href="<?= $base ?>pages/stock.php" target="_parent">Скидки</a></li>
                    <li><a href="<?= $base ?>pages/registration.php" target="_parent">Регистрация</a></li>
                    <li><a href="<?= $base ?>pages/authorization.php" target="_parent">Авторизация</a></li>
                </ul>
                <div class="icon_nav">
                    <a href="#"><img src="<?= $base ?>content/images/izbranoe.png"></a>
                    <a href="#"><img src="<?= $base ?>content/images/bag.png"></a>
                    <a href="#"><img src="<?= $base ?>content/images/akk.png"></a>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>