<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$enviar = new Clases\Email();
$template->set("title", "CES | Inicio");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();

if(isset($_POST['enviar'])){
    $mensaje = 'Nuevo mensaje de contacto <br/>';
    $mensaje .= "Nombre: ".$_POST["nombre"]."<br/>";
    $mensaje .= "Email: ".$_POST["email"]."<br/>";
    $mensaje .= "Teléfono: ".$_POST["telefono"]."<br/>";
    $mensaje .= "Mensaje: ".$_POST["mensaje"]."<br/>";
    $asunto = ucfirst($_POST["asunto"]);
    $receptor = "joaquinestudiorocha@gmail.com";//EMAIL;
    $emisor = $_POST['email'];
    $enviar->emailEnviar($asunto,$receptor,$emisor,$mensaje);
}
?>
<body>
<div class="page">
    <?php $template->themeNav();?>
    <section class="ad-breadcrumb parallex">
        <div class="container page-banner">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h1>Contactanos</h1>
                </div>
                <div class="col-sm-6 col-md-6">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?=URL?>/inicio">Inicio</a></li>
                        <li class="active">Contacto</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div id="map-contact"></div>
    <section class="contact-us light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title black">
                            <h1>Contactanos</h1>
                            <p>Envíenos su mensaje.</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <form class="row" method="post" id="enviar">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Nombre <span class="required">*</span></label>
                                    <input placeholder="" data-validation="required" class="form-control" name="nombre" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email <span class="required">*</span></label>
                                    <input placeholder="" data-validation="email" class="form-control" name="email" type="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Teléfono <span class="required">*</span></label>
                                    <input placeholder="" data-validation="number" class="form-control" name="telefono" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Asunto <span class="required">*</span></label>
                                    <input placeholder="" data-validation="length" data-validation-length="10-40" name="asunto" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Mensaje <span class="required">*</span></label>
                                    <textarea cols="6" rows="8" placeholder="" name="mensaje" data-validation="length" data-validation-length="40-150" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <a href="" name="enviar" class="btn btn-default"> Enviar mensaje <i class="fa fa-angle-double-right"></i> </a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact_block">
                            <h4>Contact Information</h4>
                            <ul class="personal-info">
                                <li><i class="fa fa-map-marker"></i> Belgrano 1585 - San Francisco</li>
                                <li><i class="fa fa-envelope"></i> ces@ces-sanfco.com.ar</li>
                                <li><i class="fa fa-phone"></i> (03564) 420108 </li>
                                <li><i class="fa fa-clock-o"></i> Lunes - Viernes: 08:00 - 12:00, 15:30 - 19:30</li>
                            </ul>
                            <ul class="social-network social-circle">
                                <!--
                              <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                              -->
                                <!-- AddToAny BEGIN -->
                                <span class="compartir">Compartir en:</span>
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_google_plus"></a>
                                    <a class="a2a_button_whatsapp"></a>
                                    <a class="a2a_button_pinterest"></a>
                                    <a class="a2a_button_facebook_messenger"></a>
                                </div>
                                <script async src="https://static.addtoany.com/menu/page.js"></script>
                                <!-- AddToAny END -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $template->themeEnd(); ?>
</div>
</body>
</html>

