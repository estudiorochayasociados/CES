<?php
$imagenesPerfil = new Clases\Imagenes();
$promociones = new Clases\Promociones();
$galerias = new Clases\Galerias();
$categorias = new Clases\Categorias();
?>
<section class="ad-listing-single">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="detail-titile light-blue">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9">
                            <div class="ad-name pl-30">
                                <h3 class=""> <?= ucfirst($_SESSION["usuarios"]['titulo']) ?> </h3>
                                <?php
                                if ($_SESSION["usuarios"]['direccion'] == '') {
                                    ?>
                                    <?php
                                } else {
                                    ?>
                                    <div class="detail-location"><i
                                                class="fa fa-map-marker"></i> <?= $_SESSION["usuarios"]['direccion']; ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 ">
                        <div class="slick-gallery-slideshow">
                            <div class="slider gallery-slideshow gallery-slideshow-not-tab">
                                <?php
                                $galerias->set("usuario", $_SESSION["usuarios"]['cod']);
                                $gal = $galerias->view_perfil();
                                $imagenesPerfil->set("cod", $gal['cod']);
                                $galerias_perfil = $imagenesPerfil->listForProduct();
                                if (count($galerias_perfil) > 0) {
                                    foreach ($galerias_perfil as $galeria) {
                                        ?>
                                        <div>
                                            <div class="image" style="height:400px;background:url(<?= URL . '/' . $galeria['ruta'] ?>) no-repeat center center/cover;">
                                            </div>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <div>
                                        <div class="image"><img src="<?= URL . '/assets/archivos/img/galeria_sin.jpg' ?>"
                                            /></div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="slider gallery-nav gallery-nav-not-tab">
                                <?php
                                $galerias->set("usuario", $_SESSION["usuarios"]['cod']);
                                $gal = $galerias->view_perfil();
                                $imagenesPerfil->set("cod", $gal['cod']);
                                $galerias_perfil = $imagenesPerfil->listForProduct();
                                if (count($galerias_perfil) > 0) {
                                    foreach ($galerias_perfil as $galeria) {
                                        ?>
                                        <div>
                                            <div class="image"><img src="<?= URL . '/' . $galeria['ruta'] ?>" alt="<?= $_SESSION["usuarios"]['titulo']; ?>"/></div>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <!--
                                        <div>
                                            <div class="image"><img src="<?= URL ?>/assets/images/post-images/camera/1.jpg"  /></div>
                                        </div>-->
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ad-detail">
                            <div class="ad-detail-title">
                                <h3><i class=" icon-layers"></i> Información</h3>
                            </div>
                            <?php
                            $imagenesPerfil->set("cod", $_SESSION["usuarios"]['cod']);
                            $img = $imagenesPerfil->view();
                            ?>
                            <div style="height:340px;background:url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/100%;"></div>
                            <div class="ad-detail-desc light-blue pb-40 pt-20">
                                <ul>
                                    <li>
                                        <span class="pull-left">Email</span>
                                        <span class="pull-right"><?= $_SESSION["usuarios"]['email']; ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">Teléfono</span>
                                        <span class="pull-right"><?= $_SESSION["usuarios"]['telefono']; ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">Dirección</span>
                                        <span class="pull-right"><?= $_SESSION["usuarios"]['direccion'] . ', ' . $_SESSION["usuarios"]['localidad']; ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">Rubro</span>
                                        <?php
                                        $categorias->set("cod", $_SESSION["usuarios"]['categoria']);
                                        $cat = $categorias->view();
                                        ?>
                                        <span class="pull-right"><?= ucfirst($cat['titulo']); ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left"></span>
                                    </li>
                                </ul>
                                <ul class="social-network social-circle onwhite" style="margin-top: 10px;">
                                    <ul class="social-icons icon-circle list-unstyled list-inline">
                                        <?php if($_SESSION["usuarios"]['facebook'] != '') { echo '<li><a href="'.$_SESSION["usuarios"]['facebook'].'"><i class="fa fa-facebook"></i></a></li>'; } ?>
                                        <?php if($_SESSION["usuarios"]['twitter'] != '') { echo '<li><a href="'.$_SESSION["usuarios"]['twitter'].'"><i class="fa fa-instagram"></i></a></li>'; } ?>
                                        <?php if($_SESSION["usuarios"]['instagram'] != '') { echo '<li><a href="'.$_SESSION["usuarios"]['instagram'].'"><i class="fa fa-twitter"></i></a></li>'; } ?>
                                    </ul>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-sm-12">
                        <div class="heading-inner">
                            <p class="title">Descripción del comercio</p>
                        </div>
                        <p>
                            <?= ucfirst($_SESSION["usuarios"]['descripcion']); ?>
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <aside>
                            <div class="widget light-blue">
                                <div class="widget-heading">
                                    <span class="title">Promociones activas</span>
                                </div>
                                <ul class="related-post">
                                    <?php
                                    $promociones->set("usuario", $_SESSION["usuarios"]['cod']);
                                    $promociones->set("estado", 1);
                                    $promos = $promociones->listWithOpsPerfil('', '3');
                                    foreach ($promos as $p) {
                                        $imagenesPerfil->set("cod", $p['cod']);
                                        $img_promos = $imagenesPerfil->view();
                                        $fechaI = explode("-", $p['inicio']);
                                        $fechaF = explode("-", $p['fin']);
                                        $categorias->set("cod", $_SESSION["usuarios"]['categoria']);
                                        $cat = $categorias->view();
                                        ?>
                                        <li>
                                            <img src="<?= URL . '/' . $img_promos['ruta'] ?>" alt="<?= $p['titulo']; ?>"
                                                 class="img-responsive">
                                            <a href="<?= URL . '/promocion/' . $p['cod'] ?>"><?= ucfirst(substr($p['titulo'], 0, 20)); ?> </a>
                                            <span><i class="fa fa-folder-open-o"></i> <?= ucfirst($cat['titulo']) ?></span>
                                            <span><i class="fa fa-calendar"></i><?= $fechaI[2] . '/' . $fechaI[1] . '/' . $fechaI[0] ?> -  <?= $fechaF[2] . '/' . $fechaF[1] . '/' . $fechaF[0] ?>
                                                </span>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
