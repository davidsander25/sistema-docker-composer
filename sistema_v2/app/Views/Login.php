<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $url_base . "/src/" ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $url_base . "/src/" ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $url_base . "/src/" ?>/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="<?php echo $url_base?>" class="h1"><b>DAVID</b>LTDA</a>
      </div>
      <div class="card-body">
        <?php

        if (isset($_REQUEST['logar'])) {

          echo $mensagem_login;
        }

        ?>
        <p class="login-box-msg">Entre para iniciar sua sessão</p>

        <form action="<?php echo $url_base ?>logar" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Login" name="login">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Senha" name="senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Lembrar-me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block" name="logar"><i class="fas fa-sign-in-alt"></i> Entrar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="<?php echo $url_base . "/src/" ?>plugins/jquery/jquery.min.js"></script>
  <script src="<?php echo $url_base . "/src/" ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $url_base . "/src/" ?>js/adminlte.min.js"></script>
</body>

</html>