<?php
    setcookie('user',$data['login'],time()-3600, "/");
    header('Location:/');
?>