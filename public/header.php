<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
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
    /* Шапка сайта */
    header {
    background-color: #fff;
    padding: 25px 0;
    border-bottom: 5px solid #eee;
    }

    header h1 {
    margin: 0;
    font-size: 2.5rem;
    color: #f08000;
    }

    header nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-end;
    }

    header nav li {
    margin-left: 2rem;
    }

    header nav a {
    font-size: 20px;
    text-decoration: none;
    color: #333;
    }
    .sign {
        background-color: #f08000;
        border-radius: 90px;
        color: #fff;
        padding:  5px 10px;
    }
    .sign:hover {
        background-color: #e67300;
    }

</style>
<body>
    
<header>
    <div class="container">
      <h1>Построй свою мечту</h1>
      <nav>
        <ul>
          <li><a href="index.php">Главная</a></li>
          <li><a href="house.php">Ассортимент</a></li>
          <li><a href="index.php#contact">Контакты</a></li>
          <?php 
          if (!empty($_SESSION['id_user'])) 
          {echo '<li><a href="account.php?tab=profile" class="sign">Личный кабинет</a></li>';} else
          { echo '<li><a href="sign.php?action=login" class="sign">Войти</a></li>';}
          ?>
        </ul>
      </nav>
    </div>
  </header>

</body>
</html>