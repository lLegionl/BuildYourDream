<?php session_start();
        include "header.php";
        include "db.php";

        $house_id = $_GET['house'];
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
        .main {
        padding: 4rem 0;
        background-color: #f5f5f5;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .property-card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 20px;
        font-family: 'Arial', sans-serif;
        border: 2px solid #f08000;
        margin-bottom: 30px;
    }

    .property-content-wrapper {
        display: flex;
        gap: 30px;
    }

    .property-image {
        flex: 0 0 50%;
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

    .property-info {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .property-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #f08000;
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
        gap: 12px;
        margin-top: 15px;
    }

    .detail-row {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
    }

    .detail-label {
        color: #666;
        font-weight: 500;
        flex: 0 0 40%;
    }

    .detail-value {
        color: #333;
        font-weight: bold;
        flex: 0 0 60%;
        text-align: right;
    }

    .action-row {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid #f08000;
    }

    .action-row input {
        background-color: #f08020;
        padding: 12px 30px;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .action-row input:hover {
        background-color: #f08000;
    }
    .address-input {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px dashed #f08000;
    }

    .address-input label {
    display: block;
    margin-bottom: 8px;
    color: #666;
    font-weight: 500;
    }

    .address-input input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    transition: border-color 0.3s;
    box-sizing: border-box;
    }

    .address-input input:focus {
    outline: none;
    border-color: #f08000;
    box-shadow: 0 0 0 2px rgba(240, 128, 0, 0.2);
    }

</style>
<body>
<!DOCTYPE html>
<html lang="ru">
<body>

<div class="main">
        <div class="container">
                    <?php 
                                $quary = $data->query("SELECT * FROM houses where id = $house_id");
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
            <div class="property_wrapper">
            <div class="property-details">
                <div class="detail-row">
                <span class="detail-label">Материалы:</span>
                <span class="detail-value"><?=$house['material']?></span>
                </div>

                <div class="detail-row">
                <span class="detail-label">Этажей:</span>
                <span class="detail-value"><?=$house['floor_count']?></span>
                </div>

                <div class="detail-row">
                <span class="detail-label">спален:</span>
                <span class="detail-value"><?=$house['bedrooms_count']?></span>
                </div>

                <div class="detail-row">
                <span class="detail-label">сан-узлов:</span>
                <span class="detail-value"><?=$house['sanitary_unit']?></span>
                </div>
                
                <?php if (!empty($house['comfort'])){ echo
                '<div class="detail-row">
                <span class="detail-label">дополнительно:</span>
                <span class="detail-value">'.$house['comfort'].'</span>
                </div>';
                }?>

                <form action="action.php?action=request&house=<?=$house['id']?>" method="post">
                <div class="address-input">
                <label for="address">Адрес:</label>
                <input type="text" name="addres" placeholder="Введите полный адрес">

                <div class="action-row">
                    <input type="submit" value="Отправить заявку"></input>
                </div>
                </form>

                </div>
            </div>
            <?}?>
            </div>
        </div>
    </div>

</body>
</html>
<?php include "footer.php"; ?>