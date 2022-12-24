<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
    <?php require_once 'CSS/style.css'; ?>
    </style>
</head>
<body>
<?php 
    require_once 'header.php';
?>

<?

    try{
        require "lib/db.php";
        //$id = $_GET["id"]; // $_GET["id"] базово нет, пока в строчке ничего нет, после появления в строчке чего-то он появляется
        $queryUsers = "select * from `users`"; // выбери все из info
        $users = mysqli_query($db, $queryUsers); //Выполняет запрос в базе данных
        $users = mysqli_fetch_all($users); //массив
    }catch(Exception $e){
        
        echo 'Поймано исключение: ',  $e->getMessage('не one');
        //trow $e
    }
  
    foreach($users as $val){
        ?>
            <div class="users">
                <h2> <img class="img_users" src="<? echo $val['4']?>" alt="" width="200"></h2>
                <h2>Email: <?= $val['1']?></h2>
                <h2>Pass: <?= $val['2']?></h2>
                <h2>Role: <?= $val['3']?></h2>
            </div>
        <?
    } 
    
?>



    <?php require_once 'footer.php'; ?>
</body>
</html>