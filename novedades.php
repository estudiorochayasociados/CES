<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$categorias = new Clases\Categorias();
$novedades = new Clases\Novedades();
$imagenes = new Clases\Imagenes();
$template->set("title", "CES | Inicio");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();
//
$categorias->set("area", "novedades");
$categorias_data = $categorias->listForArea('');

$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : '0';
$categoria = isset($_GET["categoria"]) ? $_GET["categoria"] : '0';

$cantidad = 1;

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

$novedades_data = $novedades->listWithOps("","",$cantidad*$pagina.','.$cantidad);
$numeroPaginas = $novedades->paginador("",$cantidad);
//
?>
<body>
<div class="page">
    <?php $template->themeNav(); ?>
    <section class="featured-ads">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 nopadding">
                    <?php
                    foreach ($novedades_data as $nov) {
                        $imagenes->set("cod", $nov['cod']);
                        $img = $imagenes->view();
                        $fecha = explode("-", $nov['fecha']);
                        ?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="blog-post">
                                <div class="post-img">
                                    <a href="<?= URL .'/novedad/'.$nov['cod']?>"> <img src="<?= URL . '/' . $img['ruta'] ?>"
                                                      alt="<?= ucfirst($nov['titulo']); ?>"
                                                      class="img-responsive"> </a>
                                </div>
                                <div class="post-info">
                                    <a> <i
                                                class="fa fa-calendar-o"></i> <?= $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0] ?>
                                    </a>
                                </div>
                                <h3 class="titulo-blog"><a href="<?= URL .'/novedad/'.$nov['cod']?>"> <?= ucfirst(substr($nov['titulo'], 0, 80)); ?> </a>
                                </h3>
                                <!--<p class="post-excerpt"> <?= ucfirst(substr($nov['desarrollo'], 0, 260)); ?></p>-->
                                <div class="blog-meta">
                                    <!-- <div class="blog-tags">
                                  <span>
                                  <i class="fa fa-tag"></i>  Tags:
                                  </span>
                                         <span>
                                  <a href=""> games </a>, <a href=""> play </a>,<a href=""> ranking </a>,<a href=""> design </a>
                                  </span>
                                     </div>-->
                                    <div class="share-icons">
                                        <ul>
                                            <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
                                            <li><a href=""><i class="fa fa-pinterest-square"></i></a></li>
                                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter-square"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
               <?php include 'assets/inc/novedades/side.inc.php'; ?>
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


    <?php
    $template->themeEnd();
    ?>
</div>
</body>
</html>
