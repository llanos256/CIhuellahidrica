<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
  background-image: linear-gradient(to left top, #17a2b8, #14abc4, #12b3d1, #11bcde, #12c5eb);
  height: 100vh;
}
#login .container #login-row #login-column .login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-image: linear-gradient(to bottom, #aec1c3, #a9b5b7, #bcc5c6, #cfd5d5, #e3e5e5);
}
#login .container #login-row #login-column .login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column .login-box #login-form #register-link {
  margin-top: -85px;
}
</style>
<body>
	<div id="login">
    <h3 class="text-center text-white pt-5">iniciar sesión admin</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="login-box col-md-12">
                    <form id="login-form" class="form" action="<?=site_url('auth/loginAdmin')?>" method="post">
                        <h3 class="text-center text-info">iniciar sesión</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">usuario:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">contraseña:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="entrar">
                        </div>
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>