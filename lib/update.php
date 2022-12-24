<?
    session_start();
    require "db.php";

    $id = $_POST["id"];
    $email = $_POST["email"];
    $pass = $_POST['pass'];
    $pravo = $_POST["pravo"];
    $file = $_FILES['avatar'];
    $amyAv = $_SESSION["user"]["avatar"];

    print_r($amyAv);
    print($_SESSION["user"]["avatar"]);

    if($file["size"] == 0 && !$amyAv ){
        $path = '/image/sample-avatar.jpg';
        //print_r($path);
    }else{
        $path = '/uploads/users/' . microtime() . $_FILES['avatar']['name'];
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '..' . $path)){
        $_SESSION['message'] = 'Ошибка при загрузке фото!';
        header('Location: ../redact.php');
        }
    }

    $queryUpdate = "update `users` set `email` = '$email',`pass` = '$pass',`avatar` = '$path' where `users`.`id`='$id'"; // обнови таблицу info  что-то рано чему-то
    $update = mysqli_query($db, $queryUpdate); //запрос в бд (данные бд, запрос)



    header("Location: ../authen.php?4"); //редирект

    session_destroy();
?>

