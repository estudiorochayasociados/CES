<?php
require_once "../../Config/Autoload.php";
Config\Autoload::runApi();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$usuario = new Clases\Usuarios();
if (isset($_POST['agregar'])) {
    $usuario->set("titulo", $funciones->antihack_mysqli(isset($_POST["titulo"]) ? $_POST["titulo"] : ''));
    $usuario->set("cod", $funciones->antihack_mysqli(isset($_POST["cod"]) ? $_POST["cod"] : ''));
    $usuario->set("email", $funciones->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : ''));
    $usuario->set("password", $funciones->antihack_mysqli(isset($_POST["password"]) ? $_POST["password"] : ''));
    $usuario->set("telefono", $funciones->antihack_mysqli(isset($_POST["telefono"]) ? $_POST["telefono"] : ''));
    if ($usuario->add()) {
        $usuario->login();
        //$funciones->headerMove(URL .'/profile.php?usuario='.$funciones->normalizar_link($_SESSION['usuarios']['titulo']).'&cod='.$funciones->normalizar_link($_SESSION['usuarios']['cod']));
    } else{
        echo "<div class='col-md-12'><div class='alert alert-danger'>Este correo ya existe como usuario. </div></div>";
    }
}
?>