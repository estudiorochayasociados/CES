<?php
$imagenesPerfil = new Clases\Imagenes();
$promociones = new Clases\Promociones();
$galerias = new Clases\Galerias();
?>
<section class="ad-listing-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="detail-titile light-blue">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9">
                            <div class="cat-icon">
                                <i class="flaticon-computer"></i>
                            </div>
                            <div class="ad-name">
                                <h3 class=""> <?= $_SESSION['usuarios']['titulo']; ?> </h3>
                                <?php
                                if ($_SESSION['usuarios']['direccion'] == '') {
                                    ?>
                                    <?php
                                } else {
                                    ?>
                                    <div class="detail-location"><i
                                                class="fa fa-map-marker"></i> <?= $_SESSION['usuarios']['direccion']; ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 nopaddingright">
                        <div class="slick-gallery-slideshow">
                            <div class="slider gallery-slideshow gallery-slideshow-not-tab">
                                <?php
                                $galerias->set("usuario",$_SESSION['usuarios']['cod']);
                                $gal = $galerias->view_perfil();
                                $imagenesPerfil->set("cod", $gal['cod']);
                                $galerias_perfil=$imagenesPerfil->listForProduct();
                                if (count($galerias_perfil)>0) {

                                    foreach ($galerias_perfil as $galeria) {
                                        ?>
                                        <div>
                                            <div class="image"><img
                                                        src="<?= URL .'/'.$galeria['ruta'] ?>"
                                                        alt="image"/></div>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <div>
                                        <div class="image"><img src="<?= URL .'/assets/archivos/img/galeria_sin.jpg' ?>"
                                                                alt="gg"/></div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="slider gallery-nav gallery-nav-not-tab">
                                <?php
                                $galerias->set("usuario",$_SESSION['usuarios']['cod']);
                                $gal = $galerias->view_perfil();
                                $imagenesPerfil->set("cod", $gal['cod']);
                                $galerias_perfil=$imagenesPerfil->listForProduct();
                                if (count($galerias_perfil)>0) {
                                    foreach ($galerias_perfil as $galeria) {
                                        ?>
                                        <div>
                                            <div class="image"><img
                                                        src="<?= URL .'/'.$galeria['ruta'] ?>"
                                                        alt="image"/></div>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <div>
                                        <div class="image"><img src="<?= URL .'/assets/archivos/img/galeria_sin.jpg' ?>"
                                                                alt="image"/></div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 nopaddingleft">
                        <div class="ad-detail">
                            <div class="ad-detail-title">
                                <h3><i class=" icon-layers"></i> Información</h3>
                            </div>
                            <?php
                            $imagenesPerfil->set("cod", $_SESSION['usuarios']['cod']);
                            $img = $imagenesPerfil->view();
                                ?>
                                <div style="height:340px;background:url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/contain;"></div>


                            <div class="ad-detail-desc light-blue ">
                                <ul>
                                    <li>
                                        <span class="pull-left">Email</span>
                                        <span class="pull-right"><?= $_SESSION['usuarios']['email']; ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">Teléfono</span>
                                        <span class="pull-right"><?= $_SESSION['usuarios']['telefono']; ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">Dirección</span>
                                        <span class="pull-right"><?= $_SESSION['usuarios']['direccion'] . ', ' . $_SESSION['usuarios']['localidad']; ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">categoria</span>
                                        <span class="pull-right"><?= $_SESSION['usuarios']['categoria']; ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left"></span>
                                    </li>
                                </ul>

                            </div>
                            <ul class="social-network social-circle onwhite" style="margin-top: 10px;">
                                <ul class="social-icons icon-circle list-unstyled list-inline">

                                    <li><a href="<?= $_SESSION['usuarios']['facebook'] ?>"><i
                                                    class="fa fa-facebook"></i></a></li>

                                    <li><a href="<?= $_SESSION['usuarios']['twitter'] ?>"><i
                                                    class="fa fa-instagram"></i></a></li>

                                    <li><a href="<?= $_SESSION['usuarios']['instagram'] ?>"><i
                                                    class="fa fa-twitter"></i></a></li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-sm-12">
                        <div class="heading-inner">
                            <p class="title">Description</p>
                        </div>
                        <p>
                            <?= ucfirst($_SESSION['usuarios']['descripcion']); ?>
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
                                    $promociones->set("usuario", $_SESSION['usuarios']['cod']);
                                    $promociones->set("estado", 1);
                                    $promos = $promociones->listWithOpsPerfil('', '3');
                                    foreach ($promos as $p) {
                                        $imagenesPerfil->set("cod", $p['cod']);
                                        $img_promos = $imagenesPerfil->view();
                                        $fechaI = explode("-", $p['inicio']);
                                        $fechaF = explode("-", $p['fin']);
                                        ?>
                                        <li>
                                            <img src="<?= URL . '/' . $img_promos['ruta'] ?>" alt="post image"
                                                 class="img-responsive">
                                            <a href="#"><?= ucfirst(substr($p['titulo'],0,40));?> </a>
                                            <span><i class="fa fa-folder-open-o"></i> <?= ucfirst($p['categoria'])?></span>
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
