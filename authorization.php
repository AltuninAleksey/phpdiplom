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
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 207.948 207.948" style="enable-background:new 0 0 207.948 207.948;" xml:space="preserve">
        <g>
            <g>
                <g id="_x3C_Compound_Path_x3E__1_">
                    <g>
                        <g>
                            <path style="fill:#ffffff;" d="M104.591,207.474c-14.963,0-27.911-13.643-32.006-33.409H4.286c-1.714,0-3.271-1.024-3.94-2.605
                                c-0.676-1.578-0.344-3.403,0.845-4.653c4.406-4.606,8.6-8.181,12.304-11.338c9.101-7.759,14.598-12.444,14.598-24.54V90.918
                                c0.179-34.429,23.098-65.056,54.91-73.978c1.542-6.993,7.136-16.466,20.965-16.466c13.686,0,19.347,9.777,20.936,16.924
                                c31.988,8.954,55.018,39.392,55.182,73.506v41.343c0,11.724,4.864,15.697,13.675,22.894c3.887,3.171,8.285,6.764,12.995,11.671
                                c1.185,1.242,1.525,3.071,0.845,4.653c-0.673,1.578-2.226,2.605-3.94,2.605h-67.071
                                C132.495,193.832,119.554,207.474,104.591,207.474z M81.776,175.608c3.837,13.757,12.938,23.291,22.815,23.291
                                c9.874,0,18.968-9.534,22.808-23.291H81.776z M15.001,165.487h177.826c-1.553-1.321-3.056-2.548-4.481-3.704
                                c-9.398-7.677-16.824-13.739-16.824-29.536V90.918c-0.15-31.168-21.767-58.901-51.407-65.908
                                c-1.829-0.433-3.16-2.008-3.293-3.883c-0.086-1.21-1.288-12.082-12.848-12.082c-11.9,0-12.794,10.368-12.848,11.556
                                c-0.1,1.904-1.446,3.511-3.3,3.944C58.352,31.502,36.84,59.428,36.679,90.943v39.99c0,16.055-8.167,23.008-17.619,31.068
                                C17.761,163.1,16.401,164.26,15.001,165.487z"/>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <path style="fill:#ffffff;" d="M126.823,26.746c-0.412,0-0.834-0.061-1.249-0.19c-22.74-6.921-41.497-1.117-41.686-1.056
                            c-2.269,0.716-4.66-0.53-5.383-2.777c-0.723-2.251,0.512-4.66,2.759-5.383c0.862-0.279,21.376-6.721,46.804,1.016
                            c2.265,0.684,3.539,3.081,2.856,5.347C130.359,25.554,128.655,26.746,126.823,26.746z"/>
                    </g>
                </g>
            </g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
                </svg>
            </a>
        </div>
    </div>

</nav>
<?php
    if($_COOKIE['user']==""):
?>

<div class="mainblock">
  

    <div class="vxod">Вход</div>
    <div class="login">Логин(для обучающихся E-mail):</div>

    <form action="check.php" method="post">
        <input type="text" placeholder="Логин" name="login">

        <div class="password" >Пароль:</div>

        <input type="text" placeholder="Пароль" name="pass"><br>
        <button type="submit" class="passwordbutton"> ВХОД </button>
    </form>

    <div class="forstudent">Для обучающихся:</div>
    <div class="forgotpassword"><a href="#" >Забыли пароль?</a></div> 
    <div class="registration">Не зарегистрированы? <a href="">зарегистрироваться</a></div>
    <?php
else: 
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