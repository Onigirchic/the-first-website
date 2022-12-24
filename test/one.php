<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"  rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    //require "lib/db.php";
    //$id = $_GET["id"]; // $_GET["id"] базово нет, пока в строчке ничего нет, после появления в строчке чего-то он появляется
    //$queryOne = "select * from `info` where `info` . `id` = '$id'"; // выбери все из info, где id = id
    //$one = mysqli_query($db, $queryOne); //Выполняет запрос в базе данных
    //$one = mysqli_fetch_assoc($one); //массив
    //if(!$one){
    //    die("error one");
    //}
    try{
        require "lib/db.php";
        $id = $_GET["id"]; // $_GET["id"] базово нет, пока в строчке ничего нет, после появления в строчке чего-то он появляется
        $queryOne = "select * from `info` where `info` . `id` = '$id'"; // выбери все из info, где id = id
        $one = mysqli_query($db, $queryOne); //Выполняет запрос в базе данных
        $one = mysqli_fetch_assoc($one); //массив
    }catch(Exception $e){
        
        echo 'Поймано исключение: ',  $e->getMessage('не one');
        //trow $e
    }

    ?>
    <div>
        <p>Info: <?=$one["info"]?></p>
        <p>TooInfo: <?=$one["tooinfo"]?></p>
    </div>
</body>
</html>