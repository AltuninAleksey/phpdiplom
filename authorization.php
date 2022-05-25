<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_auth.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
<nav>
    <div class="container">
        <div class="main"><a href="index.php">Главная</a></div>
        <div class="bell">
            <a href="#">
            </a>
        </div>
    </div>

</nav>
<?php
    if($_COOKIE['user']==""):
?>

<div class="mainblock">
  

    <div class="vxod">Вход</div>
    <div class="login">Логин:</div>

    <form action="check.php" method="post">
        <input type="text" placeholder="Логин" name="login">

        <div class="password" >Пароль:</div>

        <input type="text" placeholder="Пароль" name="pass"><br>
        <button type="submit" class="passwordbutton"> ВХОД </button>
    </form>


    <div class="forgotpassword"><a href="#" >Забыли пароль?</a></div> 
    <div class="registration">Не зарегистрированы? <a href="">зарегистрироваться</a></div>
    <?php
else: 
    include_once "db/db.php";
    $buf_id=$_COOKIE['user'];

    

    $conn = connect_db();
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $sql = "SELECT * from `automobile` WHERE id_user=$buf_id";
    if($result = $conn->query($sql)){
        $rowsCount = $result->num_rows; // количество полученных строк
        echo "<table class='table' > <thead>
                <tr><th> Марка </th><th>модель </th><th> Год </th><th> Вин </th><th> Статус </th></tr>
                </thead>";
                
        foreach($result as $row){
            echo "	<tbody>
            <tr>";
                echo "<td>" . $row["mark"] . "</td>";
                echo "<td>" . $row["model"] . "</td>";
                echo "<td>" . $row["Year"] . "</td>";
                echo "<td>" . $row["VIN"] . "</td>";
                echo "<td>" . $row["status"] . "</td>";
            echo "</tbody>
            </tr>";
        }
        echo "</table>";
        $result->free();
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();




  
   
?>
<div class="text">
с подключеникм username <br>
для выхода <a href="exit.php"> здесь </a>




</div>
</div>


<?php

endif;
?>
    
</body>
</html>