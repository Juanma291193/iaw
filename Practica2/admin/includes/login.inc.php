<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="/iaw/Practica2/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/iaw/Practica2/assets/bootstrap/css/thumbnail-gallery.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/iaw/Practica2/assets/css/estilos.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 form_login">
                <form class="form-signin" method="post" action="actions/login.act.php">
                    <h4 class="form-signin-heading">Por favor, regístrese</h4>
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input type="email" id="email_login" name="email_login" class="form-control frm_login_email" placeholder="Email" required autofocus>
                    <label for ="inputPassword" class="sr-only">Contraseña</label>
                    <input type="password" id="login_password" name ="login_password" class="form-control frm_login_pass" placeholder="Contraseña" required>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button><br><br>
                    <a class="btn btn-lg btn-warning btn-block" href="index.php?page=new">Alta nuevo autor</a>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
        
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/iaw/Practica2/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/iaw/Practica2/assets/js/bootstrap.min.js"></script>

</body>

</html>