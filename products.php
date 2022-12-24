<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
    <style>
        <?php require_once 'CSS/style.css'; ?>
    </style>
</head>
<body>
    <?php require_once 'header.php' ?>
    

    <?
    try{
        require "lib/db.php";
        $queryProduct = "select * from `products`"; // выбери все из info, где id = id
        $product = mysqli_query($db, $queryProduct); //Выполняет запрос в базе данных
        $product = mysqli_fetch_all($product); //массив
    }catch(Exception $e){
        
        echo 'Поймано исключение: ',  $e->getMessage('не product');

    }
  
    foreach($product as $val){
        ?>
            <div class="product">
                <h2> <img class="product_img" src="<? echo $val['3']?>" alt=""></h2>
                <h2 class="info_prod">Name: <?= $val['1']?></h2>
                <h2 class="info_prod">Price: <?= $val['2']?></h2>
                <button type="submit" class="add-to-cart" name="button" data-id="<?= $val['0']?>" > <p>В корзину</p</a>></button>
                <?
                    if(!$_SESSION['user'] || $_SESSION['user']['pravo'] == 'user') {

                    } else {
                ?>
                <a class="del" href="lib/delete_products.php?id=<?=$val['0']?>"><p class="del">Delete</p></a>
                <?
                    }
                ?>
            </div>
        <?
        
    }

    
    
?>




    <?php require_once 'footer.php'; ?>

</body>
</html>