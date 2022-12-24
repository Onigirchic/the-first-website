<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Redact</title>
</head>
<body>
    <?php

        require "lib/db.php";
        error_reporting(E_ERROR); //убирает видимость ошибок на стр

        //$id = $_GET["id"];
        //$queriOneInfo = "select * from `info` where `info`.`id` = '$id'";
        //$oneInfo = mysqli_query($db, $queriOneInfo);
        //$oneInfo = mysqli_fetch_assoc($oneInfo);
        //if(!$oneInfo){
        //    die("error oneInfo");
        //}
    ?>


    <form action="lib/update.php" method="post" enctype="multipart/form-data">
        <p><input class="input_add" type="hidden" name="id" value="<?= $_SESSION['user']['id']?>"  required=""></p>
        <p><h3>Email </h3> <input class="input_add" type="email" name="email" placeholder="Введите новую почту" required="" value="<?= $_SESSION['user']['email']?>"></p>
        <p><h3>Pass </h3> <input class="input_add" type="text" name="pass" placeholder="Введите новый пароль" value="<?= $_SESSION['user']['pass']?>" required=""></p>
        <?
            if($_SESSION['user']['pravo'] == 'user') {

            } else {
        ?>
            <p><h3>Роль </h3><input class="input_add" type="text" name="pravo" placeholder="Введите новую роль" value="<?= $_SESSION['user']['pravo']?>" required=""></p>
        <?
            }
        ?>
        <p><h3>Image </h3> <input class="input_add" type="file" name="avatar"></p>
        <button type="submit" class="btn"><p class="btn_p">Button</p></button>
        <?php
            if($_SESSION['message']){
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>
