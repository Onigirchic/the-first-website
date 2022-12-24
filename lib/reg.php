<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg</title>
</head>
<body>
    <?

        require_once "db.php";

        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirm = $_POST['confirm'];

        $queryAllUsers="select * from `users` where `users`.`email`='$email'";
        $allUsers = mysqli_query($db, $queryAllUsers);
        $allUsers = mysqli_fetch_assoc($allUsers);

        if(!$allUsers && $pass == $confirm){        

            /*
            $path = 'image/' . microtime() . $_FILES['avatar']['name'];
            if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
                $_SESSION['message'] = 'Ошибка при загрузке фото!';
                header('Location: ../registr.php?2');
            }
            */
            $path = '/image/sample-avatar.jpg';


            mysqli_query($db, "INSERT INTO `users` 
            (`id`, `email`, `pass`, `pravo`, `avatar`) 
            VALUES 
            (NULL, '$email', '$pass', 'user', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешно!'; //Ассоциативный массив, содержащий переменные сеанса, доступные для текущего скрипта
        header('Location: ../authen.php?4');

        if(!$queryAddUser){
            die("Нельзя");
            //прописать обработку ошибки на AddUser
        }

        }else{

            $_SESSION['message'] = 'Данный пользователь существует';
            header('Location: ../registr.php?2&err=7');
            die('reg error');
            ?>
            <a href="/auth.php?2"> Повторите попытку.</a>
            <?
        }

        /*
        $queryAllUsers="select * from `users` where `users`.`email`='$email'";
        $allUsers = mysqli_query($db, $queryAllUsers);
        $allUsers = mysqli_fetch_assoc($allUsers);

        if(!$allUsers){
        $queryAddUser = "insert into `users` (`id`,`email`,`pass`,`role`, `image`) values (NULL, '$email','$pass','user', image/sample-avatar.jpg )";
        $addUser = mysqli_query($db, $queryAddUser);
        header("Location: ../account.php?3");

        if(!$queryAddUser){
            die("Нельзя");
            //прописать обработку ошибки на AddUser
        }
        
        }else{
        echo 'Пользователь с почтой '.$email.' уже зарегестрирован на данном сайте.' ;
        ?>
        <a href="/registr.php?2"> Повторите попытку.</a>
        <?
        die();
        }
        */
    ?>

</body>
</html>