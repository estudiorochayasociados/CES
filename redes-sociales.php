<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();
$contenidos->set("cod", "Historia");
$historia = $contenidos->viewCod();
$contenidos->set("cod", "Comision Directiva");
$comision = $contenidos->viewCod();
$contenidos->set("cod", "Objetivos");
$objetivos = $contenidos->viewCod();
$template->set("title", "CES | Redes Sociales");
$template->set("description", "Acerca del CES San Francisco");
$template->set("keywords", "CES");
$template->set("favicon", LOGO);
$template->themeInit();
?>
<body>
<div class="page ">
    <?php $template->themeNav(); ?>
    <section class="ad-breadcrumb parallex">
        <div class="container page-banner">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h1>Redes Sociales</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="contenidos about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="curator-feed"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
                    <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
                    <script type="text/javascript">
                        /* curator-feed */
                        (function(){
                            var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
                            i.src = "https://cdn.curator.io/published/6f4bf4fd-e447-45d5-9221-6a037f481c74.js";
                            e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
                        })();
                    </script>
                </div>
            </div>
        </div>
    </section>
    <?php $template->themeEnd(); ?>
</div>
</body>
</html>
