<?php
    session_start();
    include_once("../bancodedados/conexao.php");

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if(!empty($_POST['email']) && !empty($_POST['senha'])){
        $usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas prevenindo SQL injection.
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = md5($senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
        $result = mysqli_query ($conn, $sql);
        $resultado = mysqli_fetch_assoc($result);

        if(empty($resultado)){
            $_SESSION['loginErro'] = "Usuário ou senha Inválido"; 
            header("Location: ../../telas/login.php");
        }elseif(isset($resultado)){
            $_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioSituacao'] = $resultado['situacao'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
            $_SESSION['usuarioSenha'] = $resultado['senha'];
            header("Location: ../../telas/menu.php");
        }else{
            $_SESSION['loginErro'] = "Usuário ou senha Inválido"; 
            header("Location: ../../telas/login.php");
        }
    }else{
        $_SESSION['loginErro1'] = "Usuário ou senha Inválido"; 
        header("Location: ../../telas/login.php");
    }

?>