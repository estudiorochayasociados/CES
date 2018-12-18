<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$promociones = new Clases\Promociones();
$imagenes = new Clases\Imagenes();
$usuarios = new Clases\Usuarios();
$categorias = new Clases\Categorias();
$template->set("title", "CES | Inicio");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();
$categorias->set("area", "rubros");
$categorias_data = $categorias->listForArea('');
$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : '0';
$categoria = isset($_GET["categoria"]) ? $_GET["categoria"] : '0';

$cantidad = 9;

if ($pagina > 0) {
    $pagina = $pagina - 1;
}

if(@count($_GET)>1){
    $anidador = "&";
}else{
    $anidador = "?";
}

if(isset($_GET['pagina'])):
    $url = $funciones->eliminar_get(CANONICAL, 'pagina');
else:
    $url = CANONICAL;
endif;

$promociones_data = $promociones->listWithOps("","",$cantidad*$pagina.','.$cantidad);
$numeroPaginas = $promociones->paginador("",$cantidad);
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
                <div class="col-sm-6 col-md-6">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?=URL?>/index">Inicio</a></li>
                        <li class="active">Promociones</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="papular-post light-blue">
        <div class="container"><div class="widget">
                <div class="widget-heading"><span class="title"> Buscar promociones </span></div>
                <form class="form-inline">
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <div class="form-group">
                            <input type="text" class="form-control" name="keyword" value=""> <i class="icon-magnifying-glass"></i>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <div class="form-group">
                            <select class="select-category form-control">
                                <option label="Elegir una categoría"></option>
                                <?php
                                foreach ($categorias_data as $cat) {
                                    ?>
                                    <option value="<?= $cat['cod']; ?>"><?= ucfirst($cat['titulo']); ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding">
                        <div class="form-group form-action">
                            <button type="button" class="btn btn-default btn-search-submit"><span class="fa fa-search"></span>Buscar</button>
                        </div>
                    </div>
                </form>
            </div></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <?php
                    foreach ($promociones_data as $promos){
                        $imagenes->set('cod',$promos['cod']);
                        $img = $imagenes->view();
                        $fechaI = explode("-", $promos['inicio']);
                        $fechaF = explode("-", $promos['fin']);
                        ?>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="papular-reviews">
                                <a href="<?= URL . '/promocion/' . $promos['cod'] ?>">
                                    <div class="image" style="height:200px;background:url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;" >

                                    </div>
                                    <div class="content" >
                                        <h4 > <?= ucfirst(substr($promos['titulo'],0,25)); ?> </h4>
                                      <!--  <i class="fa fa-calendar"></i> <?= $fechaI[2] . '/' . $fechaI[1] . '/' . $fechaI[0] ?> -  <?= $fechaF[2] . '/' . $fechaF[1] . '/' . $fechaF[0] ?>
-->
                                    </div>

                                </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="clearfix"></div>
                </div>
                <?php if($numeroPaginas > 1): ?>
                    <div class="col-xs-12">
                        <div class="pagination mb-60">
                            <ul class="pagination text-center">
                                <?php if(($pagina+1) > 1): ?>
                                    <li><a href="<?=$url?><?=$anidador?>pagina=<?=$pagina?>"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $numeroPaginas; $i++): ?>
                                    <li class="<?php if ($i==$pagina+1) {echo "active"; }?>"><a href="<?=$url?><?=$anidador?>pagina=<?=$i?>"><?=$i?></a></li>
                                <?php endfor; ?>

                                <?php if(($pagina+2) <= $numeroPaginas): ?>
                                    <li><a href="<?=$url?><?=$anidador?>pagina=<?=($pagina+2)?>"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
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
