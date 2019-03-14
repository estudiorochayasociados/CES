<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$promocion = new Clases\Promociones();
$usuario = new Clases\Usuarios();

$categorias = new Clases\Categorias();
$imagenes = new Clases\Imagenes();
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$promocion->set("cod", $cod);
$promo = $promocion->view();

$usuario->set('cod', $promo["usuario"]);
$user = $usuario->view();

$imagenes->set("cod", $promo['cod']);
$imagen = $imagenes->listForProduct();
$fechaI = explode("-", $promo['inicio']);
$fechaF = explode("-", $promo['fin']);
$template->set("title", "CES | " . ucfirst($promo['titulo']));
$template->set("description", ucfirst(substr(strip_tags($promo['descripcion']), 0, 250)));
$template->set("keywords", $promo['keywords']);
$template->set("favicon", LOGO);
$template->themeInit();
?>
<body>
<div class="page">
    <?php
    $template->themeNav();
    ?>
    <section class="ad-breadcrumb parallex">
        <div class="container page-banner">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h1>Promoción</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ad-listing-single single-listing-2 light-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="listing-2-title">
                                <h2><?= ucfirst($promo['titulo']); ?></h2>
                            </div>
                            <div class="listing-2-meta">
                                <ul>
                                    <li><i class="fa fa-user"></i> <a
                                                href="<?= URL . '/comercio/'.$funciones->normalizar_link($user['titulo']). '/' . $user['cod'] ?>"><?= $user['titulo'] ?></a>
                                    </li>
                                    <li><i class="fa fa-phone"></i> <?= $user['telefono']; ?></li>
                                    <li>
                                        <i class="fa fa-calendar"></i><?= $fechaI[2] . '/' . $fechaI[1] . '/' . $fechaI[0] ?>
                                        - <?= $fechaF[2] . '/' . $fechaF[1] . '/' . $fechaF[0] ?></li>

                                </ul>
                            </div>
                            <div class="heading-inner">
                                <p class="title light-blue">Descripción de la promoción</p>
                            </div>
                            <p>
                                <?= $promo['descripcion']; ?>
                            </p>
                            <!--
                            <div class="heading-inner">
                                <p class="title light-blue">Detalle</p>
                            </div>-->
                            <div>
                                <ul class="desc-points">
                                    <small><i class="fa fa-caret-right "></i> <?= $promo['detalle']; ?></small>

                                </ul>
                            </div>
                            <?php
                            foreach ($imagen as $img) {
                                ?>
                                <a href="<?= URL . '/' . $img['ruta'] ?>" data-lightbox="roadtrip">
                                    <div style="width: 49%;height:300px;display:inline-block;background:url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;"></div>
                                </a>
                                <?php
                            }
                            ?>
                            <span class="separator"></span>
                            <br>
                            <div class=" mt-10">
                                <!-- <label>Compartir en:</label>-->
                                <!-- AddToAny BEGIN -->
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_google_plus"></a>
                                    <a class="a2a_button_pinterest"></a>
                                    <a class="a2a_button_whatsapp"></a>
                                    <a class="a2a_button_facebook_messenger"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 ">
                             <div class="ad-detail">
                                <div class="ad-detail-title">
                                    <h3><i class=" icon-layers"></i> Comercio</h3>
                                </div>
                                <?php
                                $imagenes->set("cod", $user['cod']);
                                $img = $imagenes->view();
                                if($img!=false){
                                    ?>
                                    <img src="<?= URL . '/' . $img['ruta'] ?>" width="100%" />
                                    <?php
                                }
                                ?>
                                <div class="ad-detail-desc light-blue pb-40 pt-20 pl-0 pr-0">
                                    <ul>
                                        <li>
                                            <span class="pull-left">Email</span>
                                            <span class="pull-right"><?= $user['email']; ?></span>
                                        </li>
                                        <li>
                                            <span class="pull-left">Teléfono</span>
                                            <span class="pull-right"><?= $user['telefono']; ?></span>
                                        </li>
                                        <li>
                                            <span class="pull-left">Rubro</span>
                                            <?php
                                            $categorias->set("cod", $user['categoria']);
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
                                            <?php if($user['facebook'] != '') { echo '<li><a target="_blank" href="'.$user['facebook'].'"><i class="fa fa-facebook"></i></a></li>'; } ?>
                                            <?php if($user['twitter'] != '') { echo '<li><a target="_blank" href="'.$user['twitter'].'"><i class="fa fa-instagram"></i></a></li>'; } ?>
                                            <?php if($user['instagram'] != '') { echo '<li><a target="_blank" href="'.$user['instagram'].'"><i class="fa fa-twitter"></i></a></li>'; } ?>
                                        </ul>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $template->themeEnd();
    ?>
    <script type="text/javascript" src="js/simple-lightbox.min.js"></script>
    <script>
        $('.gallery-slideshow-not-tab').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            arrows: true,
            fade: true,
            asNavFor: '.gallery-nav-not-tab',
            adaptiveHeight: true,
        });
        $('.gallery-nav-not-tab').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            speed: 500,
            asNavFor: '.gallery-slideshow-not-tab',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            infinite: true,
            responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 5,
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                }
            }, {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                }
            }]
        });

        $(function () {
            var $gallery = $('.gallery a').simpleLightbox();

            $gallery.on('show.simplelightbox', function () {
                console.log('Requested for showing');
            })
                .on('shown.simplelightbox', function () {
                    console.log('Shown');
                })
                .on('close.simplelightbox', function () {
                    console.log('Requested for closing');
                })
                .on('closed.simplelightbox', function () {
                    console.log('Closed');
                })
                .on('change.simplelightbox', function () {
                    console.log('Requested for change');
                })
                .on('next.simplelightbox', function () {
                    console.log('Requested for next');
                })
                .on('prev.simplelightbox', function () {
                    console.log('Requested for prev');
                })
                .on('nextImageLoaded.simplelightbox', function () {
                    console.log('Next image loaded');
                })
                .on('prevImageLoaded.simplelightbox', function () {
                    console.log('Prev image loaded');
                })
                .on('changed.simplelightbox', function () {
                    console.log('Image changed');
                })
                .on('nextDone.simplelightbox', function () {
                    console.log('Image changed to next');
                })
                .on('prevDone.simplelightbox', function () {
                    console.log('Image changed to prev');
                })
                .on('error.simplelightbox', function (e) {
                    console.log('No image found, go to the next/prev');
                    console.log(e);
                });
        });
    </script>
</div>
</body>
</html>