<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();
$contenidos->set("cod","Prueba");
$contenidos_data = $contenidos->viewCod();
$template->set("title", "CES | Inicio");
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
                    <h1>About Us</h1>
                </div>
                <div class="col-sm-6 col-md-6">
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
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p>El 31 de octubre de 1928 en una reunión realizada en la confitería “Las Colonias”, (más conocida como "Confitería Ferrazzi”, ubicada en la esquina de Bv. 25 de Mayo y Avda. del Libertador (n), fue fundado el Centro Comercial e Industrial de San Francisco.



                            El primer presidente electo fue el Sr. Carlos Bertello, integrante de la firma propietaria de un negocio de ramos generales que ocupaba gran parte de la manzana enmarcada por el Bv. 25 de Mayo y la calle Moreno y su primer asesor letrado y redactor de sus estatutos fue el Dr. Joaquín Gregorio Martínez.



                            El 20 de mayo de 1931 quedó constituida una asociación denominada Centro Defensa de la Propiedad y fue su primer presidente el Sr. Luis Lamberghini.

                            Agrupaba, conforme a lo consignado en los estatutos a los propietarios de bienes raíces (propiedades inmuebles).



                            El 30 de agosto de 1936 esta entidad se fusiona con el Centro Comercial e Industrial dando origen al Centro Comercial, Industrial y de la Propiedad, con la orientación profesional del asesor letrado de ambas instituciones, Dr. Joaquín G. Martínez, quien realiza las correspondientes adecuaciones estatutarias.



                            A partir de entonces se inicia una prolongada trayectoria de actividades y de realizaciones, no sólo en la promoción y defensa gremial empresaria sino con una activa participación en los principales proyectos de obras de beneficio público que contribuyeron al desarrollo de la ciudad y de su zona de influencia.



                            En el año 2003, y como consecuencia de la convocatoria a una Asamblea General Extraordinaria de Socios se modifican parte de los Estatutos Sociales pasando a denominarse CENTRO EMPRESARIAL y de SERVICIOS de SAN FRANCISCO. </p>
                        <!--<blockquote>Lorem ipsum dolor sit amet, adipisicing elit. Veritatis maxime, perferendis nostrum. Repellat nobis aperiam rerum in modi... !</blockquote>-->

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src="<?=URL?>/assets/archivos/img/ces_frente.jpg" alt="" class="img-responsive">
                        <div class="panel-group drop-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading tab-collapsed" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapse-controle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Texto 1
                                            <span class="expand-icon-wrap"><i class="fa expand-icon"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
                                    <div class="panel-body">
                                        <div class="panel-body-icon"><i class="fa fa-magic"></i></div>
                                        Noni deposit quid pro quo hic escorol. Olypian rrels et gorilla congolium sic ad Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapse-controle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Texto 2
                                            <span class="expand-icon-wrap"><i class="fa expand-icon"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                                    <div class="panel-body">
                                        <div class="panel-body-icon"><i class="fa fa-crop"></i></div>
                                        Epsum factorial non deposit quid pro quo hic escorol. Olypian rrels et gorilla congolium sic ad Epsum non deposit quid pro quo hic escorol. Olypian quarrels.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed collapse-controle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Texto 3
                                            <span class="expand-icon-wrap"><i class="fa expand-icon"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                    <div class="panel-body">
                                        <div class="panel-body-icon"><i class="fa fa-cogs"></i></div>
                                        Quid pro quo hic escorol. Olypian rrels et gorilla congolium sic ad Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et agorilla.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <h3>you will get 6 month free support Included</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text ever since the 1500s.</p>
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
                                <h3>Easy to Ad post and Search Freely</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text ever since the 1500s.</p>
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
                                <h3>You are going to collect Customiseable design</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text ever since the 1500s.</p>
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
                                <h3> Multiple designs with different home pages</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text ever since the 1500s.</p>
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
                                <h3>Fully Documented Template with support</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text ever since the 1500s.</p>
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
                                <h3> Multiple designs with different home pages</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="brand-logo-area clients-bg light-blue">
        <div class="clients-list">
            <div class="client-logo">
                <a href="#"><img src="<?=URL?>/assets/images/clients/client_1.png" class="img-responsive" alt="Brand Image" /></a>
            </div>
            <div class="client-logo">
                <a href="#"><img src="<?=URL?>/assets/images/clients/client_2.png" class="img-responsive" alt="Brand Image" /></a>
            </div>
            <div class="client-logo">
                <a href="#"><img src="<?=URL?>/assets/images/clients/client_3.png" class="img-responsive" alt="Brand Image" /></a>
            </div>
            <div class="client-logo">
                <a href="#"><img src="<?=URL?>/assets/images/clients/client_4.png" class="img-responsive" alt="Brand Image" /></a>
            </div>
            <div class="client-logo">
                <a href="#"><img src="<?=URL?>/assets/images/clients/client_1.png" class="img-responsive" alt="Brand Image" /></a>
            </div>
            <div class="client-logo">
                <a href="#"><img src="<?=URL?>/assets/images/clients/client_2.png" class="img-responsive" alt="Brand Image" /></a>
            </div>
            <div class="client-logo">
                <a href="#"><img src="<?=URL?>/assets/images/clients/client_3.png" class="img-responsive" alt="Brand Image" /></a>
            </div>
            <div class="client-logo">
                <a href="#"><img src="<?=URL?>/assets/images/clients/client_4.png" class="img-responsive" alt="Brand Image" /></a>
            </div>
        </div>
    </div>
    <?php $template->themeEnd(); ?>
</div>
</body>
</html>
