<?php
namespace config;

class autoload
{
    public static function runSitio()
    {
        session_start();
        //$_SESSION["carrito"] = isset($_SESSION["carrito"]) ? $_SESSION["carrito"] : '';
        define('URL', "http://".$_SERVER['HTTP_HOST']."/CES");
        define('CANONICAL', "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
        define('TITULO', "Pintureria Ariel");
        define('TELEFONO', "5555555");
        define('CIUDAD', "San Francisco");
        define('PROVINCIA', "Cordoba");
        define('EMAIL', "");
        define('PASS_EMAIL', "");
        define('SMTP_EMAIL', "");
        define('DIRECCION', "");
        define('LOGO', URL . "/assets/img/logo.png");
        define('APP_ID_FB', "");
        spl_autoload_register(
            function($clase)
            {
                $ruta = str_replace("\\", "/", $clase) . ".php";
                include_once $ruta;
            }
        );
    }

    public static function runApi()
    {
        session_start();
        //$_SESSION["carrito"] = isset($_SESSION["carrito"]) ? $_SESSION["carrito"] : '';
        define('URL', "http://".$_SERVER['HTTP_HOST']."/CES");
        define('CANONICAL', "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
        spl_autoload_register(
            function($clase)
            {
                $ruta = str_replace("\\", "/", $clase) . ".php";
                include_once "../../".$ruta;
            }
        );
    }

    public static function runAdmin()
    {
        session_start();
        define('URLSITE',"http://".$_SERVER['HTTP_HOST']."/CES/admin");
        define('URL', "http://".$_SERVER['HTTP_HOST']."/CES/admin");
        require_once "../Clases/Zebra_Image.php";
        spl_autoload_register(
            function ($clase)
            {
                $ruta = str_replace("\\", "/", $clase) . ".php";
                include_once "../" . $ruta;
            }
        );
    }
}
