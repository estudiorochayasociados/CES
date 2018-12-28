<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$template->set("title", "CES | ERROR");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();
?>
<body>
<div class="page">
    <?php $template->themeNav(); ?>
    <section class=" text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <img src="<?= URL ?>/assets/images/404.png" alt="error" class="img-responsive center-block">
                    <p>Página no enctrada</p>
                    <a href="<?= URL ?>/index" class="btn btn-default text-center"> Volver al inicio </a>
                </div>
            </div>
        </div>
    </section>
    <?php $template->themeEnd(); ?>
</div>
</body>
</html>

