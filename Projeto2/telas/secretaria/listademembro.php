<?php
include_once("../../php/bancodedados/conexao.php");
$sql = "SELECT * FROM cadastromembro ORDER BY nome asc";
$result = $conn->query($sql);
session_start();
?>
<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="../../img/logoicon1.ico">
  <title>For Your Church</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
  <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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

<body>
  <div class="table-responsive">
    <table class="table table-striped table-hover table-bordered table-sm" style="text-align: center;">
        <thead>
        <tr>
          <th colspan="13" style="font-size: x-large;" >
          <div class="col-12" style="text-align: left;">
            <a href="../menu.php" class="btn btn-secondary" tabindex="-1" role="button" style="width: 150px;" aria-disabled="true">Voltar</a>          
          </div>
          Lista de Membros
          </th>
        </tr>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Foto</th>
          <th scope="col">Nome</th>
          <th scope="col">Igreja (Bairro)</th>
          <th scope="col">Telefone</th>
          <th scope="col">E-mail</th>
          <th scope="col">Função</th>
          <th scope="col">Data de Nascimento</th>
          <th scope="col">Data de Batismo</th>
        </tr>
        </thead>
        <tbody>
          <?php
            $qtd=1;
            while($user_data = mysqli_fetch_assoc($result))
            {
              echo "<tr>";
              echo "<td style='text-align: center'>".$qtd."</td>";?>
              <td><img style="width: 50px; height: 50px;" src="../../php/secretaria/<?php echo $user_data['imagem']?>"></td><?php
              echo "<td style='text-align: left'>".$user_data['nome']."</td>";
              echo "<td style='text-align: center'>".$user_data['pertencea']."</td>";
              echo "<td style='text-align: center'>".$user_data['telefone']."</td>";
              echo "<td style='text-align: left'>".$user_data['email']."</td>";
              echo "<td style='text-align: left'>".$user_data['cargo']."</td>";
              echo "<td style='text-align: center'>".$user_data['datanascimento']."</td>";
              echo "<td style='text-align: center'>".$user_data['databatismo']."</td>";
              $idoficial = $user_data['id'];?>
                    <td>
                      <button type='button' class='btn btn-sm btn-primary' data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $user_data['id'] ?>" aria-controls="offcanvasTop">
                        <svg xmlns='http://www.w3.org/2000/svg' width='10' height='10' fill='currentColor' class='bi bi-three-dots-vertical' viewBox='0 0 16 16'>
                          <path d='M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z'/>
                        </svg>
                      </button>
                    </td>
              </tr>
              <div class="modal fade" id="exampleModal<?php echo $user_data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $user_data['nome'] ?>
                      <a class='btn btn-sm btn-primary' href='editarcadastromembro.php?id=<?php echo $user_data['id'] ?>'>
                          <svg xmlns='http://www.w3.org/2000/svg' width='10' height='10' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                              <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                          </svg>
                      </a></h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <b>Endereço:</b> <?php echo $user_data['rua']?>, <?php echo $user_data['numero']?> - <?php echo $user_data['bairro']?>, <?php echo $user_data['cidade']?>/<?php echo $user_data['estado']?><br><br>
                    <b>Membro Desde:</b>  <?php echo $user_data['membrodesde']?> <br><br>
                    <b>Aceitou a Jesus:</b> <?php echo $user_data['aceitoujesus']?> <br><br>
                    <b>Observações:</b> <?php echo $user_data['observacao']?>
                    </div>
                  </div>
                </div>
              </div>
            <?php 
            $qtd = $qtd+1;
            }  
          ?>
          <?php
            if(isset($_SESSION['msg1'])){                  
            echo "<script> swal({
                title: 'Atualização com Sucesso!!',
                icon: 'success',    
                });;</script>";
            unset($_SESSION['msg1']);
            }
            if(isset($_SESSION['msg2'])){                  
              echo "<script> swal({
                  title: 'Erro ao fazer a Atualização!!',
                  text: 'Certifique-se de inserir todos os dados Corretamente.',
                  icon: 'error',    
                  });;</script>";
              unset($_SESSION['msg2']);
            }
          ?>
          
        </tbody>
    </table>
  </div>   
</body>
</html>
