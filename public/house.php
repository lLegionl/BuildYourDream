<?php session_start();
        include "db.php";
        include "header.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Стройте Свою Мечту</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

    /* Ассортимент */
    .houses_wrapper {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;

        gap: 10px;
    }
        .property-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 300px;
    font-family: 'Arial', sans-serif;
    border: 2px solid #f08000;
    margin-top: 10px;
    }

    .property-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid #f08000;
    }

    .property-image {
    width: 100%;
    height: 200px;
    margin-bottom: 15px;
    overflow: hidden;
    border-radius: 4px;
    background-color: #f5f5f5;
    display: flex;
    align-items: center;
    justify-content: center;
    }

    .property-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    }

    .property-image:hover img {
    transform: scale(1.05);
    }

    .property-title {
    font-size: 24px;
    font-weight: bold;
    color: #f08000;
    }

    .property-size {
    font-size: 18px;
    color: #333;
    background-color: #f08020;
    padding: 4px 8px;
    border-radius: 4px;
    color: white;
    }

    .property-details {
    display: flex;
    flex-direction: column;
    gap: 8px;
    }

    .detail-row {
    display: flex;
    justify-content: space-between;
    }

    .detail-label {
    color: #666;
    font-weight: 500;
    }

    .detail-value {
    color: #333;
    font-weight: bold;
    }
    .action-row {
        display: flex;
        justify-content: center;
    }
    .action-row a {
        background-color: #f08020;
        padding: 7px 20px;
        border-radius: 5px;

        text-decoration: none;
        color: #fff;
    }
    .action-row a:hover {
        background-color: #f08000b0;
    }
    .icons {
        font-size: 0.9rem;
    }

</style>
<body>
<!DOCTYPE html>
<html lang="ru">
<body>
    <div class="main">
        <div class="container">
            <div class="houses_wrapper">
                    <?php 
                                $quary = $data->query("SELECT * FROM houses");
                                $houses = $quary->fetchAll();                                     
                    ?>
                    <?foreach ($houses as $house) {?>
                    <div class="property-card">
            <div class="property-header">
                <span class="property-title"><?=$house['name']?></span>
                <span class="property-size"><?=$house['square']?></span>
            </div>
            
            <div class="property-image">
                <img src=".\images\house\<?=$house['images']?>" alt="Изображение объекта">
            </div>
            
            <div class="property-details">
                <div class="detail-row">
                <span class="detail-label"><label for="detaio-label"><i class="fas fa-cubes icons"></i></label>
                Материалы:</span>
                <span class="detail-value"><?=$house['material']?></span>
                </div>

                <div class="detail-row">
                <span class="detail-label"><label for="detaio-label"><i class="fas fa-layer-group icons"></i></label>
                Этажей:</span>
                <span class="detail-value"><?=$house['floor_count']?></span>
                </div>

                <div class="detail-row">
                <span class="detail-label"><label for="detaio-label"><i class="fas fa-bed icons"></i></label>
                спален:</span>
                <span class="detail-value"><?=$house['bedrooms_count']?></span>
                </div>

                <div class="detail-row">
                <span class="detail-label"><label for="detaio-label"><i class="fas fa-bath icons"></i></label>
                сан-узлов:</span>
                <span class="detail-value"><?=$house['sanitary_unit']?></span>
                </div>
                
                <?php if (!empty($house['comfort'])){ echo
                '<div class="detail-row">
                <span class="detail-label"><label for="detaio-label"><i class="fas fa-plus-circle icons"></i></label>
                дополнительно:</span>
                <span class="detail-value">'.$house['comfort'].'</span>
                </div>';
                }?>
                <div class="action-row">
                    <a href="confirm.php?house=<?=$house['id']?>"><i class="fas fa-arrow-right"></i> Выбрать</a>
                </div>
     
            </div>
            </div>
            <?}?>
            </div>
        </div>
    </div>
</body>
</html>
<?php include "footer.php"; ?>