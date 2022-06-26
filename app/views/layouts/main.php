<?php global $debug; ?>
<!DOCTYPE html>
<html lang="ru" class="page">
<head>
    <meta charset="utf-8">
    <title>Dogewell: <?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="rgba(53, 53, 53, 1)">
    <meta name="description"
          content="Официальный сайт электронного композитора и автора песен, занимающегося музыкальным творчеством с 2016 года.">
    <meta name="author" content="Dogewell">
    <link rel="icon" href="/src/img/icon.svg" sizes="any" type="image/svg+xml">
    <link rel="icon" type="image/png" sizes="32x32" href="/src/img/icon32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/src/img/icon16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/src/img/icon180x180.png">
    <link rel="manifest" href="/src/site.webmanifest">
    <link rel="stylesheet" href="/src/css/index.css">
    <meta name="yandex-verification" content="adfb88445828562b" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F6N9029LKX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-F6N9029LKX');
    </script>

</head>
<body class="page__body l-wrap">
<div class="brand">
    <img class="bland__title" src="/src/img/BRAND.svg" alt="Брэнд-лого">
    <h1 aria-hidden="true">Dogewell - Официальный сайт исполнителя</h1>
<!--    <img class="bland__logo" src="/src/img/LOGO.svg">-->
</div>
<header>
    <nav class="menu">
        <a class="menu__link" href="/music">Музыка</a>
        <a class="menu__link" href="/about">Обо мне</a>
        <a class="menu__link" href="/video">Видео</a>
        <a class="menu__link" href="/release">Новый релиз</a>
    </nav>
</header>
<!--<main class="page__wrapper">-->
<!--    --><?php //echo $content; ?>
<!--</main>-->
<script src="/src/js/script.js"></script>
</body>
</html>