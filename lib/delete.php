<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>

    <?php
        require "db.php";
        $id = $_GET["id"];
        $queriDelete = "delete from `users` where `users`.`id` = '$id'";
        $delete = mysqli_query($db, $queriDelete);
        header("Location: ../registr.php?2"); //редирект

        session_destroy();
    ?>

</body>
</html>
