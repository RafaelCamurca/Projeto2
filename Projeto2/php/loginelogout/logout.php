<?php  
    session_start();
    
    unset(
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioSituacao'],
        $_SESSION['usuarioEmail'],
        $_SESSION['usuarioSenha'],
    );

    //redirecionar o usuario para a página de login.
    header("Location: ../../telas/login.php");
?>