<?php
$usuario = new Clases\Usuarios();
$funcionesNav = new Clases\PublicFunction();
$enviar = new Clases\Email();
$sesionCount = @count($_SESSION['usuarios']);
if (isset($_GET["logout"])) {
    $usuario->logout();
    $funcionesNav->headerMove(CANONICAL);
}
if (isset($_POST['registrar'])) {
    $cod = substr(md5(uniqid(rand())), 0, 10);
    $usuario->set("titulo", $funcionesNav->antihack_mysqli(isset($_POST["titulo"]) ? $_POST["titulo"] : ''));
    $usuario->set("cod", $cod);
    $usuario->set("email", $funcionesNav->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : ''));
    $usuario->set("password", $funcionesNav->antihack_mysqli(isset($_POST["password"]) ? $_POST["password"] : ''));
    $usuario->set("telefono", $funcionesNav->antihack_mysqli(isset($_POST["telefono"]) ? $_POST["telefono"] : ''));
    $usuario->set("fecha",date("Y-m-d"));
    $usuario_titulo=$funcionesNav->antihack_mysqli(isset($_POST["titulo"]) ? $_POST["titulo"] : '');
    $usuario_email=$funcionesNav->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : '');
    if ($usuario->add()) {
        $usuario->add();
        $usuario->login();
        //Envio de mail al usuario
        $mensaje = 'Gracias por registrarse '.ucfirst($usuario_titulo). '<br/>';
        $asunto = TITULO.' - Registro';
        $receptor = $usuario_email;
        $emisor = EMAIL;
        $enviar->emailEnviar($asunto,$receptor,$emisor,$mensaje);
        //Envio de mail a la empresa
        $mensaje2 = 'La empresa '.ucfirst($usuario_titulo).' acaba de registrarse en nuestra plataforma' .'<br/>';
        $asunto2 = TITULO.' - Registro';
        $receptor2 = EMAIL;
        $emisor2 = EMAIL;
        $enviar->emailEnviar($asunto2,$receptor2,$emisor2,$mensaje2);

        $funcionesNav->headerMove(URL . '/perfil/editar');
    } else {

    }
}
if (isset($_POST['login'])) {
    $usuario->set("email", $funcionesNav->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : ''));
    $usuario->set("password", $funcionesNav->antihack_mysqli(isset($_POST["password"]) ? $_POST["password"] : ''));
    if ($usuario->login()) {
        $usuario->login();
        if ($_SESSION['usuarios']['estado'] == 1) {
            $funcionesNav->headerMove(URL . '/perfil/ver');
        } else {
            $funcionesNav->headerMove(URL . '/perfil/editar');
        }

    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
}
if (isset($_POST['recuperar'])) {
    $usuario->set("email", $funcionesNav->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : ''));
    $email = $funcionesNav->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : '');
    if ($usuario->validate()) {
        $usuario_data = $usuario->validate();
        $mensaje = 'Su contraseña es: <br/>';
        $mensaje .= "Contraseña: ".$usuario_data['password']."<br/>";
        $asunto = TITULO.' - Recuperación de contraseña';
        $receptor = "joaquinestudiorcha@gmail.com";//$email;
        $emisor = "joaquinestudiorocha@gmail.com";//EMAIL;
        $enviar->emailEnviar($asunto,$receptor,$emisor,$mensaje);
    } else {

    }
}
?>
<div id="spinner">
    <!--
    <div class="spinner-img">
        <img alt="AdZone Preloader" src="<?= URL ?>/assets/images/loader.gif"/>
        <h2>Please Wait.....</h2>
    </div>
    -->
</div>
<div class="header-top clear">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6 hidden-xs">
                <div class="header-top-left header-top-info">
                    <p class="hidden-sm"><a ><i class="fa fa-phone"></i><?= TELEFONO ?></a></p>
                    <p><a ><i
                                    class="fa fa-envelope"></i><?= EMAIL ?></a>
                    </p>
                </div>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="header-top-right pull-right header-top-info">
                    <?php
                    if ($sesionCount == 0) {
                        ?>
                        <ul>
                            <li><a href="" data-toggle="modal" data-target=".register-model"> <i class="fa fa-user"></i>
                                    Registrar</a></li>
                            <li><a href="" data-toggle="modal" data-target=".login-model"> <i class="fa fa-sign-in"></i>
                                    Ingresar</a></li>
                        </ul>
                        <?php
                    } else {
                        ?>
                        <li class="country top-profile">
                            <div class="btn-group " role="group">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-gear"></i> MI CUENTA
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php if ($_SESSION['usuarios']['estado'] == 1) {
                                            echo URL . '/perfil/ver';
                                        } else {
                                            echo URL . '/perfil/editar';
                                        } ?>"><i class="fa fa-user"></i>Perfil</a></li>
                                    <li><a href="<?= CANONICAL;
                                        if (@count($_GET) > 0) {
                                            echo '&logout=0';
                                        } else {
                                            echo '?logout=0';
                                        } ?>"><i class="fa fa-power-off"></i>Desconectar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="nav-down">
    <a class="navbar-brand visible-xs" id="navbar-logo-mobile" href="<?= URL ?>/index.php"><img
                src="<?= URL ?>/assets/images/logo.png" alt="" class="img-responsive"></a>
    <nav class="navbar navbar-default hidden-xs" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="navbar-logo" href="<?= URL ?>/index"><img
                            src="<?= URL ?>/assets/images/logo.png" alt="" class="img-responsive"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown"
                 data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
                <ul class="nav navbar-nav navbar-right" id="menu-right">
                    <li>
                        <a href="<?= URL ?>/index">Inicio </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Nosotros
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?= URL ?>/empresa">Sobre nosotros</a></li>
                            <li><a href="<?= URL ?>/contacto">Contactanos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="<?= URL ?>/comercios">Comercios </a>
                    </li>
                    <li class="dropdown">
                        <a href="<?= URL ?>/promociones">Promociones </a>
                    </li>
                    <li class="dropdown">
                        <a href="<?= URL ?>/novedades">Novedades </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- mobile-menu-area-start -->
<div class="mobile-menu-area visible-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul>
                            <li class="active">
                                <a href="<?= URL . '/inxes' ?>">Inicio</a>
                            </li>
                            <li>
                                <a href="<?= URL ?>/empresa">Sobre nosotros</a>
                            </li>
                            <li>
                                <a href="<?= URL ?>/contacto">Contactanos</a>
                            </li>
                            <li>
                                <a href="<?= URL ?>/comercios">Comercios </a>
                            </li>
                            <li>
                                <a href="<?= URL ?>/promociones">Promociones </a>
                            </li>
                            <li>
                                <a href="<?= URL ?>/novedades">Novedades </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area-end -->
<!-- LOGIN MODEL  -->
<div class="modal fade login-model" id="login" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="login-logo">
                <h2>Ingresar</h2>
            </div>
            <div class="login-box-inner">
                <form method="post" id="login">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" type="text" data-validation="email" name="email"
                               placeholder="Email">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" data-validation="length" data-validation-length="min8"
                               class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="remember-me-wrapper">
                        <div class="row">
                            <a class="login-forget-link col-xs-6" href="#recover" onclick="$('.modal').modal('hide');" data-toggle="modal" >
                               Olvidó su contraseña?
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <!--
                            <input type="submit" class="btn btn-default col-xs-12" value="Ingresar"
                                   onclick="ajaxPost('<?= URL; ?>/assets/api/logear-cuenta.api.php?login=ok')"/> -->
                            <button type="submit" name="login" class="btn btn-default col-xs-12">Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="recover" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="login-logo">
                <h2>Recuperar</h2>
            </div>
            <div class="login-box-inner">
                <div id="resultado"></div>
                <form method="POST" id="recuperar">
                    <input type="hidden" name="agregar" class="btn btn-default col-xs-12" value="0"/>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input class="form-control" name="email" data-validation="email" placeholder="Email">
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <!--
                            <input type="submit" class="btn btn-default col-xs-12" value="Registrar"
                                   onclick="ajaxPost('<?= URL; ?>/assets/api/crear-cuenta.api.php?login=ok')"/>-->
                            <button type="submit" name="recuperar" class="btn btn-default col-xs-12">Recuperar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- REGISTERATION MODEL  -->
<div class="modal fade register-model" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="login-logo">
                <h2>Registrarse</h2>
            </div>
            <div class="login-box-inner">
                <div id="resultado"></div>
                <form method="POST" id="registrar">
                    <input type="hidden" name="agregar" class="btn btn-default col-xs-12" value="0"/>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" type="text" name="titulo" data-validation="required"
                               placeholder="Nombre de la empresa">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input class="form-control" name="email" data-validation="email" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control" name="password"
                               data-validation="length" data-validation-length="min8" placeholder="Contraseña">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" class="form-control" name="telefono" data-validation="number"
                               placeholder="Teléfono">
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <!--
                            <input type="submit" class="btn btn-default col-xs-12" value="Registrar"
                                   onclick="ajaxPost('<?= URL; ?>/assets/api/crear-cuenta.api.php?login=ok')"/>-->
                            <button type="submit" name="registrar" class="btn btn-default col-xs-12">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
