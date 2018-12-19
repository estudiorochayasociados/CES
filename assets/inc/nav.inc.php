<?php
$usuario = new Clases\Usuarios();
$funcionesNav = new Clases\PublicFunction();
$sesionCount = @count($_SESSION['usuarios']);

//$usuario->set("email","p@p.com");
//$usuario->set("password","p");
//$usuario->login();
//var_dump($_SESSION['usuarios']);
if (isset($_GET["logout"])) {
    $usuario->logout();
    $funcionesNav->headerMove(CANONICAL);
}
if (isset($_POST['registrar'])){
    $cod = substr(md5(uniqid(rand())), 0, 10);
    $usuario->set("titulo", $funcionesNav->antihack_mysqli(isset($_POST["titulo"]) ? $_POST["titulo"] : ''));
    $usuario->set("cod", $cod);
    $usuario->set("email", $funcionesNav->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : ''));
    $usuario->set("password", $funcionesNav->antihack_mysqli(isset($_POST["password"]) ? $_POST["password"] : ''));
    $usuario->set("telefono", $funcionesNav->antihack_mysqli(isset($_POST["telefono"]) ? $_POST["telefono"] : ''));
    if ($usuario->add()) {
        $usuario->add();
        $usuario->login();
        $funcionesNav->headerMove(URL .'/perfil/editar');
    } else{
        echo "....";
    }
}
if (isset($_POST['login'])){
    $usuario->set("email", $funcionesNav->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : ''));
    $usuario->set("password", $funcionesNav->antihack_mysqli(isset($_POST["password"]) ? $_POST["password"] : ''));
    if ($usuario->login()) {
        $usuario->login();
        if ($_SESSION['usuarios']['estado']==1){
            $funcionesNav->headerMove(URL .'/perfil/ver');
        }else{
            $funcionesNav->headerMove(URL .'/perfil/editar');
        }

    } else{
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
                    <p class="hidden-sm"><a href="tel:+3211234567"><i class="fa fa-phone"></i><?= TELEFONO?></a></p>
                    <p><a href="mailto:contact@scriptsbundle.com"><i
                                    class="fa fa-envelope"></i><?= EMAIL?></a>
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
                                    <li><a href="<?php if ($_SESSION['usuarios']['estado']==1){ echo URL .'/perfil/ver'; }else{ echo URL .'/perfil/editar';} ?>"><i class="fa fa-user"></i>Perfil</a></li>
                                    <li><a href="<?= CANONICAL ?>?logout=0"><i class="fa fa-power-off"></i>Desconectar</a>
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
                                <a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">Home With slider</a></li>
                                    <li><a href="index2.html">Home 2 (Static Image)</a></li>
                                    <li><a href="index3.html">Home 3 (Transparent Header)</a></li>
                                    <li><a href="index4.html">Home 4</a></li>
                                    <li><a href="index5.html">Home 5 (With Map)</a></li>
                                    <li><a href="index6.html">Home 6 (advertizment)</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">Pages</a>
                                <ul>
                                    <li><a href="about.html">about Us</a></li>
                                    <li><a href="contactus.html">contact us</a></li>
                                    <li><a href="404.html">Error Page</a></li>
                                    <li>
                                        <a href="#">Meltilevel Menu</a>
                                        <ul>
                                            <li><a href="">Level 2</a></li>
                                            <li><a href="">Level 2</a></li>
                                            <li><a href="">Level 2</a></li>
                                            <li><a href="">Level 2</a></li>
                                            <li><a href="">Level 2</a></li>
                                            <li><a href="">Level 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="category-1.html">Listing</a>
                                <ul>
                                    <li><a href="category-1.html"> Category 1</a></li>
                                    <li><a href="category-2.html">Category 2</a></li>
                                    <li><a href="grid-listing.html">Grid Listing</a></li>
                                    <li><a href="grid-listing-2.html">Grid Listing 2</a></li>
                                    <li><a href="listing.html">Ad Listing</a></li>
                                    <li><a href="listing2.html">Ad Listing 2</a></li>
                                    <li><a href="listing-leftsidebar.html">Ad Listing Sidebar</a></li>
                                    <li><a href="single-ad.html">Single Ad</a></li>
                                    <li><a href="single-ad2.html">Single Ad 2</a></li>
                                    <li class="dropdown">
                                        <a href="#">Post Ad<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="post-ad.html">Post Ad 1</a></li>
                                            <li><a href="post-ad2.html">Post Ad 2</a></li>
                                            <li><a href="post-ad3.html">Post Ad 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html"> blog Listing</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="user-dashboard.html">Dashboard</a>
                                <ul>
                                    <li><a href="user-dashboard.html"> Dashboard</a></li>
                                    <li><a href="user-dashboard2.html"> Dashboard Style 2</a></li>
                                    <li><a href="user-active-ads.html">Active ads</a></li>
                                    <li><a href="user-archive.html">archive Ads</a></li>
                                    <li><a href="user-edit-profile.html">Edit Profile</a></li>
                                    <li><a href="user-pending-ads.html">Pending Ads</a></li>
                                    <li><a href="user-followers.html">USer Followers</a></li>
                                    <li><a href="user-delete-account.html">Delete Account</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area-end -->
<!-- LOGIN MODEL  -->
<div class="modal fade login-model" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="login-logo">
                <h2>Ingresar</h2>
            </div>
            <div class="login-box-inner">
                <form method="post" id="login">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" type="text" data-validation="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" data-validation="length" data-validation-length="min8" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="remember-me-wrapper">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="checkbox-nice">
                                    <input type="checkbox" class="remember-me" checked="checked"/>
                                    <label>
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                            <a href="" class="login-forget-link col-xs-6">
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
<!-- REGISTERATION MODEL  -->
<div class="modal fade register-model" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
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
                               data-validation="length" data-validation-length="min8"  placeholder="Contraseña">
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
