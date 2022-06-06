<?php
include "db.php";
    $link=connect_db();
    if(isset($_POST["check"]) &&isset($_POST["name"]) && isset($_POST["phone"]) ){
       $name=trim($_POST["name"]);
       $phone=trim($_POST["phone"]);
       $email=trim($_POST["email"]);


       

       $sql = mysqli_query($link, "INSERT INTO `backcall` (`name`, `phone`,`email`) VALUES ('{$_POST['name']}', '{$_POST['phone']}' , '{$_POST['email']}')");       


       ?>
        <script type="text/javascript">
            alert("Данные успешо отправлены, мы свяжемся с вами в ближайшее время");
         
            window.location.href = '../index.php';
        
        </script>
        
       <?php
 
    }
    else{
        header("Location: ../404.php");
    }

?>
