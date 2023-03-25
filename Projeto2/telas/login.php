<?php
  session_start();
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/logoicon1.ico">
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
    <form class='login' method="POST" action="../php/loginelogout/valida.php">
      <a href ="../index.php"><img src="../img/logo-removebg-preview.png" height ="200" width="250" ></a>
        <div class="principalendereco">
          <div class="form-floating" style="width: 400px; display:inline-flex;">
            <input type="email" class="form-control" id="email" name="email" >
            <label for="floatingInput">Endereço de E-mail</label>
          </div>
        </div>
        <div class="principalsenha">
          <div class="form-floating" style="width: 400px; display:inline-flex;">
            <input type="password" class="form-control" id="senha" name="senha">
            <label for="floatingPassword">Senha</label>
          </div>
        </div>
          <br>
          <br>
          <div style="width: 400px; display:inline-flex;">
            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
          </div>
          <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
      </div> 
    </form>
      <?php
        if(isset($_SESSION['loginErro'])){                  
          echo "<script> swal({
              title: 'Usuário ou Senha Inválidos!!',
              icon: 'error',    
              });;</script>";
          unset($_SESSION['loginErro']);
        }
        if(isset($_SESSION['loginErro1'])){                  
          echo "<script> swal({
              title: 'Insira o Usuário e Senha !!',
              icon: 'error',    
              });;</script>";
          unset($_SESSION['loginErro1']);
        }
      ?>
  </main>
</body>
</html>
