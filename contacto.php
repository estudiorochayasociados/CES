<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$enviar = new Clases\Email();
$template->set("title", "CES | Contacto");
$template->set("description", "Contacto CES");
$template->set("keywords", "Contacto,CES");
$template->set("favicon", LOGO);
$template->themeInit();
?>
<body>
<div class="page">
    <?php $template->themeNav();?>
    <section class="ad-breadcrumb parallex ">
        <div class="container page-banner">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h1>Contactanos</h1>
                </div>
            </div>
        </div>
    </section>

    <!--<div id="map-contact"></div>-->

    <section  class="contact-us light-grey">
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
                        <?php
                        if(isset($_POST['enviar'])){
                        $mensaje = "Nuevo mensaje de contacto <br/>";
                        $mensaje .= "Nombre: ".$_POST["nombre"]."<br/>";
                        $mensaje .= "Email: ".$_POST["email"]."<br/>";
                        $mensaje .= "Teléfono: ".$_POST["telefono"]."<br/>";
                        $mensaje .= "Mensaje: ".$_POST["mensaje"]."<br/>";
                        $asunto = ucfirst($_POST["asunto"]);
                        $receptor = EMAIL;
                        $emisor = $_POST['email'];

                        $enviar->set("asunto", $asunto);
                        $enviar->set("receptor", $receptor);
                        $enviar->set("emisor", $emisor);
                        $enviar->set("mensaje", $mensaje);
                        $enviar->emailEnviar();
                            if ($enviar->emailEnviar()==1){
                                ?>
                                <script>
                                    $(document).ready(function () {
                                        $("#mensaje").html('<div class=\'alert alert-success\'> Enviado con éxito. </div>');
                                        $('#recoverOk').modal("show");
                                    });
                                </script>
                            <?php
                            }else{
                            ?>

                                <script>
                                    $(document).ready(function () {
                                        $("#mensaje").html('<div class=\'alert alert-danger\'> Ocurrió un error, pruebe nuevamente. </div>');
                                        $('#recoverOk').modal("show");
                                    });
                                </script>
                                <?php
                            }
                        }
                        ?>
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
                                <button type="submit" name="enviar" class="btn btn-default"> Enviar mensaje <i class="fa fa-angle-double-right"></i> </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact_block">
                            <h4>Información contacto</h4>
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
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <iframe class="mt-30 pt-20" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.4960945077437!2d-62.085600985277914!3d-31.42800678140017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95cb2818faf510ad%3A0xca5efdf25eaf3d8c!2sCentro+Empresarial+y+de+Servicios.!5e0!3m2!1ses!2sar!4v1545344618036" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $template->themeEnd(); ?>
</div>
<div class="modal fade " id="emailOk" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="login-logo">
                <h2>Contacto</h2>
            </div>
            <div class="login-box-inner">
                <div id="mensaje" >
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>

