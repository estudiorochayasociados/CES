<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();
$contenidos->set("cod", "Historia");
$historia = $contenidos->viewCod();
$contenidos->set("cod", "Comision Directiva");
$comision = $contenidos->viewCod();
$contenidos->set("cod", "Objetivos");
$objetivos = $contenidos->viewCod();
$template->set("title", "CES | Sobre nosotros");
$template->set("description", "Acerca del CES San Francisco");
$template->set("keywords", "CES");
$template->set("favicon", LOGO);
$template->themeInit();
?>
<body>
<div class="page ">
    <?php $template->themeNav(); ?>
    <section class="ad-breadcrumb parallex">
        <div class="container page-banner">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h1>Sobre nosotros</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="contenidos about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title black ">
                            <h1>Sobre nosotros</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <?= $historia['contenido']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contenidos benifts light-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title black ">
                            <h1>Comisión Directiva</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <p><?= $comision['contenido']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contenidos about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title black ">
                            <h1>Objetivos</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <?= $objetivos['contenido']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $template->themeEnd(); ?>
</div>
</body>
</html>
