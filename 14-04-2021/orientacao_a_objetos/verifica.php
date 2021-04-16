<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    if($login == 'root' && $senha == 123)
    {
        header('Location: painel_do_administrador.php');
    }
    else
    {
        header('Location: index.php');
    }
    
?>