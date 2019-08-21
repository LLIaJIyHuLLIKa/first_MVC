<?php
    require_once('config/config.php');
    require(CONTROLLERS_PATH . '/registration_controller.php');
    
    if(isset($_POST['fullName']) && isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])) {
        $fullName = htmlspecialchars($_POST['fullName']);
        $login = htmlspecialchars($_POST['login']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
    }
    
    if($fullName == '' || $login == '' || $email == '' || $password == '') {
        $controller = new Registration_Controller();
    }
    else {
        $controller = new Registration_Controller($fullName, $login, $email, $password);
    }
        
    $controller->start();
?>