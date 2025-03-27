<?php session_start();
        include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        /* Общие стили */
        body {
    font-family: 'Open Sans', sans-serif;
    margin: 0;
    background-color: #fff;
    color: #333;
    line-height: 1.6;
    }

    h1, h2, h3 {
    font-weight: 700;
    }

    .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 2rem;
    }
    main .container {
        background-color: #eee;
    }

    /* Стили для контейнера формы */
    .form .container {
        max-width: 400px; /* Максимальная ширина контейнера */
        margin: 50px auto; /* Центрирование контейнера */
        background: white; /* Цвет фона контейнера */
        padding: 30px; /* Внутренние отступы */
        border-radius: 10px; /* Скругленные углы */
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Тень для контейнера */
    }

    /* Стили для заголовка формы */
    h2 {
        text-align: center; /* Центрирование заголовка */
        margin-bottom: 20px; /* Отступ снизу */
        color: #333; /* Цвет заголовка */
    }

    /* Стили для элементов списка */
    .form ul {
        list-style-type: none; /* Убираем маркеры списка */
        padding: 0; /* Убираем внутренние отступы */
    }

    /* Стили для элементов списка (input) */
    .form li {
        margin-bottom: 15px; /* Отступ между элементами списка */
        display: flex;
        align-items: center;
    }

    /* Стили для полей ввода */
    input[type="text"] {
        width: 100%; /* Ширина поля ввода */
        padding: 12px; /* Внутренние отступы */
        border: 1px solid #ccc; /* Цвет рамки */
        border-radius: 5px; /* Скругленные углы */
        font-size: 16px; /* Размер шрифта */
        box-sizing: border-box;
    }

    /* Стили для кнопки отправки */
    input[type="submit"] {
        min-width: 30%; /* Ширина кнопки */
        padding: 12px; /* Внутренние отступы */
        background-color: #f08000; /* Цвет кнопки */
        color: white; /* Цвет текста на кнопке */
        border: none; /* Убираем рамку */
        border-radius: 5px; /* Скругленные углы */
        cursor: pointer; /* Указатель при наведении */
        font-size: 16px; /* Размер шрифта */
        box-sizing: border-box;
    }

    /* Эффект при наведении на кнопку */
    input[type="submit"]:hover {
        background-color: #e67300; /* Цвет кнопки при наведении */
    }

    /* Стили для текста */
    p {
        text-align: center; /* Центрирование текста */
        margin-top: 15px; /* Отступ сверху */
        color: #555; /* Цвет текста */
    }
    .confirm {
        gap: 10px;
    }
    .confirm a {
        color: #333;
        text-decoration: none;
        background-color:   #ccc;
        border-radius: 90px;
        padding:  5px 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Тень для контейнера */
    }
    .confirm a:hover {
        background-color: #eee;
    }
</style>
<body>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (!empty($_GET['action']) && $_GET['action']=='login')
    {echo
    '<div class="form">
        <div class="container">
            <form action="auth.php?action=login" method="post">
            <ul>
                <li><input type="text" placeholder="Логин" name="login"></li>
                <li><input type="text" placeholder="Пароль" name="password"></li>
                <li class="confirm"><input type="submit">нет аккаунта?<a href="sign.php?action=reg">зарегистрироваться</a></li>
            </ul>
            </form>
        </div>
    </div>';} 
    else {   echo

    '<div class="form">
        <div class="container">
            <form action="auth.php?action=reg" method="post">
            <ul>
                <li><input type="text" placeholder="Логин" name="login"></li>
                <li><input type="text" placeholder="Имя" name="name"></li>
                <li><input type="text" placeholder="Фамилия" name="surname"></li>
                <li><input type="text" placeholder="Номер телефона" name="phone"></li>
                <li><input type="text" placeholder="Пароль" name="password"></li>
                <li class="confirm"><input type="submit">есть аккаунт?<a href="sign.php?action=login">войти</a></li>
            </ul>
            </form>
        </div>
    </div>';}?>

</body>
</html>
</body>
</html>
<?php include "footer.php";?>