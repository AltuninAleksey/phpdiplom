<?php
include "db/db.php";
    $link=connect_db();
    if(isset($_POST["check"]) ){
       $name=trim($_POST["name"]);
       $phone=trim($_POST["phone"]);
       $email=trim($_POST["email"]);

       $sql = mysqli_query($link, "INSERT INTO `backcall` (`name`, `phone`,`email`) VALUES ('{$_POST['name']}', '{$_POST['phone']}' , '{$_POST['email']}')");       
    }
    else{
        include "404.php";
    }

?>
