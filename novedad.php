<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$novedades = new Clases\Novedades();
$imagenes = new Clases\Imagenes();
//
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '0';
$novedades->set("cod", $cod);
$novedad_data = $novedades->view();
$imagenes->set("cod", $cod);
$img = $imagenes->view();
$fecha = explode("-", $novedad_data['fecha']);

$template->set("title", "CES | ".ucfirst($novedad_data['titulo']));
$template->set("description", ucfirst(substr($novedad_data['desarrollo'], 0, 120)));
$template->set("keywords", "Novedad");
$template->set("favicon", LOGO);
$template->themeInit();
?>
<body>
<div class="page">
    <?php $template->themeNav(); ?>
    <section class="ad-breadcrumb parallex">
        <div class="container page-banner">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h1>Novedad</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-ads">
        <div class="container">
            <div class="row">
                    <div class="blog-post">
                        <div class="blog-single">
                            <div class="post-info">
                                <a href=""> <i
                                            class="fa fa-calendar-o"></i> <?= $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0] ?>
                                </a>
                            </div>
                            <h3 class="post-title">
                                <?= ucfirst($novedad_data['titulo']); ?>
                            </h3>

                            <div class="post-img">
                                <img src="<?= URL . '/' . $img['ruta'] ?>" alt="<?= ucfirst($novedad_data['titulo']); ?>"
                                     class="img-responsive">
                            </div>

                            <p>
                                <?= ucfirst($novedad_data['desarrollo']); ?>
                            </p>
                            <label>Compartir en:</label>
                            <!-- AddToAny BEGIN -->
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_google_plus"></a>
                                <a class="a2a_button_pinterest"></a>
                                <a class="a2a_button_whatsapp"></a>
                                <a class="a2a_button_facebook_messenger"></a>
                            </div>
                            <br>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <?php
    $template->themeEnd();
    ?>
</div>
</body>
</html>
