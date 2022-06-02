<?php

include "db.php";

$conn=connect_db();
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$id_auto=$_POST['id_auto'];
$Nameservice=$_POST['service'];
$id_user=$_COOKIE['user'];
$price=$_POST['price'];



$sql = "INSERT INTO service (NameService,id_auto,id_client,price) VALUES ('$Nameservice', '$id_auto','$id_user','$price')";
if($conn->query($sql)){?>
    <script type="text/javascript">
            alert("Работа добавлена");  
            window.location.href = '../authorization.php';
    </script>
<?php
} else{
    
}
$conn->close();
?>



   
  