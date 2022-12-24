<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <style>
    <?php include 'CSS/style.css'; ?>
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<table>
        <tr>
            <td><h3 class="stolb">id</h3></td> 
            <td><h3 class="stolb">info</h3></td>
            <td><h3 class="stolb">tooinfo</h3></td>
        </tr>
        <?php
            require "lib/db.php";
            $queryAll = "select * from `info`"; // выбрери все из info
            $all = mysqli_query($db,$queryAll); // запрос в бд (данные бд, запрос)
            $all = mysqli_fetch_all($all); // Выбирает все строки из результирующего набора и помещает их в ассоциативный массив, обычный массив или в оба
            foreach($all as $item){
                ?>
                <tr>
                    <td><p><?=$item[0]?></p></td>
                    <td><p><?=$item[1]?></p></td>
                    <td><p><?=$item[2]?></p></td>
                    <td><a href="one.php/?id=<?=$item[0]?>"><p>Open</p></a></td> <!-- ссылка с id из бд таблицы -->
                    <td><a href="/redact.php?id=<?=$item[0]?>"><p>Redact</p></td>
                    <td><a href="/delete.php?id=<?=$item[0]?>"><p>Delete</p></td>
                    <td></td>
                </tr>
                <?php
            }
        ?>
    </table>
    <?php require_once 'footer.php'; ?>
</body>
</html>