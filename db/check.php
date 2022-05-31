<?php
    include_once "db.php";

    $login = (trim($_POST['login']));
    $pass = (trim($_POST['pass']));


    $connect=connect_db();
    $query = mysqli_query($connect,"SELECT * FROM users WHERE `login`='$login' AND `pass`='$pass' ");
    $data = mysqli_fetch_assoc($query);
    if(count($data)==0){
        echo "this user not found";
        exit();
    }
    setcookie('user',$data['id'],time()+3600, "/");
    header('Location:/');

    $connect->close();

?>
