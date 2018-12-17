<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$novedades = new Clases\Novedades();
$imagenes = new Clases\Imagenes();
$template->set("title", "CES | Inicio");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();
//
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '0';
$novedades->set("cod",$cod);
$novedad_data=$novedades->view();
$imagenes->set("cod",$cod);
$img = $imagenes->view();
$fecha = explode("-", $novedad_data['fecha']);

?>
<body>
<div class="page">
    <?php $template->themeNav(); ?>
    <section class="featured-ads">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 nopadding">
                    <div class="blog-post">
                        <div class="post-img">
                            <img src="<?=URL .'/'.$img['ruta']?>" alt="<?=ucfirst($novedad_data['titulo']);?>" class="img-responsive">
                        </div>
                        <div class="blog-single">
                            <div class="post-info">
                                <a href=""> <i class="fa fa-calendar-o"></i> <?= $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0] ?> </a>
                            </div>
                            <h3 class="post-title">
                                <?= ucfirst($novedad_data['titulo']);?>
                            </h3>
                            <p>
                                <?= ucfirst($novedad_data['desarrollo']);?>
                            </p>
                            <div class="tagcloud">
                                <i class="fa fa-tags"></i>
                                <a href="#">#food</a>
                                <a href="#">#gedgets</a>
                                <a href="#">#news</a>
                                <a href="#">#fair</a>
                                <a href="#">#politics</a>
                                <a href="#">#technology</a>
                            </div>
                            <div class="share-links">
                                <a href="#" class="facebook-share"><span class="fa fa-facebook-f"></span> Facebook</a>
                                <a href="#" class="twitter-share"><span class="fa fa-twitter"></span> Twitter</a>
                                <a href="#" class="instagram-share"><span class="fa fa-instagram"></span> Instagram</a>
                                <a href="#" class="pinterest-share"><span class="fa fa-pinterest-p"></span>
                                    Pinterest</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'assets/inc/novedades/side.inc.php'; ?>
            </div>
        </div>
    </section>
    <?php
    $template->themeEnd();
    ?>
</div>
</body>
</html>
