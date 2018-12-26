<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$promocion = new Clases\Promociones();
$usuario = new Clases\Usuarios();
$imagenes = new Clases\Imagenes();
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$promocion->set("cod", $cod);
$promo = $promocion->view();
$usuario->set("cod", $promo['usuario']);
$user = $usuario->view();
$imagenes->set("cod", $promo['cod']);
$imagen = $imagenes->listForProduct();
$fechaI = explode("-", $promo['inicio']);
$fechaF = explode("-", $promo['fin']);
$template->set("title", "CES | " . ucfirst($promo['titulo']));
$template->set("description", "");
$template->set("keywords", "");
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
                <div class="col-sm-6 col-md-6 hidden-xs">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?= URL ?>/index">Inicio</a></li>
                        <li class="active"><?= $promo['titulo'] ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="ad-listing-single single-listing-2 light-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="listing-2-title">
                                <h2><?= ucfirst($promo['titulo']); ?></h2>
                            </div>
                            <div class="listing-2-meta">
                                <ul>
                                    <li><i class="fa fa-user"></i> <a href="<?= URL . '/comercio/' . $funciones->normalizar_link($user['cod']) ?>"><?= $user['titulo'] ?></a>
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
                                    <div style="width: 30%;height:300px;display:inline-block;background:url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;"></div>
                                </a>
                                <?php
                            }
                            ?>
                            <span class="separator"></span>
                            <br>
                            <div class="derecha mt-10">
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