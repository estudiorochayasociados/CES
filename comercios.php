<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$usuarios = new Clases\Usuarios();
$usuarios->set("estado",1);
$imagenes = new Clases\Imagenes();
$categorias = new Clases\Categorias();
$template->set("title", "CES | Inicio");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();

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

$usuarios_data = $usuarios->listWithOps("","",$cantidad*$pagina.','.$cantidad);
$numeroPaginas = $usuarios->paginador("",$cantidad);
?>
<body>
<div class="page">
    <?php $template->themeNav(); ?>
    <section class="ad-breadcrumb parallex">
        <div class="container page-banner">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h1>Comercios</h1>
                </div>
                <div class="col-sm-6 col-md-6">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?= URL ?>/index">Inicio</a></li>
                        <li class="active">Comercios</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="light-blue ad-listing">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="filters clearfix">
                        <div class="col-md-2 col-xs-12 col-sm-3 nopadding">
                            <p>Buscar: </p>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-3 nopadding">
                            <div class="form-group">
                                <select class="select-general form-control">
                                    <option label="Select Option"></option>
                                    <option value="0">Highest price</option>
                                    <option value="1"> 	Date</option>
                                    <option value="2"> Newest to oldest</option>
                                    <option value="3"> Oldest To New</option>
                                    <option value="4"> Alphabatically</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 col-md-push-4">
                    <div class="all-ads-list-box2">
                        <?php
                        foreach ($usuarios_data as $user) {
                            $imagenes->set("cod", $user['cod']);
                            $img = $imagenes->view_list();
                            ?>
                            <div class="ad-box ad-box-2" style="min-height: 200px;position:relative;">
                                <div class="col-md-4 col-sm-3 col-xs-12 nopadding">
                                    <div class="comp-logo" >
                                      <a href="<?= URL .'/comercio/'.$user['cod']?>"><img src="<?= URL . '/' . $img['ruta'] ?>" class="img-responsive"
                                                        alt="<?= ucfirst($user['titulo']);?>"> </a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    <div class="ad-box-2-detail">
                                        <div class="ad-title-box">
                                            <div class="ad-title"><a href="<?= URL .'/comercio/'.$user['cod']?>"> <?= ucfirst($user['titulo']) ?> </a>
                                            </div>
                                            <div class="ad-title-meta">
                                       <span>
                                           <?php
                                           if($user['direccion']!=''&&$user['localidad']!=''){
                                               ?>
                                             <i class="fa fa-map-marker"></i> <?= ucfirst($user['direccion']) . ', ' . $user['localidad']  ?>
                                           <?php
                                           }
                                           ?>
                                       </span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="ad-desc">
                                            <p><?= substr(ucfirst($user['descripcion']), 0, 150) ?></p>
                                        </div>
                                        <div class="ad-bottom-area" >
                                            <?php
                                            if ($user['categoria'] != '') {
                                                $categorias->set("cod",$user['categoria']);
                                                $cat = $categorias->view();
                                                ?>
                                                <span>
                                    <i class="fa fa-tags"></i> Rubro:<a>#<?= ucfirst($cat['titulo']) ?></a></span>
                                                <?php
                                            }
                                            ?>

                                            <a href="<?= URL .'/comercio/'.$user['cod']?>" class="btn btn-default pull-right"> Ver perfil <i
                                                        class="fa fa-angle-double-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 col-md-pull-8">
                    <aside>
                        <div class="widget">
                            <div class="widget-heading"><span class="title"> Rubros </span></div>
                            <ul class="categories-module nobullet">
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            <a href=""> Animal </a>
                                        </label>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </aside>
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