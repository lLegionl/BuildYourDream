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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

    .hero .img {
    overflow: hidden;
    box-sizing: border-box;
    width: 100%;
    }
    .hero img {
    width: 100%;
    object-fit: cover;
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

    .hero-text a {
    background-color: #f08000;
    color: #fff;
    padding: 1rem 2rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
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

    .about a {
    background-color: #f08000;
    color: #fff;
    padding: 1rem 2rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
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
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.3s;
    }

    .service:hover {
    transform: translateY(-5px);
    }

    .service h3 {
    font-size: 1.5rem;
    color: #f08000;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    }

    .service p {
    font-size: 1.2rem;
    }

    .service ul {
        padding: 0;
        list-style: none;
        color: #f08000;
    }
    .service li {
        margin-top: 10px;
        font-size: 16px;
        margin-top: 15px;
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
    }
    .service li span {
      color: black;
    }
    .service li i {
        margin-top: 3px;
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
    display: flex;
    align-items: center;
    gap: 0.8rem;
    }
    .hero-text a:hover {
        background-color: #f08000b0;
    }
    .about a:hover {
        background-color: #f08000b0;
    }

    /* Иконки для услуг */
    .service-icon {
        color: #f08000;
        font-size: 1.2rem;
    }

</style>
<body>
<!DOCTYPE html>
<html lang="ru">
<body>

  <main>
    <section class="hero">
      <div class="container">
        <div class="img"><img src="./images/hero2.jpg" alt="Фотография дома"></div>
        <div class="hero-text">
          <h2><i class="fas fa-home"></i> Построй свою мечту</h2>
          <p>Мы строим дома вашей мечты, учитывая все ваши пожелания.</p>
          <a href="house.php"><i class="fas fa-arrow-right"></i> Выбрать</a>
        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="container">
        <h2><i class="fas fa-info-circle"></i> О нас</h2>
        <p>Мы верим, что дом должен отражать личность и стиль жизни его владельца. Поэтому мы предлагаем индивидуальный подход к каждому проекту, учитывая все ваши пожелания и предпочтения. Мы с радостью поможем вам реализовать вашу мечту о комфортном и стильном жилье.</p>
        <a href="index.php#contact"><i class="fas fa-envelope"></i> Связаться с нами</a>
      </div>
    </section>

    <section class="services">
      <div class="container">
        <h2><i class="fas fa-hammer"></i> Наши услуги</h2>
        <div class="services-grid">
          <div class="service">
            <h3><i class="fas fa-drafting-compass"></i> Проектирование</h3>
            <p>Мы предлагаем комплексное проектирование жилых домов, учитывая все ваши пожелания и предпочтения. Наши архитекторы разработают индивидуальный проект, который будет отражать ваш стиль жизни и создаст уютную и функциональную атмосферу в вашем доме. Мы предоставляем следующие услуги:</p>
            <ul>
                <li><i class="fas fa-lightbulb service-icon"></i><span>Разработка концепции проекта</span></li>
                <li><i class="fas fa-file-alt service-icon"></i><span>Создание рабочей документации</span></li>
                <li><i class="fas fa-cube service-icon"></i><span>3D-визуализация</span></li>
            </ul>            
          </div>
          <div class="service">
            <h3><i class="fas fa-tools"></i> Строительство</h3>
            <p>Мы осуществляем полный цикл строительства жилых домов "под ключ", от закладки фундамента до отделки помещений. Наша команда опытных строителей использует только качественные материалы и современные технологии, чтобы обеспечить долговечность и безопасность вашего дома. Мы предоставляем следующие услуги:</p>
            <ul>
                <li><i class="fas fa-border-style service-icon"></i><span>Кладка стен и перегородок</span></li>
                <li><i class="fas fa-house-damage service-icon"></i><span>Монтаж кровли</span></li>
                <li><i class="fas fa-plug service-icon"></i><span>Проведение инженерных коммуникаций</span></li>
                <li><i class="fas fa-paint-roller service-icon"></i><span>Отделка помещений</span></li>
            </ul>
          </div>
          <div class="service">
            <h3><i class="fas fa-plus-circle"></i> Дополнительные услуги</h3>
            <p>Мы также предлагаем широкий спектр дополнительных услуг, которые помогут вам создать идеальный дом своей мечты. Наши услуги включают: </p>
            <ul>
                <li><i class="fas fa-tree service-icon"></i><span>Ландшафтный дизайн</span></li>
                <li><i class="fas fa-bath service-icon"></i><span>Установка сантехники</span></li>
                <li><i class="fas fa-bolt service-icon"></i><span>Электромонтажные работы</span></li>
                <li><i class="fas fa-thermometer-half service-icon"></i><span>Установка систем отопления</span></li>
                <li><i class="fas fa-lock service-icon"></i><span>Монтаж систем безопасности</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="contact">
      <div class="container" id="contact">
        <h2><i class="fas fa-address-book"></i> Контакты</h2>
        <p><i class="fas fa-phone"></i> Телефон: +7 (999) 999-99-99</p>
        <p><i class="fas fa-map-marker-alt"></i> Адрес: г. Москва ул. Пушкино д. Никиты острецова</p>
        <p><i class="fas fa-envelope"></i> Email: example@yandex.ru</p>
      </div>
    </section>
  </main>

</body>
</html>
<?php include "footer.php"; ?>