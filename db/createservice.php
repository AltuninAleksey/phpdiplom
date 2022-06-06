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
$country=0;
$antifreze=0;
$oil=0;
$filter=0;
$today = date('Y-m-d');
echo $today;

if($_POST['service']==="Тех осмотр"){
    if($_POST['antifreze']){
        $antifreze=true;
    }
    if($_POST['filter']){
        $filter=true;
    }
    if($_POST['oil']){
        $oil=true;
    }
    if($_POST['country']==="1.5"){
        $country="Иномарка";
    }else{
        $country="Отечественный";
    }
    
}




$sql = "INSERT INTO service (NameService,id_auto,id_client,price,country,`antifreze`,`oil`,`filter`,date)
 VALUES ('$Nameservice', '$id_auto','$id_user','$price','$country','$antifreze','$oil','$filter','$today')";
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



   
  