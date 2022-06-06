<?php
include "db.php";

$conn=connect_db();
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$login=$_POST['login'];
$pass=md5($_POST['pass']);
$FIO=$_POST['FIO'];
$email=$_POST['email'];



$sql = "INSERT INTO users (login,pass,FIO,email) VALUES ('$login', '$pass','$FIO','$email')";
if($conn->query($sql)){?>
    <script type="text/javascript">
            alert("Пользователь добавлен");  
            window.location.href = '../authorization.php';
    </script>
<?php
} else{
    header('Location:/');
}
$conn->close();
?>

