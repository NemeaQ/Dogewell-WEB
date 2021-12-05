<?php global $debug; ?>
<!DOCTYPE html>
<html lang="ru" class="page">
<head>
    <meta charset="utt-8">
    <title><?= $title ?>Dogewell</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="rgba(53, 53, 53, 1)">
    <meta name="description"
          content="Электронный композитор и автор песен, занимается музыкальным творчеством с 2016 года. Среди жанров, в которых работает исполнитель, можно выделить драм-н-бэйс, дабстеп, хаус и фьюче-хаус.">
    <meta name="author" content="Dogewell">
    <link rel="icon" href="/src/img/icon.svg" sizes="any" type="image/svg+xml">
    <link rel="icon" type="image/png" sizes="32x32" href="/src/img/icon32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/src/img/icon16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/src/img/icon180x180.png">
    <link rel="manifest" href="/src/site.webmanifest">
    <link rel="stylesheet" href="/src/css/index.css">
    <meta name="yandex-verification" content="adfb88445828562b" />
</head>
<body class="page__body">
<header>
    <nav class="menu">
        <a class="menu__link menu__link--active" href="/">Главная</a>
        <a class="menu__link" href="/music">Музыка</a>
        <a class="menu__link" href="/video">Видео</a>
        <a class="menu__link" href="/about">Обо мне</a>
        <a class="menu__link menu__link--release" href="/release">Новый релиз</a>
    </nav>
</header>
<main class="page__wrapper">
    <?php echo $content; ?>
</main>
<script src="/src/js/script.js"></script>
</body>
</html>