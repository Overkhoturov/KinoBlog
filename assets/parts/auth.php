<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING) ;
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING) ;


    $mysql = new mysqli('127.0.0.1','root','','register_bd');
    if ($mysql->connect_error) {
        die("Ошибка подключения: " . $mysql->connect_error);
     }
    
    $result = $mysql->query("SELECT * FROM USERS WHERE `login` = '$login'
    AND `pass` = '$pass'");
    $user = $result->fetch_assoc();
    
    if ( count($user) == 0){
        echo "Такого пользователя нет";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600,"/" ); 
    $mysql->query("INSERT INTO USERS (login, pass, name)
    VALUES('$login','$pass','$name')");

    $mysql->close();
    header("Location: \ ");
?>