<?php
include "db.php";

$conn=connect_db();
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$mark=$_POST['mark'];
$model=$_POST['model'];
$year=$_POST['year'];
$vin=$_POST['vin'];
$id=$_COOKIE['user'];


$sql = "INSERT INTO automobile (mark,model,Year,VIN,id_user) VALUES ('$mark', '$model','$year','$vin','$id')";
if($conn->query($sql)){?>
    <script type="text/javascript">
            alert("Автомобиль добавлен");  
            window.location.href = '../authorization.php';
    </script>
<?php
} else{
    header('Location:/');
}
$conn->close();
?>

