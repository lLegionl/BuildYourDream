<?php session_start();
        include "header.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Стройте Свою Мечту</title>
    <link rel="stylesheet" href="style.css">
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
    /* Основной контент */
    main {
    padding: 4rem 0;
    }

    /* Герой */
    .hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 4rem;
    }

    .hero img {
    width: 100%;
    }

    .hero-text {
    width: 80%;
    }

    .hero-text h2 {
    font-size: 3rem;
    color: #f08000;
    margin-bottom: 1rem;
    }

    .hero-text p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    }

    .hero-text button {
    background-color: #f08000;
    color: #fff;
    padding: 1rem 2rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    }

    .hero-text button:hover {
    background-color: #e67300;
    }

    /* О нас */
    .about {
    margin-bottom: 4rem;
    }

    .about h2 {
    font-size: 2rem;
    color: #f08000;
    margin-bottom: 1rem;
    }

    .about p {
    width: 60%;
    font-size: 1.2rem;
    margin-bottom: 2rem;
    }

    .about button {
    background-color: #f08000;
    color: #fff;
    padding: 1rem 2rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    }

    .about button:hover {
    background-color: #e67300;
    }

    /* Наши услуги */
    .services {
    margin-bottom: 4rem;
    }

    .services h2 {
    font-size: 2rem;
    color: #f08000;
    margin-bottom: 1rem;
    }

    .services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    }

    .service {
    padding: 2rem;
    border: 1px solid #eee;
    border-radius: 5px;
    }

    .service h3 {
    font-size: 1.5rem;
    color: #f08000;
    margin-bottom: 1rem;
    }

    .service p {
    font-size: 1.2rem;
    }

    .service ul {
        padding: 0;
        list-style: none;
    }
    .service li {
        margin-top: 10px;
        color: #f08000;
        font-size: 16px;
    }

    /* Контакты */
    .contact {
    margin-bottom: 4rem;
    }

    .contact h2 {
    font-size: 2rem;
    color: #f08000;
    margin-bottom: 1rem;
    }

    .contact p {
    font-size: 1.2rem;
    margin-bottom: 1rem;
    }

</style>
<body>
<!DOCTYPE html>
<html lang="ru">
<body>

  <main>
    <section class="hero">
      <div class="container">
        <img src="./images/hero2.jpg" alt="Фотография дома">
        <div class="hero-text">
          <h2>Построй свою мечту</h2>
          <p>Мы строим дома вашей мечты, учитывая все ваши пожелания.</p>
          <button>Отправить заявку</button>
        </div>
      </div>
    </section>

    <section class="about">
      <div class="container">
        <h2>О нас</h2>
        <p>Мы верим, что дом должен отражать личность и стиль жизни его владельца. Поэтому мы предлагаем индивидуальный подход к каждому проекту, учитывая все ваши пожелания и предпочтения. Мы с радостью поможем вам реализовать вашу мечту о комфортном и стильном жилье.</p>
        <button>Связаться с нами</button>
      </div>
    </section>

    <section class="services">
      <div class="container">
        <h2>Наши услуги</h2>
        <div class="services-grid">
          <div class="service">
            <h3>Проектирование</h3>
            <p>Мы предлагаем комплексное проектирование жилых домов, учитывая все ваши пожелания и предпочтения. Наши архитекторы разработают индивидуальный проект, который будет отражать ваш стиль жизни и создаст уютную и функциональную атмосферу в вашем доме. Мы предоставляем следующие услуги:</p>
            <ul>
                <li>Разработка концепции проекта</li>
                <li>Создание рабочей документации</li>
                <li>3D-визуализация</li>
            </ul>            
          </div>
          <div class="service">
            <h3>Строительство</h3>
            <p>Мы осуществляем полный цикл строительства жилых домов "под ключ", от закладки фундамента до отделки помещений. Наша команда опытных строителей использует только качественные материалы и современные технологии, чтобы обеспечить долговечность и безопасность вашего дома. Мы предоставляем следующие услуги:</p>
            <ul>
                <li>Кладка стен и перегородок</li>
                <li>Монтаж кровли</li>
                <li>Проведение инженерных коммуникаций</li>
                <li>Отделка помещений</li>
            </ul>
          </div>
          <div class="service">
            <h3>Дополнительные услуги</h3>
            <p>Мы также предлагаем широкий спектр дополнительных услуг, которые помогут вам создать идеальный дом своей мечты. Наши услуги включают: </p>
            <ul>
                <li>Ландшафтный дизайн</li>
                <li>Кладка стен и перегородок</li>
                <li>Монтаж кровли</li>
                <li>Проведение инженерных коммуникаций</li>
                <li>Отделка помещений</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="contact">
      <div class="container">
        <h2>Контакты</h2>
        <p>Телефон: +7 (999) 999-99-99</p>
        <p>Адрес: г. Москва ул. Пушкино д. Никиты острецова</p>
        <p>Email: example@yandex.ru</p>
      </div>
    </section>
  </main>

</body>
</html>
<?php include "footer.php"; ?>