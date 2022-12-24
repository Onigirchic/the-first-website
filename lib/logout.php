<?

    session_start();

    unset($_SESSION['user']); //Удаляет переменную

    session_destroy(); //уничтожает все данные сессии

    header("Location: ../authen.php?4");

?>