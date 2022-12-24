<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
    <style>
    <?php require_once 'CSS/style.css'; ?>
    </style>
</head>
<body>
<? session_start(); ?>
<?php require_once 'header.php';?>
<form action="lib/uploads.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
    <?php require_once 'footer.php'; ?>
</body>
</html>