<?php
    session_start();
    
    require('config/config.php');
    
    if(isset($_SESSION['user_login'])) {
        header('Location: index.php');
    }
    else {
        if(isset($_POST['login']) && isset($_POST['password'])) {
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);
        }
        
        $pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD, DB_OPTIONS);
        
        $sql = "SELECT * FROM users WHERE login = '$login'";
        
        $result = $pdo->prepare($sql);
        $result->execute();
        
        $users = $result->fetchAll();
        
        if(count($users) != 0) {
            if(password_verify($password, $users[0]['password'])) {
                $_SESSION['user_login'] = $users[0]['login'];
            }
        }
        
        header('Location: index.php');
    }
?>