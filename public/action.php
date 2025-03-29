<?php 
    include "db.php";
    session_start();
    $user_id = $_SESSION['id_user'];
if ($_GET['action']=='request' && !empty($_POST['addres']))
{
    date_default_timezone_set('Europe/Moscow');
    $date_current = date('Y-m-d');

    $quary = $data->prepare('INSERT INTO `request` (`houses_id`, `user_id`, `addres`, `date`) VALUES (?,?,?,?)');

    $request = $quary->execute([
        $_GET['house'],
        $_SESSION['id_user'],
        $_POST['addres'],
        $date_current
    ]);
    header('Location:account.php?tab=request');
} else if ($_GET['action']=='request_del' && !empty($_GET['request']))
{
    $id = $_GET['request'];

    $quary = $data->query("DELETE FROM `request` WHERE id=$id");
    $result = $quary->fetch();

    header('Location:account.php?tab=request&message=request_del');
} else if ($_GET['action']=='red' && (!empty($_POST['login']) && !empty($_POST['name'])  && !empty($_POST['surname'])  && !empty($_POST['email'])  && !empty($_POST['phone']) && !empty($_POST['password'])))
{
    $quary = $data->prepare("UPDATE `users` SET
    `login`=?,
    `name`=?,
    `surname`=?,
    `email`=?,
    `phone`=?,
    `password`=? 
    WHERE id=$user_id");

    $user = $quary->execute([
        $_POST['login'],
        $_POST['name'],
        $_POST['surname'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['password']
    ]);
    header('Location:account.php?tab=profile&message=edit_ok');

}

?>