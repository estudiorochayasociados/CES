<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
//Clases
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$promociones = new Clases\Promociones();
$imagenes = new Clases\Imagenes();
$usuarios = new Clases\Usuarios();
$categorias = new Clases\Categorias();
//
$template->set("title", "CES | Inicio");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();
//
$categorias->set("area", "rubros");
$categorias_data = $categorias->listForArea('', '');
$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : '0';
$categoria = isset($_GET["categoria"]) ? $_GET["categoria"] : '';
$titulo = isset($_GET["titulo"]) ? $_GET["titulo"] : '';

$cantidad = 9;

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

//Mostrar-------------------------------------

$filter = array("estado=1", "activo=1");

if ($categoria != '') {
    array_push($filter, " categoria='$categoria' ");
}

if ($titulo != '') {
    $titulo_espacios = strpos($titulo, " ");
    if ($titulo_espacios) {
        $filter_title = array();
        $titulo_explode = explode(" ", $titulo);
        foreach ($titulo_explode as $titulo_) {
            array_push($filter_title, "(titulo LIKE '%$titulo_%' || keywords LIKE '%$titulo_%' || detalle LIKE '%$titulo_%')");
        }
        $filter_title_implode = implode(" OR ", $filter_title);
        array_push($filter, "(" . $filter_title_implode . ")");
    } else {
        array_push($filter, "(titulo LIKE '%$titulo%' || keywords LIKE '%$titulo%' || detalle LIKE '%$titulo%')");
    }
}
$promociones_data = $promociones->listWithOps($filter, "", $cantidad * $pagina . ',' . $cantidad);

$numeroPaginas = $promociones->paginador($filter, $cantidad);
//------------------------------
?>
<body>
<div class="page">
    <?php $template->themeNav(); ?>
    <section class="ad-breadcrumb parallex">
        <div class="container page-banner">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h1>Promociones</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="papular-post light-blue">
        <div class="container">
            <div class="widget">
                <div class="widget-heading"><span class="title"> Buscar promociones </span></div>
                <form class="form-inline" method="get" id="buscar">
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <div class="form-group">
                            <input type="text" class="form-control" name="titulo"
                                   value="<?= isset($titulo) ? $titulo : ''; ?>"> <i
                                    class="icon-magnifying-glass"></i>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <div class="form-group">
                            <select class="select-category form-control" name="categoria">
                                <option label="Elegir una categoría"></option>
                                <?php
                                if (@count($categorias_data) > 0) {
                                    foreach ($categorias_data as $cat) {
                                        ?>
                                        <option value="<?= $cat['cod']; ?>" <?php if ($cat["cod"] == $categoria) {
                                            echo "selected";
                                        } ?>><?= ucfirst($cat['titulo']); ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding">
                        <div class="form-group form-action">
                            <button type="submit" class="btn btn-default btn-search-submit"><span
                                        class="fa fa-search"></span>Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <?php
                    if (@count($promociones_data) > 0) {
                        foreach ($promociones_data as $promos) {
                            $imagenes->set('cod', $promos['cod']);
                            $img = $imagenes->view();
                            $fechaI = explode("-", $promos['inicio']);
                            $fechaF = explode("-", $promos['fin']);
                            $usuarios->set("cod", $promos['usuario']);
                            $usuario_data = $usuarios->view();
                            ?>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="papular-reviews">
                                    <a href="<?= URL . '/promocion/' . $funciones->normalizar_link($promos["titulo"]) . '/' . $promos['cod'] ?>">
                                        <div class="image"
                                             style="height:200px;background:url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;">

                                        </div>
                                        <div class="content">
                                            <h4> <?= ucfirst(substr($promos['titulo'], 0, 25)); ?> </h4>
                                            <h6> <?= ucfirst($usuario_data['titulo']) ?></h6>
                                            <!--  <i class="fa fa-calendar"></i> <?= $fechaI[2] . '/' . $fechaI[1] . '/' . $fechaI[0] ?> -  <?= $fechaF[2] . '/' . $fechaF[1] . '/' . $fechaF[0] ?>
-->
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="black" style="text-align: center;">
                            <h1>No hay promociones para mostrar</h1>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="clearfix"></div>
                </div>
                <?php
                if ($numeroPaginas > 1): ?>
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
    <?php $template->themeEnd(); ?>
</div>
</body>

</html>
