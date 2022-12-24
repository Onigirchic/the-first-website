<?
    session_start();

    $db = mysqli_connect('127.0.0.1:3306','root','','db');

    if(!$db){
        die("error connect");
    }

?>
