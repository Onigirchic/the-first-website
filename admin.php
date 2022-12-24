<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <style>
        <?php require_once 'CSS/style.css'; ?>
    </style>
</head>
<body>
    <?php 
        require_once 'header.php';
        require_once 'lib/db.php';
    ?>

    <div class="form">
    <form action="lib/add_products.php" method="post" enctype="multipart/form-data">
        <p><input class="input_add" type="hidden" name="id"></p>
        <p><h3>Name </h3> <input class="input_add" type="text" name="name" placeholder="Введите название товара"></p>
        <p><h3>Price </h3> <input class="input_add" type="text" name="price" placeholder="Введите цену товара"></p>
        <p><h3>Product_img </h3> <input class="input_add" type="file" name="product_img"></p>
        <button type="submit" class="btn"><p class="btn_p">Button</p></button>
        <?php
            if($_SESSION['message_product']){
                echo '<p class="msg"> ' . $_SESSION['message_product'] . ' </p>';
            }
            unset($_SESSION['message_product']);
        ?>
    </form>
    </div>

    <?php require_once 'footer.php'; ?>

</body>
</html>