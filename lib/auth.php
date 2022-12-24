<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
</head>
<body>
    
    <?php
        
        require "db.php";

        
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $check_user = mysqli_query($db, "SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
        if(mysqli_num_rows($check_user) > 0) {

            $user = mysqli_fetch_assoc($check_user);

            $_SESSION['user'] = [
                "id" => $user['id'],
                "email" => $user['email'],
                "pass" => $user['pass'],
                "pravo" => $user['pravo'],
                "avatar" => $user['avatar']
            ];

            header('Location: ../account.php?3');

        } else {
            $_SESSION['message'] = 'Не верный логин или пароль!';
            header('Location: ../authen.php?4');
        }

        /*
        
        $queryAllUsers="select * from `users` where `users`.`email`='$email'";
        $allUsers=mysqli_query($db,$queryAllUsers);
        $allUsers=mysqli_fetch_assoc($allUsers);
        if(!$allUsers){
            echo 'Почта: '.$email.'или пароль:'.$pass.' введены не правильно.';
            ?>
            <a href="/authen.php?4"> Повторите попытку.</a>
            <?
            die();
        }

        if($allUsers['email'] == $email && $allUsers['pass'] == $pass){
            $_SESSION['user']=["email" => $allUsers['email'], "pass" => $allUsers['pass'],"role" => $allUsers['role'],"image" => $allUsers['image'], "id" => $allUsers['id']];
            header("Location: ../account.php?3");
        }if($allUsers['pass'] != $pass){
            echo $pass.' введен не правильно.';
            ?>
            <a href="/authen.php?4"> Повторите попытку.</a>
            <?
            die();
        }else{

        }
        */
    ?>
</body>
</html>