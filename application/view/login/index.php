<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ramsperbit | Iniciar sesion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=URL ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=URL ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=URL ?>plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Ramsper</b>BIT</a>
  </div>

  <div class="login-box-body">

    <div id="_AJAX_LOGIN_"></div>


    <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Inicia sesión</h4>

    <form role="form" action="<?= URL ?>login/logueo" method="post" onkeypress="return runScriptLogin(event)">
      <div class="form-group has-feedback">
        <input type="username_or_email" class="form-control" name="user_login" id="user_login" placeholder="Email o Usuario" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pass_login" id="pass_login" placeholder="Contraseña" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" value="1" name="session_login" id="session_login"> Recordarme
            </label>
          </div>
        </div>
        <!-- /.col -->
        <!--<input type="hidden" name="login" value="1">-->
        <div class="col-xs-4">
          <button type="submit" name="btnLogin"  onclick="goLogin()" class="btn btn-primary btn-block btn-flat">Iniciar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    <a href="#">Olvide mi contraseña</a><br>
    <a href="<?= URL ?>login/registrar" class="text-center">Registrar nueva cuenta</a>

  </div>
  <!-- /.login-box-body -->
</div>


<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?=URL ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=URL ?>bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=URL ?>plugins/iCheck/icheck.min.js"></script>

 <script src="<?=URL ?>js/login.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
