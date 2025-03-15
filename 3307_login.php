<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/plugins/iCheck/square/blue.css') ?>" rel="stylesheet" type="text/css" />
   </head>
    <body class="login-page">
        <div class="login-box">
            
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="<?php echo site_url('auth/login') ?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">    
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
                </div><!-- /.social-auth-links -->

                <a href="#">I forgot my password</a><br>
                <a href="register.html" class="text-center">Register a new membership</a>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        
            <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js')?>"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
            <!-- iCheck -->
            <script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js')?>"></script>
            <script>
              $(function () {
                $('input').iCheck({
                  checkboxClass: 'icheckbox_square-blue',
                  radioClass: 'iradio_square-blue',
                  increaseArea: '20%' /* optional */
                });
              });
</script>
    </body>
</html>