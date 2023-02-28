<?php
/* @var $pageHeader string */
/* @var $user ?User */
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>

<body>
    <h1><?= $pageHeader ?></h1>

    <?php if (isset($user)) : ?>
        <div>
            <p>Рады снова видеть Вас, <?= $user->getName() ?></p>
            <a href="?controller=task">Задачи</a>
            <hr>
            <a href="?controller=security&action=logout">Выйти</a>
        </div>
    <?php else : ?>
        <div><a href="?controller=security&action=signin">Войти</a></div>
    <?php endif; ?>
    <style>
        h1 {
            text-align: center
        }

        div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center
        }

        a {
            outline: none;
            text-decoration: none;
            display: inline-block;
            width: 19.5%;
            margin-right: 0.625%;
            text-align: center;
            line-height: 3;
            color: black;
        }

        a:link,
        a:visited,
        a:focus {
            background: darkgrey;
        }

        a:hover {
            background: gray;
        }

        a:active {
            background: red;
            color: white;
        }
    </style>
</body>

</html>