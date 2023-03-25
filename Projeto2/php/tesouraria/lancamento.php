<?php
session_start();
include_once("../bancodedados/conexao.php");

    $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
    $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $cultode = filter_input(INPUT_POST, 'cultode', FILTER_SANITIZE_STRING);
        
    if(!empty($_POST['data']) && !empty($_POST['valor']) && !empty($_POST['tipo']) && !empty($_POST['descricao']) && !empty($_POST['cultode']) ){

        $result_cadastro = "INSERT INTO lancamento (data,valor,tipo,descricao,cultode) VALUES ('$data', '$valor', '$tipo', '$descricao', '$cultode')";
        $resultado_cadastro = mysqli_query($conn, $result_cadastro);
            
        if(mysqli_insert_id($conn)){
            $_SESSION['msg1'] = "A";
            header("Location: ../../telas/tesouraria/lancamento.php");
        }else{
            $_SESSION['msg1'] = "<p style='color:red;'> LancamentoFalho!!</p>";
            header("Location: ../../telas/tesouraria/lancamento.php");
        }
    }else{
        $_SESSION['msg2'] = "<p style='color:red;'> DadosemBranco!</p>";
        header("Location: ../../telas/tesouraria/lancamento.php");
    }
    
    ?>

?>