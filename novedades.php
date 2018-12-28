<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$categorias = new Clases\Categorias();
$novedades = new Clases\Novedades();
$imagenes = new Clases\Imagenes();
$template->set("title", "CES | Novedades");
$template->set("description", "Novedades CES San Francisco");
$template->set("keywords", "Novedades,CES");
$template->set("favicon", LOGO);
$template->themeInit();
//
$categorias->set("area", "novedades");
$categorias_data = $categorias->listForArea('', '');

$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : '0';
$categoria = isset($_GET["categoria"]) ? $_GET["categoria"] : '0';

$cantidad = 8;

if ($pagina > 0) {
    $pagina = $pagina - 1;
}

if (@count($_GET) > 1) {
    $anidador = "&";
} else {
    $anidador = "?";
}

if (isset($_GET['pagina'])):
    $url = $funciones->eliminar_get(CANONICAL, 'pagina');
else:
    $url = CANONICAL;
endif;

$novedades_data = $novedades->listWithOps("", "", $cantidad * $pagina . ',' . $cantidad);
$numeroPaginas = $novedades->paginador("", $cantidad);
//
?>
<body>
<div class="page">
    <?php $template->themeNav(); ?>
    <section class="ad-breadcrumb parallex">
        <div class="container page-banner">
            <div class="row">
                <div class="col-sm-4 col-md-6">
                    <h1>Novedades</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-ads">
        <div class="container">
            <div class="row flex_wrap">
                <?php
                if (@count($novedades_data) > 0) {
                    foreach ($novedades_data as $nov) {
                        $imagenes->set("cod", $nov['cod']);
                        $img = $imagenes->view();
                        $fecha = explode("-", $nov['fecha']);
                        ?>
                        <div class="col-md-6">
                            <div class="blog-post">
                                <a href="<?= URL . '/novedad/' . $funciones->normalizar_link($nov["titulo"]) . '/' . $nov['cod'] ?>">
                                    <div class="post-img"
                                         style="  height:300px; background:url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;">
                                    </div>
                                </a>
                                <div class="post-info">
                                    <a>
                                        <i class="fa fa-calendar-o"></i> <?= $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0] ?>
                                    </a>
                                    <h3 class="titulo-blog"><a
                                                href="<?= URL . '/novedad/' . $funciones->normalizar_link($nov["titulo"]) . '/' . $nov['cod'] ?>"> <?= ucfirst(substr($nov['titulo'], 0, 120)); ?> </a>
                                    </h3>
                                    <?= ucfirst(substr(strip_tags($nov['desarrollo']), 0, 250)); ?>...
                                </div>

                                <div class="blog-meta">
                                    <div class="share-icons">
                                        <ul>
                                            <li>
                                                <a href=https://www.facebook.com/sharer/sharer.php?u="<?= URL . '/novedad/' . $funciones->normalizar_link($nov["titulo"]) . '/' . $nov['cod'] ?>"><i
                                                            class="fa fa-facebook-square"></i></a></li>
                                            <li>
                                                <a href="https://plus.google.com/share?url=<?= URL . '/novedad/' . $funciones->normalizar_link($nov["titulo"]) . '/' . $nov['cod'] ?>"><i
                                                            class="fa fa-google-plus-square"></i></a></li>
                                            <li>
                                                <a href="https://pinterest.com/pin/create/button/?url=<?= URL . '/novedad/' . $funciones->normalizar_link($nov["titulo"]) . '/' . $nov['cod'] ?>&media=&description="><i
                                                            class="fa fa-pinterest-square"></i></a></li>
                                            <li>
                                                <a href="https://twitter.com/home?status=<?= URL . '/novedad/' . $funciones->normalizar_link($nov["titulo"]) . '/' . $nov['cod'] ?>"><i
                                                            class="fa fa-twitter-square"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="black" style="text-align: center;">
                        <h1>No hay novedades para mostrar</h1>
                    </div>
                    <?php
                }
                ?>
                <?php if ($numeroPaginas > 1): ?>
                    <div class="col-xs-12">
                        <div class="pagination mb-60">
                            <ul class="pagination text-center">
                                <?php if (($pagina + 1) > 1): ?>
                                    <li><a href="<?= $url ?><?= $anidador ?>pagina=<?= $pagina ?>"><i
                                                    class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $numeroPaginas; $i++): ?>
                                    <li class="<?php if ($i == $pagina + 1) {
                                        echo "active";
                                    } ?>"><a href="<?= $url ?><?= $anidador ?>pagina=<?= $i ?>"><?= $i ?></a></li>
                                <?php endfor; ?>

                                <?php if (($pagina + 2) <= $numeroPaginas): ?>
                                    <li><a href="<?= $url ?><?= $anidador ?>pagina=<?= ($pagina + 2) ?>"><i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <?php
    $template->themeEnd();
    ?>
</div>
</body>
</html>
