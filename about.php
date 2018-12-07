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
                        <li><a href="<?=URL?>/inicio">Inicio</a></li>
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
                            <h1>Want to know about us?</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                        <blockquote>Lorem ipsum dolor sit amet, adipisicing elit. Veritatis maxime, perferendis nostrum. Repellat nobis aperiam rerum in modi... !</blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src="images/car-blueprint2.jpg" alt="" class="img-responsive">
                        <div class="panel-group drop-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading tab-collapsed" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapse-controle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Who We Are
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
                                            What We Do
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
                                            Our Mission statement
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
                    <h1>AdZone Banifits</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
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
    <section class="facts">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-xs-6">
                    <div class="fact-box">
                        <div class="single-facts-area">
                            <div class="facts-icon">
                                <i class="icon-beaker"></i>
                            </div>
                            <div class="facts-detail">
                                <span class="counter">7180</span>
                                <h3>Classic Ads</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-6">
                    <div class="fact-box">
                        <div class="single-facts-area">
                            <div class="facts-icon">
                                <i class="icon-document"></i>
                            </div>
                            <div class="facts-detail">
                                <span class="counter">1836</span>
                                <h3> New Projecs </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-6">
                    <div class="fact-box">
                        <div class="single-facts-area">
                            <div class="facts-icon">
                                <i class="icon-profile-male"></i>
                            </div>
                            <div class="facts-detail">
                                <span class="counter">5960</span>
                                <h3>Daily Users</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-6">
                    <div class="fact-box">
                        <div class="single-facts-area">
                            <div class="facts-icon">
                                <i class="icon-flag"></i>
                            </div>
                            <div class="facts-detail">
                                <span class="counter">2142</span>
                                <h3>Listed Company</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimoniial-section light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="Heading-title black">
                        <h1>Our Success Stories</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                </div>
                <div class="owl-testimonial-2">
                    <div class="single_testimonial">
                        <h4>Just fabulous</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <img src="images/users/2.jpg" alt="">
                        <h3 class="">Emily Copper</h3>
                    </div>
                    <div class="single_testimonial">
                        <h4>Awesome ! Loving It</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <img src="images/users/3.jpg" alt="">
                        <h3 class="">Hania Sheikh</h3>
                    </div>
                    <div class="single_testimonial">
                        <h4>Very quick and Fast</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <img src="images/users/6.jpg" alt="">
                        <h3 class="">Arslan Tariq</h3>
                    </div>
                    <div class="single_testimonial">
                        <h4>Just fabulous</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <img src="images/users/7.jpg" alt="">
                        <h3 class="">Humayun Sarfraz</h3>
                    </div>
                    <div class="single_testimonial">
                        <h4>Very quick and Fast</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <img src="images/users/1.jpg" alt="">
                        <h3 class="">Muhammad Umair</h3>
                    </div>
                    <div class="single_testimonial">
                        <h4>Awesome ! Loving It</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <img src="images/users/1.jpg" alt="">
                        <h3 class="">Hania Sheikh</h3>
                    </div>
                    <div class="single_testimonial">
                        <h4>Just fabulous</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <img src="images/users/4.jpg" alt="">
                        <h3 class="">Justin Shapes</h3>
                    </div>
                    <div class="single_testimonial">
                        <h4>Awesome ! Loving It</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <img src="images/users/3.jpg" alt="">
                        <h3 class="">Hania Sheikh</h3>
                    </div>
                    <div class="single_testimonial">
                        <h4>Very quick and Fast</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <img src="images/users/2.jpg" alt="">
                        <h3 class="">Mark Hales</h3>
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
