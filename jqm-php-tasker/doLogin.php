<?php
    include "config.php";
    include "functions.php";
    include "DB.php";
    include "User.php";

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = new User();

        if($u = $user->checkLogin($email, $password)){
            $_SESSION['user_id'] = $u->id;
            $_SESSION['user_name'] = $u->name;
            $_SESSION['user_email'] = $u->email;

            $html = showDialog("Sucesso", "Olá {$u->name}, você logou com sucesso", "tasks.php");
            
            echo $html;
        }else{
            $html = showDialog("Erro", "Login/Senha incorretos", "index.php");
        
            echo $html;    
        }
    }else{
        $html = showDialog("Erro", "Preencha o email/senha", "index.php");
        
        echo $html;
    }
?>