<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <style>
        <?php require_once 'CSS/style.css'; ?>
    </style>
</head>
<body>
  
    <?php require_once 'header.php' ?>
    
    <?
        if(!$_SESSION){
            header("Location: ../authen.php?4");
        }
    ?>
    
    <center>
        <form class="account">
            <img class="img_account" src="<?= $_SESSION['user']['avatar'] ?>" alt="Фото профиля">
            <h3 class="info_acc">Мыло: <?=$_SESSION['user']['email']?></h3>
            <h3 class="info_acc">Пароль: <?=$_SESSION["user"]["pass"]?></h3>
            <h3 class="info_acc">Роль: <?=$_SESSION['user']['pravo']?></h3>
            <div class="div_redact">
                <a class="redact" href="redact.php"><p>Редактирование профиля</p></a>
            </div>
            <div class="div_del">
                <td><a class="del" href="lib/delete.php?id=<?=$_SESSION['user']['id']?>"><p class="del">Delete</p></td> <br>
            </div>

            <?

                if($_SESSION['user']['pravo'] == 'admin'){
                print_r($_SESSION);
                }

            ?>

        </form>
    </center>

    <?php require_once 'footer.php'; ?>
</body>
</html>
