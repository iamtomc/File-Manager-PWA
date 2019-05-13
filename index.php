<!DOCTYPE html>
<html>
<head>
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ICA Ajustadores</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <link rel="manifest" href="manifest.json">
    <script>
    // Check that service workers are registered
    if ('serviceWorker' in navigator) {
    // Use the window load event to keep the page load performant
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('sw.js');
    });
    }
    </script>
</head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><img src="dist/img/ICA-Logo.png" class="img-fluid" width="150" heigth="180"></a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Iniciar Sesion</p>
                <form action="action/login.php" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" name="email" class="form-control" placeholder="Correo electrónico">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                          <button type="submit" class="btn btn-success">Iniciar Sesion</button>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          <div class="checkbox icheck">
                              <label>
                                  <input type="checkbox"> Recordar contraseña</input>
                              </label>
                          </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <hr>
                <div class="row">
                  <div class="col-xs-6">
                    <a class="btn btn-info" href="register.php" class="text-center">Registrarme</a>
                  </div>
                  <div class="col-xs-6">
                    <a href="https://github.com/racmanuel">¿Olvido la contraseña?</a>
                  </div>
                </div>
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.2.3 -->
        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="plugins/iCheck/icheck.min.js"></script>
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
