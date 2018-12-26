<?php
$promociones_t = new Clases\Promociones();
$imagenes_t = new Clases\Imagenes();
$funciones_t = new Clases\PublicFunction();
if (isset($_GET["borrar"])) {
    $cod = isset($_GET["borrar"]) ? $_GET["borrar"] : '';
    $promociones_t->set("cod", $cod);
    $imagenes_t->set("cod", $cod);
    $promociones_t->delete();
    $imagenes_t->deleteAll();
    $funciones_t->headerMove(URL . "/perfil/promociones-terminadas");
}
?>

<section class="light-blue ad-listing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="all-ads-list-box2">
                    <?php
                    $promociones_t->set("usuario", $_SESSION['usuarios']['cod']);
                    $promociones_t->set("estado", 0);
                    $promociones = $promociones_t->listWithOpsPerfil('', '10');
                    if (count($promociones) > 0) {
                        foreach ($promociones as $promos) {
                            $imagenes_t->set("cod", $promos['cod']);
                            $img = $imagenes_t->view();
                            $fechaI = explode("-", $promos['inicio']);
                            $fechaF = explode("-", $promos['fin']);
                            ?>
                            <div class="ad-box ad-box-2 col-md-12">
                                <div class="col-md-4 col-sm-3 col-xs-12 nopadding">
                                    <a href="<?= URL . '/promocion/' . $promos['cod'] ?>">
                                        <div class="comp-logo"
                                             style="height:400px;background:url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12" style="min-height: 400px;position:relative;">
                                    <div class="ad-box-2-detail">
                                        <div class="ad-title-box">
                                            <div class="ad-title"><a href="<?= URL . '/promocion/' . $promos['cod'] ?>"> <?= ucfirst($promos['titulo']) ?> </a>
                                            </div>
                                            <div class="ad-title-meta">
                                        <span>
                                       <i class="fa fa-calendar"></i><?= $fechaI[2] . '/' . $fechaI[1] . '/' . $fechaI[0] ?> -  <?= $fechaF[2] . '/' . $fechaF[1] . '/' . $fechaF[0] ?>
                                        </span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="ad-desc">
                                            <p><?= substr($promos['detalle'], 0, 300); ?>...</p>
                                        </div>
                                        <div class="ad-bottom-area" style="position:absolute;bottom:10px;width: 90%">
                                    <span>
                                        <?php
                                        if ($promos['keywords'] == '') {
                                            ?>
                                            <?php
                                        } else {
                                            $tags = explode(",", $promos['keywords']);
                                            ?>
                                            <i class="fa fa-tags"></i>
                                            <?php
                                            foreach ($tags as $t) {
                                                ?>
                                                <a>#<?= $t ?></a>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                        }
                                        ?>

                                    </span>
                                            <!--<a href="<?= URL . '/promocion/' . $promos['cod'] ?>"
                                               class="btn btn-default pull-right"> Ver detalle <i
                                                        class="fa fa-angle-double-right"></i> </a>-->
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                        <i class="fa fa-list-ul"></i>
                                    </button>
                                    <div class="dropdown-menu edit-btns btn-crud-promos-general">
                                        <a class="dropdown-item" href="<?= URL . '/perfil/promociones-terminadas&borrar=' . $promos['cod'] ?>">
                                 <span class="btn btn-danger btn-crud-promos">
                                 <i class="fa fa-close"></i>
                                 Borrar
                                 </span>
                                        </a>
                                    </div>
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
                </div>
            </div>
        </div>
    </div>
</section>