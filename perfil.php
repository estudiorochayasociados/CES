<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$template->set("title", "CES | Inicio");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();
$sesionCount = @count($_SESSION['usuarios']);
?>
<body>
<div class="page">
    <?php $template->themeNav(); ?>
    <?php
    if ($sesionCount == 0) {
        ?>
        <section class="ad-breadcrumb parallex">
            <div class="container page-banner">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <h1>Perfil</h1>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <ol class="breadcrumb pull-right">
                            <li><a href="<?= URL ?>/inicio">Inicio</a></li>
                            <li class="active">Perfil</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>
    <?php include 'assets/inc/btns.inc.php'; ?>


    <?php
    if ($op != '') {
        include 'assets/inc/perfil/' . $op . '.inc.php';
    } else {
        $funciones->headerMove(URL . "/index");
    }
    ?>
    <?php
    $template->themeEnd();
    ?>
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
    </script>
</div>
</body>
</html>

