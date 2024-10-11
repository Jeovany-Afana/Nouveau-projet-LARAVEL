<!doctype html>
<html lang="en">

<head>
<title>:: Iconic University :: Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/main.css">

<style>

.card {
 background-color: #5db5df;
 border-radius: 10px;
 border: 10px solid white;
}

button
{
    border: 2px solid white;
}

</style>

</head>

<body data-theme="light" class="font-nunito">
	<!-- WRAPPER -->
	<div id="wrapper" class="theme-cyan">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main university">
				<div class="auth-box">
                
                    <div class="top">
                        <img src="images/user-login-icon-29.png" alt="Iconic">
                    </div>
					<div class="card">
                        <div class="header">
                            <p class="lead">Connexion Enseigant</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" action="{{URL::to('/teacherlogin')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Adresse mail</label>
                                    <input type="email" class="form-control" name="email" id="signin-email" value="user@domain.com" placeholder="Adresse mail">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Mot de passe</label>
                                    <input type="password" class="form-control" name="password" id="signin-password" value="thisisthepassword" placeholder="Mot de passe">
                                </div>
                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox" style="border-color: white;">
                                        <span>Se rappeler de moi</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" style="border: 3px solid #5db5df; background-color: white; color: #5db5df; font-weight:bold;">LOGIN</button>
                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Mot de passe oublié ?</a></span>
                                    <span>Vous n'avez pas de compte ? <a href="inscription_prof">Créer un compte</a></span>
                                
                                    <br><br>

                                    <a class="btn btn-primary" href="{{URL::to('index')}}" style="margin-left: 0.5%; background-color: #0056b3;">Aller à l'acceuil</a>
                                
                                </div>
                            </form>
             
                        </div>

                    </div>
         
				</div>
			</div>
          
                <img src="images/userlog.png" alt="" style="height: 100%; width:100%;">
 
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
</html>
