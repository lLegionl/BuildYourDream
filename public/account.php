<?php 
session_start();
include "db.php";
include "header.php";
$user_id = $_SESSION['id_user'];

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <style>
        :root {
            --primary-color: #f08000;
            --secondary-color: #fff;
            --text-color: #333;
            --light-gray: #f5f5f5;
            --border-color: #ddd;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--light-gray);
            color: var(--text-color);
        }

        .personal-cabinet {
            max-width: 800px;
            margin: 30px auto;
            background-color: var(--secondary-color);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .cabinet-header {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            padding: 20px;
            text-align: center;
        }

        .cabinet-header h1 {
            margin: 0;
            font-size: 24px;
        }

        .tabs {
            display: flex;
            border-bottom: 1px solid var(--border-color);
        }

        .tab {
            padding: 15px 20px;
            cursor: pointer;
            font-weight: bold;
            flex: 1;
            text-align: center;
            transition: all 0.3s;

            text-decoration: none;
            color: black;
        }

        .tab:hover {
            background-color: rgba(240, 128, 0, 0.1);
        }
        .tab-content {
            padding: 25px;
        }
        .account-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-actions {
            grid-column: span 2;
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
        }

        .btn-edit {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            border: none;
        }

        .btn-edit:hover {
            background-color: #e07600;
        }

        .btn-logout {
            background-color: var(--secondary-color);
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }

        .btn-logout:hover {
            background-color: rgba(240, 128, 0, 0.1);
        }

        .application {
            background-color: var(--light-gray);
            border-radius: 5px;
            padding: 15px;
            margin: 10px;
            margin-bottom: 15px;
            border-left: 4px solid var(--primary-color);
        }

        .application-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .application-title {
            font-weight: bold;
            font-size: 18px;
            color: var(--primary-color);
        }

        .application-status {
            padding: 3px 10px;
            border-radius: 15px;
            font-size: 14px;
            font-weight: bold;
        }

        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }

        .status-approved {
            background-color: #d4edda;
            color: #155724;
        }

        .application-details {
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .application-actions {
            text-align: right;
        }

        .btn-cancel {
            background-color: #f44336;
            color: white;
        }

        .btn-cancel:hover {
            background-color: #f44336a8;
        }
    </style>
</head>
<body>
    <div class="personal-cabinet">
        <div class="cabinet-header">
            <h1>Личный кабинет</h1>
        </div>

        <div class="tabs">
            <a class="tab" href="account.php?tab=profile" >Аккаунт</a>
            <a class="tab" href="account.php?tab=request">Заявки</a>
        </div>
        <?php if (!empty($_GET['tab']) && $_GET['tab'] == 'profile') {
            
        echo
        '<div class="tab-content">
                <form class="account-form" action="action.php?action=red" method="post">
                    <div class="form-group">
                        <label for="login">Логин</label>
                        <input type="text" name="login" value="'.$_SESSION['user_data']['login'].'">
                    </div>
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" name="name" value="'.$_SESSION['user_data']['name'].'">
                    </div>
                    <div class="form-group">
                        <label for="surname">Фамилия</label>
                        <input type="text" name="surname" value="'.$_SESSION['user_data']['surname'].'">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="'.$_SESSION['user_data']['email'].'">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="tel" name="phone" value="'.$_SESSION['user_data']['phone'].'">
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="text" name="password" value="'.$_SESSION['user_data']['password'].'">
                    </div>
                    <div class="form-actions">
                        <a href="logout.php" class="btn btn-logout">Выйти</a>
                        <input type="submit" class="btn btn-edit" value="Редактировать"></input>
                    </div>
                </form>
            </div>'
        ;}else  {

        $quary = $data->query("
        SELECT 
            r.request_status,
            r.date,
            r.addres,
            r.id,
            h.id AS houses_id,
            h.name,
            h.square,
            h.material,
            h.bedrooms_count
        FROM 
            request r
        JOIN 
            houses h ON r.houses_id = h.id
        WHERE 
            r.user_id = $user_id"
        );

        $requests = $quary->fetchAll();

            foreach ($requests as $request)
            {
            echo
            '<div class="application">
                <div class="application-header">
                    <div class="application-title">'.$request['name'].'</div>
                    <div class="application-status status-pending">'.$request['request_status'].'</div>
                </div>
                <div class="application-details">
                    <div><strong>Площадь:</strong>'.$request['square'].'</div>
                    <div><strong>Площадь:</strong>'.$request['material'].'</div>
                    <div><strong>Адрес:</strong>'.$request['addres'].'</div>
                    <div><strong>Дата заявки:</strong>'.$request['date'].'</div>
                </div>
                <div class="application-actions">
                    <a href="action.php?action=request_del&request='.$request['id'].'" class="btn btn-cancel">Отменить заявку</a>
                </div>
            </div>';
        }
    }
            ?>
    </div>
</body>
</html>
<?php include "footer.php";?>