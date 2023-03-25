<?php
session_start();
include_once("../bancodedados/conexao.php");

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $pertencea = filter_input(INPUT_POST, 'pertencea', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
    $datanascimento = filter_input(INPUT_POST, 'datanascimento', FILTER_SANITIZE_STRING);
    $databatismo = filter_input(INPUT_POST, 'databatismo', FILTER_SANITIZE_STRING);
    $membrodesde = filter_input(INPUT_POST, 'membrodesde', FILTER_SANITIZE_STRING);
    $aceitoujesus = filter_input(INPUT_POST, 'aceitoujesus', FILTER_SANITIZE_STRING);
    $observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_STRING);
    $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
    $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    
    if(!empty($_POST['pertencea']) && !empty($_POST['telefone']) && !empty($_POST['rua']) && !empty($_POST['numero']) && !empty($_POST['bairro']) && !empty($_POST['email']) && !empty($_POST['cargo']) && !empty($_POST['cidade']) && !empty($_POST['estado']) && !empty($_POST['cep']) && !empty($_POST['datanascimento']) && !empty($_POST['databatismo']) && !empty($_POST['membrodesde']) && !empty($_POST['aceitoujesus']) && !empty($_POST['observacao']) ){

        $result_cadastro = "UPDATE cadastromembro SET pertencea='$pertencea',telefone='$telefone',email='$email',cargo='$cargo',cidade='$cidade',estado='$estado',cep='$cep',rua='$rua',numero='$numero',bairro='$bairro',datanascimento='$datanascimento',databatismo='$databatismo',membrodesde='$membrodesde',aceitoujesus='$aceitoujesus',observacao='$observacao' WHERE id='$id'";
        $resultado_cadastro = mysqli_query($conn, $result_cadastro);
            
        if(mysqli_insert_id($conn)){
            $_SESSION['msg1'] = "A";
            header("Location: ../../telas/secretaria/listademembro.php");
        }else{
            $_SESSION['msg1'] = "<p style='color:red;'> Membro Não Cadastrado!!</p>";
            header("Location: ../../telas/secretaria/listademembro.php");
        }
    }else{
        $_SESSION['msg2'] = "<p style='color:red;'> Dados em Branco!</p>";
        header("Location: ../../telas/secretaria/listademembro.php");
    }
    
    ?>

?>