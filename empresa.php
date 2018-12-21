<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();
$contenidos->set("cod","Historia");
$historia = $contenidos->viewCod();
$contenidos->set("cod","Beneficio 1");
$beneficio1 = $contenidos->viewCod();
$contenidos->set("cod","Beneficio 2");
$beneficio2 = $contenidos->viewCod();
$contenidos->set("cod","Beneficio 3");
$beneficio3 = $contenidos->viewCod();
$contenidos->set("cod","Beneficio 4");
$beneficio4 = $contenidos->viewCod();
$contenidos->set("cod","Beneficio 5");
$beneficio5 = $contenidos->viewCod();
$contenidos->set("cod","Beneficio 6");
$beneficio6 = $contenidos->viewCod();
$template->set("title", "CES | Sobre nosotros");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();
?>
<body>
<div class="page">
    <?php $template->themeNav(); ?>
    <section class="ad-breadcrumb parallex">
        <div class="container page-banner">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h1>Sobre nosotros</h1>
                </div>
                <div class="col-sm-6 col-md-6 hidden-xs">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?=URL?>/index">Inicio</a></li>
                        <li class="active">Empresa</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title black ">
                            <h1>Sobre nosotros</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <?=$historia['contenido'];?>
                        <!--<blockquote>Lorem ipsum dolor sit amet, adipisicing elit. Veritatis maxime, perferendis nostrum. Repellat nobis aperiam rerum in modi... !</blockquote>-->

                    </div>
                    <!--
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src="<?=URL?>/assets/archivos/img/ces_frente.jpg" alt="" class="img-responsive">
                        <div class="panel-group drop-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading tab-collapsed" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapse-controle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Objetivo 1
                                            <span class="expand-icon-wrap"><i class="fa expand-icon"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
                                    <div class="panel-body">
                                        <div class="panel-body-icon"><i class="fa fa-magic"></i></div>
                                        Descripción del objetivo.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapse-controle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Objetivo 2
                                            <span class="expand-icon-wrap"><i class="fa expand-icon"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                                    <div class="panel-body">
                                        <div class="panel-body-icon"><i class="fa fa-crop"></i></div>
                                        Descripción del objetivo.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed collapse-controle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Objetivo 3
                                            <span class="expand-icon-wrap"><i class="fa expand-icon"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                    <div class="panel-body">
                                        <div class="panel-body-icon"><i class="fa fa-cogs"></i></div>
                                        Descripción del objetivo.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <section class="benifts light-blue">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="Heading-title black">
                    <h1>Beneficios</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 services-box">
                    <div class="services-widget">
                        <div class="media">
                            <a href="javascript:void(0)" class="pull-left licon">
                                <i class="services-icon fa fa-support"></i></a>
                            <div class="clearfix visible-xs"></div>
                            <div class="media-body">
                                <!--<h3>Beneficio 1</h3>-->
                                <p><?=$beneficio1['contenido'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 services-box">
                    <div class="services-widget">
                        <div class="media">
                            <a href="javascript:void(0)" class="pull-left licon">
                                <i class="services-icon fa fa-plus-square-o"></i></a>
                            <div class="clearfix visible-xs"></div>
                            <div class="media-body">
                                <p><?=$beneficio2['contenido'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 services-box">
                    <div class="services-widget">
                        <div class="media ">
                            <a href="javascript:void(0)" class="pull-left licon">
                                <i class="services-icon fa fa-cogs"></i></a>
                            <div class="clearfix visible-xs"></div>
                            <div class="media-body">
                                <p><?=$beneficio3['contenido'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 services-box">
                    <div class="services-widget">
                        <div class="media">
                            <a href="javascript:void(0)" class="pull-left licon">
                                <i class="services-icon fa fa-home"></i></a>
                            <div class="clearfix visible-xs"></div>
                            <div class="media-body">
                                <p><?=$beneficio4['contenido'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 services-box">
                    <div class="services-widget">
                        <div class="media ">
                            <a href="javascript:void(0)" class="pull-left licon">
                                <i class="services-icon fa fa-book"></i></a>
                            <div class="clearfix visible-xs"></div>
                            <div class="media-body">
                                <p><?=$beneficio5['contenido'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 services-box">
                    <div class="services-widget">
                        <div class="media">
                            <a href="javascript:void(0)" class="pull-left licon">
                                <i class="services-icon fa fa-archive"></i></a>
                            <div class="clearfix visible-xs"></div>
                            <div class="media-body">
                                <p><?=$beneficio6['contenido'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $template->themeEnd(); ?>
</div>
</body>
</html>
