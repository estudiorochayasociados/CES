<?php
require_once "../../Config/Autoload.php";
Config\Autoload::runApi();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$usuario = new Clases\Usuarios();
if (isset($_POST['agregar'])) {
    $usuario->set("email", $funciones->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : ''));
    $usuario->set("password", $funciones->antihack_mysqli(isset($_POST["password"]) ? $_POST["password"] : ''));
    if ($usuario->login()) {
        $usuario->login();
        //$funciones->headerMove(URL .'/perfil.php?usuario='.$funciones->normalizar_link($_SESSION['usuarios']['titulo']).'&cod='.$funciones->normalizar_link($_SESSION['usuarios']['cod']));
    } else{
        echo "<div class='col-md-12'><div class='alert alert-danger'>Email o contraseña incorrectos </div></div>";
    }
}
?>