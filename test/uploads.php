<?/*
require "db.php";

$name=$_POST['name'];
$foto=$_FILES['foto'];

//print_r($foto);

$filename=microtime().$foto['name'];
$path="../uploads/".$filename;

move_uploaded_file($foto['tmp_name'],$path);


$queryAddImg = "insert into `users` (`id`,`email`,`pass`,`role`,`img`) values (NULL, NULL, NULL, NULL, $filename)";
$addImg = mysqli_query($db, $queryAddImg);
header("Location: ../account.php?3");

if(!$addImg){
    die("Нельзя");

 }else{
echo 'Не фото' ;
?>
<a href="../account.php?3"> Повторите попытку.</a>
<?
die();
}*/
?>

<?php
      if(isset($_POST["submit"])){
          $check = getimagesize($_FILES["image"]["tmp_name"]);
          if($check !== false){
              $image = $_FILES['image']['tmp_name'];
              $imgContent = addslashes(file_get_contents($image));

            /*
             * Insert image data into database
            */

            //DB details
            $dbHost     = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName     = 'db';

            //Create connection and select DB
            $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

            // Check connection
            if($db->connect_error){
                die("Connection failed: " . $db->connect_error);
            }

            //$dataTime = date("Y-m-d H:i:s");

            //Insert image content into database
            $insert = $db->query("INSERT into info (image) VALUES ('$imgContent')");
            //$_SESSION['user']=["email" => $allUsers['email'], "pass" => $allUsers['pass'],"role" => $allUsers['role'],"images" => $allUsers['images']];
            if($insert){
                echo "File uploaded successfully.";
            }else{
                echo "File upload failed, please try again.";
            } 
        }else{
            echo "Please select an image file to upload.";
        }
    }
    ?>