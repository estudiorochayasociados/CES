<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$usuarios = new Clases\Usuarios();
$categorias = new Clases\Categorias();
$imagenes = new Clases\Imagenes();
$template->set("title", "CES | Inicio");
$template->set("description", "Inico de CES San Francisco");
$template->set("keywords", "Inicio,CES");
$template->set("favicon", LOGO);
$template->themeInit();
//Categorias
$categorias->set("area", "rubros");
$filter = array("");
$categoriasData = $categorias->listForArea('', '');
//
?>

<body>
<div class="page">
    <?php $template->themeNav(); ?>
    <div style="width: 100%; height: 700px;"
         data-vide-bg="<?= URL ?>/assets/images/video.mp4" data-vide-options="loop: true, muted: false, position: 0% 0%">
    </div>
    <section class="call-to-action-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-10 col-sm-12 col-xs-12">
                        <i class="icon-trophy"></i>
                        <div class="heading-detail">
                            <h3>Asóciate con nosotros</h3>
                            <p>Para mas información, contactenos a nuestro numero</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12"><a class="btn btn-default btn-block" href="<?= URL . '/contacto' ?>">Contacto <i class="fa fa-angle-double-right"></i></a></div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $template->themeEnd();
    ?>

    <script>
        $('.vidbg-box').vidbg({
            'mp4': '<?= URL ?>/assets/images/video.mp4',
            'webm': '<?= URL ?>/assets/images/video.webm',
            'poster': '<?= URL ?>/assets/images/poster.jpg',
        }, {
            muted: true,
            loop: true
        });
    </script>
</div>
</body>
</html>

