<?
    session_start();
    require "db.php";

    $name = $_POST["name"];
    $price = $_POST["price"];
    $queryAllProducts="select * from `products` where `products`.`name`='$name'";
    $allProducts = mysqli_query($db, $queryAllProducts);
    $allProducts = mysqli_fetch_assoc($allProducts);

    if(!$allProducts AND $name !== '' AND $price !== ''){

        $path = '/uploads/products/' . microtime() . $_FILES['product_img']['name'];
        if(!move_uploaded_file($_FILES['product_img']['tmp_name'], '..' . $path)){ //move_uploaded_file перемещает загруженный файл в новое место
        $_SESSION['message_product'] = 'Ошибка добавления товара!';
        header('Location: ../admin.php?8');
        }

        mysqli_query($db, "INSERT INTO `products` 
        (`id`, `name`, `price`, `product_img`) 
        VALUES 
        (NULL, '$name', '$price', '$path')");
        $_SESSION['message_product'] = 'Товар добавлен!';
        header('Location: ../admin.php?8');
    }

    if($name == '' OR $price == ''){
        $_SESSION['message_product'] = 'Введите недостающие данные';
        header('Location: ../admin.php?8');
    
    
    if(!$queryAddProducts){
        die("Нельзя");
    }
    }else{

        $_SESSION['message'] = 'Данный продукт существует';
        header('Location: ../admin.php?8');
        die('products error');
        ?>
        <a href="/admin.php?8"> Повторите попытку.</a>
        <?
    }

    

    /*
    $queryAllUsers="select * from `users` where `users`.`email`='$email'";
    $allUsers = mysqli_query($db, $queryAllUsers);
    $allUsers = mysqli_fetch_assoc($allUsers);

    if(!$allUsers && $pass == $confirm){        

        
        $path = 'image/' . microtime() . $_FILES['avatar']['name'];
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
            $_SESSION['message'] = 'Ошибка при загрузке фото!';
            header('Location: ../registr.php?2');
        }
        
        $path = '/image/sample-avatar.jpg';

        
        mysqli_query($db, "INSERT INTO `users` 
        (`id`, `email`, `pass`, `pravo`, `avatar`) 
        VALUES 
        (NULL, '$email', '$pass', 'user', '$path')");

    $_SESSION['message'] = 'Регистрация прошла успешно!';
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
    */
    
?>
