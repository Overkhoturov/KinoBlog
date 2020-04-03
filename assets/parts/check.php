<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING) ;
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING) ;
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING) ;
    
    if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
        echo "Не допустимая длинна логина";
        exit();
    }
    else if(mb_strlen($name) < 3 || mb_strlen($name)>50){
        echo "Не допустимая длинна имени";
        exit();
    }
    else if(mb_strlen($pass) < 2 || mb_strlen($pass)>6){
        echo "Не допустимая длsинна пароля (от 2 до 6 символов)";
        exit();
    }

    $pass = md5($pass."ghfghdff4etsgr442");

    $mysql = new mysqli('127.0.0.1','root','','register_bd');
    if ($mysql->connect_error) {
        die("Ошибка подключения: " . $mysql->connect_error);
     }

    $mysql->query("INSERT INTO USERS (login, pass, name)
    VALUES('$login','$pass','$name')");

    $mysql->close();
    header('Location: /login.php');
?>