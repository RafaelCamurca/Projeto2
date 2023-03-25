<?php
include_once("../../php/bancodedados/conexao.php");
$sql = "SELECT * FROM lancamento ORDER BY data desc";
$result = $conn->query($sql);
session_start();
?>
<!doctype html>
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
    <div class="form">
    <br>
        <form action="../../php/tesouraria/lancamento.php" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate style="width: 100%; margin-left: 0.01rem;">
            <nav class="navbar bg-dark" data-bs-theme="dark" >
                <h3 style="text-align: center; width: 100%;">Entradas e Saídas</h3>
            </nav>
            <br>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" style="width: 50px; ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </button>
            <a href="../menu.php" class="btn btn-secondary" tabindex="-1" role="button" style="width: 170px;" aria-disabled="true">Voltar</a>        
            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                <div class="offcanvas-body" style="width: 100%;"> 
                    <table class="table">
                        <thead>
                            <th scope="col" style="width: 200px;"> 
                                <label for="data" class="form-label">Data</label>
                                <input id="data" type="date" class="form-control" name="data" required>
                            </th>
                            <th scope="col" style="width: 200px;">
                                <label for="valor" class="form-label">Valor</label>
                                <div class="input-group">
                                    <span class="input-group-text">R$</span>
                                    <input type="text" id="valor" name="valor" class="form-control" required>
                                </div>
                            </th>
                            <th scope="col">
                                <label for="tipo" class="form-label">Tipo</label>
                                <select id="tipo" class="form-select" name="tipo" required>
                                <option selected disabled value="">Escolha</option>
                                <option>Entrada</option>
                                <option>Saída</option>
                                </select>
                            </th>
                            <th scope="col">
                                <label for="descricao" class="form-label">Descrição</label>
                                <select id="descricao" class="form-select" name="descricao" required>
                                <option selected disabled value="">Escolha</option>
                                <option>Ajuda Pastoral</option>
                                <option>Água, Luz e Internet</option>
                                <option>Datas Comemorativas</option>
                                <option>Dízimo</option>
                                <option>Limpeza</option>
                                <option>Manutenção</option>
                                <option>Oferta</option>
                                <option>Outros</option>
                                <option>Reuninão</option>
                                <option>Sopa</option>
                                </select>
                            </th>
                            <th scope="col">
                                <label for="cultode" class="form-label">Culto de</label>
                                <select id="cultode" class="form-select" name="cultode" required>
                                <option selected disabled value="">Escolha</option>
                                <option>Consagração</option>
                                <option>Domingo</option>
                                <option>Escola Bíblica Dominical</option>
                                <option>Outros</option>
                                <option>Quarta-Feira</option>
                                <option>Sábado</option>
                                </select>
                            </th>
                        </thead>
                    </table>                
                    <?php
                        if(isset($_SESSION['msg1'])){                  
                            echo "<script> swal({
                                title: 'Lançamento Adicionado com Sucesso!!',
                                icon: 'success',    
                                });;</script>";
                            unset($_SESSION['msg1']);
                        }
                        if(isset($_SESSION['msg2'])){                  
                            echo "<script> swal({
                                title: 'Falha ao Lançar Dados!!',
                                text: 'Certifique-se de inserir todos os dados.',
                                icon: 'error',    
                                });;</script>";
                            unset($_SESSION['msg2']);
                        } 
                    ?>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Adicionar Lançamento</button>
                    </div>
                </div>
            </div>

            <br>
            <div class="historico" style="padding-left: 2rem; padding-right: 2rem;">
                <table class="table table-bordered border-dark table-responsive table-sm">
                <thead>
                    <tr>
                        <th colspan="7" style="font-size: 20px;">Histórico</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th colspan="4" style="font-size: 16px;">Entradas (RECEITAS)</th>
                        <th colspan="3" style="font-size: 16px;">Saídas (DESPESAS)</th>
                    </tr>
                    <tr>
                        <th style="font-size: 16px;">Data</th>    
                        <th style="font-size: 16px;">Culto</th>    
                        <th style="font-size: 16px;">Dízimo</th>
                        <th style="font-size: 16px;">Oferta</th>
                        <!-- <th style="font-size: 16px;">Qtd</th> -->
                        <th style="font-size: 16px;">Descrição</th>
                        <th style="font-size: 16px;">Valor</th>
                    </tr>
                    <?php
                        //echo "<td style='text-align: center'>".date("d/m/Y",strtotime($user_data['data']))."</td>";
                        $qtd=1;
                        $valorentradadizimo = 0;
                        $valorentradaoferta = 0;
                        $valorsaida = 0;
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td style='text-align: center'>".date("d/m/Y",strtotime($user_data['data']))."</td>";
                            echo "<td style='text-align: center'>".$user_data['cultode']."</td>";
                            if ($user_data['tipo']=='Entrada'){
                                if($user_data['descricao']=='Dízimo'){
                                    echo "<td style='text-align: center'>".$user_data['valor']."</td>";
                                    echo "<td style='text-align: center'>-</td>";
                                    $valorentradadizimo = $user_data['valor']+$valorentradadizimo;
                                }
                                if($user_data['descricao']=='Oferta'){
                                    echo "<td style='text-align: center'>-</td>";
                                    echo "<td style='text-align: center'>".$user_data['valor']."</td>";
                                    $valorentradaoferta = $user_data['valor']+$valorentradaoferta;
                                }
                            //echo "<td style='text-align: center'>".$qtd."</td>";
                            }
                            
                            if($user_data['tipo']=='Saída' and $user_data['data']==$user_data['data']){
                                echo "<td style='text-align: center'>-</td>";
                                echo "<td style='text-align: center'>-</td>";
                                //echo "<td style='text-align: center'>".$qtd."</td>";
                                $valorsaida = $user_data['valor']+$valorsaida;
                            }
                            if($user_data['descricao']=='Dízimo' or $user_data['descricao']=='Oferta'){
                                echo "<td style='text-align: center'>-</td>";
                                echo "<td style='text-align: center'>-</td>";
                            }else{
                                echo "<td style='text-align: center'>".$user_data['descricao']."</td>";
                                echo "<td style='text-align: center'>".$user_data['valor']."</td>";
                            }

                            $qtd = $qtd+1;
                        }
                    ?>
                    <!--<tr>
                        //<td colspan="2" style="font-size: 20px; text-align: center"><b>TOTAL</b></td>
                        <td style="font-size: 20px; text-align: center"><b>R$ <?php echo $valorentradadizimo?></b></td>
                        <td style="font-size: 20px; text-align: center"><b>R$ <?php echo $valorentradaoferta?></b></td>
                        <td></td>
                        <td style="font-size: 20px; text-align: center"><b>R$ <?php echo $valorsaida?></b.</td>
                    </tr>-->
                </tbody>
                </table>
                <div class="fixed-bottom" style="margin-left: 2rem; margin-right: 2rem;">         
                    <table class="table table-bordered border-dark table-responsive table-sm ">
                    <thead>
                        <tr style="background-color: gray;">
                            <td colspan="3" style="font-size: 20px; text-align: center; width: 206px;"><b>TOTAL</b></td>
                            <td style="font-size: 20px; text-align: center; width: 141px;"><b>R$ <?php echo $valorentradadizimo?></b></td>
                            <td style="font-size: 20px; text-align: center; width: 131px;"><b>R$ <?php echo $valorentradaoferta?></b></td>
                            <td style="width: 370px;"></td>
                            <td style="font-size: 20px; text-align: center; width: 108px;"><b>R$ <?php echo $valorsaida?></b.</td>
                        </tr> 
                    </thead>
                    <tbody class="table-group-divider">
                                              
                    </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
  </main>    
</body>
</html>