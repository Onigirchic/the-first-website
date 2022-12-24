<?
session_start();
if($_SESSION['user']){
    header("Location: ../account.php?3");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
    <style>
        <?php require_once 'CSS/style.css'; ?>
    </style>
</head>
<body>

<?php require_once 'header.php'; ?>

    <div class="form">
        <form action="lib/reg.php" method="post">
            <?php

                /*
                $err = $_GET['err'];
                if($err == 7){
                    echo '<p class="msg"> ' . $err . ' </p>';
                }
                unset($err);
                */

                if($_SESSION['message']){
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>

            <p><h3 class="form_reg_name">Мыло</h3> <input class="input_reg" type="email" name="email" placeholder="email"></p>
            <p><h3 class="form_reg_name">Пас</h3> <input class="input_reg" type="password" name="pass" placeholder="pass"></p>
            <p><h3 class="form_reg_name">Конфирм</h3> <input class="input_reg" type="password" name="confirm" placeholder="confirm"></p>
            <div class="btn">
                <button type="submit" class="btn"><p class="btn_p">Button</p></button>
            <div>
        </form>
    </div>

    <?php require_once 'footer.php'; ?>
</body>
</html>