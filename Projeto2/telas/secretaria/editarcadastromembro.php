<?php
include_once("/xampp/htdocs/foryourchurch/php/bancodedados/conexao.php");
session_start();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM cadastromembro WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario); 
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="/foryourchurch//img/logoicon1.ico">
  <title>For Your Church</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta name="theme-color" content="#712cf9">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
</head>
  
<body class="text-center">
  <main class="form-signin w-100 m-auto">
      <br>
      <br>

      <div class="form">
        <form action="/foryourchurch/php/secretaria/editarcadastromembro.php" method="POST" class="row g-3 needs-validation" novalidate style="width: 1200px; padding-left: 17rem;">
            <nav class="navbar bg-dark" data-bs-theme="dark" style="text-align: center;">
                <h3 style="padding-left: 20rem;">Editar Dados do Membro</h3>
            </nav>
            <div class="input-box">
                <input type="hidden" name="id" value="<?php echo $row_usuario['id'];?>"> 
            </div>
            <div class="col-md-8">
                <label for="nome" class="form-label">Nome Completo</label>
                <input id="nome" maxlength="50" type="text" class="form-control" name="nome" value="<?php echo $row_usuario['nome'];?>" autofocus required disabled>
            </div>
            <div class="col-md-4">
                <label for="pertencea" class="form-label">Igreja</label>
                <select id="pertencea" class="form-select" name="pertencea" value="<?php echo $row_usuario['pertencea'];?>" required>
                  <option selected disabled>Escolha</option>
                  <option>Terra Nova</option>
                  <option>Nova Esperança</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input id="telefone" maxlength="15" type="text" class="form-control" name="telefone" value="<?php echo $row_usuario['telefone'];?>" required>
            </div>
            <div class="col-md-5">
                <label for="email" class="form-label">E-mail</label>
                <input id="email" maxlength="50" type="text" class="form-control" name="email" aria-describedby="inputGroupPrepend" value="<?php echo $row_usuario['email'];?>" required>
            </div>
            <div class="col-md-4">
                <label for="cargo" class="form-label">Cargo</label>
                <select id="cargo" class="form-select" name="cargo" required>
                  <option selected disabled value="">Escolha</option>
                  <option>Apostolo</option>
                  <option>Auxiliar</option>
                  <option>Diácono</option>
                  <option>Evangelista</option>
                  <option>Líder</option>
                  <option>Membro</option>
                  <option>Pastor (a)</option>
                  <option>Pastor Presidente</option>
                  <option>Presbítero</option>
                </select>
            </div>
            <div class="col-md-5">
                <label for="rua" class="form-label">Rua</label>
                <input id="rua" type="text" class="form-control" name="rua" value="<?php echo $row_usuario['rua'];?>" required>
            </div>
            <div class="col-md-2">
                <label for="numero" class="form-label">Número</label>
                <input id="numero" type="text" class="form-control" name="numero" value="<?php echo $row_usuario['numero'];?>" required>
            </div>
            <div class="col-md-5">
                <label for="bairro" class="form-label">Bairro</label>
                <input id="bairro" type="text" class="form-control" name="bairro" value="<?php echo $row_usuario['bairro'];?>" required>
            </div>
            <div class="col-md-3">
                <label for="cep" class="form-label">CEP</label>
                <input id="cep" type="text" class="form-control" name="cep" value="<?php echo $row_usuario['cep'];?>" required>
            </div>
            <div class="col-md-5">
                <label for="cidade" class="form-label">Cidade</label>
                <input id="cidade" type="text" class="form-control" name="cidade" value="<?php echo $row_usuario['cidade'];?>" required>
            </div>
            <div class="col-md-4">
                <label for="estado" class="form-label">Estado</label>
                <select id="estado" class="form-select" name="estado" required>
                <option selected disabled value="">Escolha</option>
                <option>AC</option>
                <option>AL</option>
                <option>AP</option>
                <option>AM</option>
                <option>BA</option>
                <option>CE</option>
                <option>DF</option>
                <option>ES</option>
                <option>GO</option>
                <option>MA</option>
                <option>MT</option>
                <option>MS</option>
                <option>MG</option>
                <option>PA</option>
                <option>PB</option>
                <option>PN</option>
                <option>PE</option>
                <option>PI</option>
                <option>RR</option>
                <option>RO</option>
                <option>RJ</option>
                <option>RN</option>
                <option>RS</option>
                <option>SC</option>
                <option>SP</option>
                <option>SE</option>
                <option>TO</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="datanascimento" class="form-label">Data de Nascimento</label>
                <input id="datanascimento" type="date" class="form-control" name="datanascimento" value="<?php echo $row_usuario['datanascimento'];?>" required>
            </div>
            <div class="col-md-3">
                <label for="databatismo" class="form-label">Data de Batismo</label>
                <input id="databatismo" type="date" class="form-control" name="databatismo" value="<?php echo $row_usuario['databatismo'];?>">
            </div>
            <div class="col-md-3">
                <label for="membrodesde" class="form-label">Membro Desde</label>
                <input id="membrodesde" type="date" class="form-control" name="membrodesde" value="<?php echo $row_usuario['membrodesde'];?>">
            </div>
            <div class="col-md-3">
                <label for="aceitoujesus" class="form-label">Aceitou a Jesus</label>
                <input id="aceitoujesus" type="date" class="form-control" name="aceitoujesus" value="<?php echo $row_usuario['aceitoujesus'];?>">
            </div>
            <div class="col-md-12">
                <label for="observacao">Observações</label>
                <textarea id="observacao" class="form-control" name="observacao" value="" rows="3" style="width: 100%;"><?php echo $row_usuario['observacao'];?></textarea>
            </div>            
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Atualizar Dados</button>
                <a href="/foryourchurch/telas/secretaria/listademembro.php" class="btn btn-secondary" tabindex="-1" role="button" style="width: 150px;" aria-disabled="true">Voltar</a>
            </div>
        </form>
      </div>
  </main>    
</body>
</html>
