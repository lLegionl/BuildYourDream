<?php 
include "db.php";
session_start();

    if ($_GET['action'] && $_GET['action']=='login')
    {
        if (!empty($_POST['login']) && !empty($_POST['password']))
        {
            $login = $_POST['login'];
            $password = $_POST['password'];
        
            $quary = $data->query("SELECT * FROM users WHERE login='$login'");
            $result = $quary->fetch();

            $_SESSION['id_user']=$result['id'];
            $_SESSION['user_data']=$result;
    

            header('Location:sign.php?message=success');
        }
        else header('Location:sign.php?message=error');
    }
    else 
    {
        if (!empty($_POST['login']) && !empty($_POST['name'])  && !empty($_POST['surname'])  && !empty($_POST['phone']) && !empty($_POST['password']))
        {
            $quary = $data->prepare('INSERT INTO `users` (`login`, `name`, `surname`, `phone`, `password`) VALUES (?,?,?,?,?)');

            $user = $quary->execute([
                $_POST['login'],
                $_POST['name'],
                $_POST['surname'],
                $_POST['phone'],
                $_POST['password']
            ]);
            header('Location:sign.php?message=success');
        }
        else { header('Location:sign.php?message=error');}
    }
?>