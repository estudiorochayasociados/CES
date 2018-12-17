<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$usuarios = new Clases\Usuarios();
$categorias = new Clases\Categorias();
$imagenes = new Clases\Imagenes();
$template->set("title", "CES | Inicio");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();
//Categorias
$categorias->set("area","comercios");
$categoriasData = $categorias->listForArea('');
//
?>

<body>
<div class="page">
<?php $template->themeNav();?>
    <section class="main-section">
        <div class="container">
            <div class="row">
                <!--
                <div class="col-md-5 col-sm-8 col-xs-12 col-sm-offset-2 col-md-offset-0">
                    <div class="search-form-contaner">
                        <h1 class="search-main-title"> Buy & Sell Anything </h1>
                        <form class="form-inline">
                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="keyword" placeholder="Search Keyword" value=""> <i class="icon-magnifying-glass"></i>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                <div class="form-group">
                                    <select class="select-category form-control">
                                        <option label="Select Option"></option>
                                        <option value="0">Animal</option>
                                        <option value="1">Designer</option>
                                        <option value="2">Laptops</option>
                                        <option value="3">Electronics</option>
                                        <option value="4">Human Resource Jobs</option>
                                        <option value="5">Real Estate</option>
                                        <option value="6">Vehicles</option>
                                        <option value="7">Others</option>
                                        <option value="8">Sports</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                <div class="form-group">
                                    <select class="select-location form-control">
                                        <option value="">&nbsp;</option>
                                        <option value="0">SriLanka</option>
                                        <option value="1">Australia</option>
                                        <option value="2">Bahrain</option>
                                        <option value="3">Canada</option>
                                        <option value="4">Denmark</option>
                                        <option value="5">Germany</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                <div class="form-group form-action">
                                    <button type="button" class="btn btn-default btn-search-submit"><span class="fa fa-search"></span>Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6 hidden-sm hidden-xs">
                    <div class="main-section-product"> <img src="images/bike.png" alt="car" class="img-responsive animated slideInRight"> </div>
                </div>
                -->
            </div>
        </div>
    </section>
    <section class="cat-tabs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class="active">
                                            <a href="#tab1" data-toggle="tab">
                                                <i class="flaticon-dog" data-toggle="tooltip" data-placement="left" title="Tooltip on left"></i>
                                                <div class="hidden-xs hidden-sm">Animal</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-toggle="tab">
                                                <i class="flaticon-computer"></i>
                                                <div class="hidden-xs hidden-sm">Laptops</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab3" data-toggle="tab">
                                                <i class="flaticon-technology-23"></i>
                                                <div class="hidden-xs hidden-sm">Electronics</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab4" data-toggle="tab">
                                                <i class="flaticon-interface"></i>
                                                <div class="hidden-xs hidden-sm">Jobs</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab5" data-toggle="tab">
                                                <i class="flaticon-construction"></i>
                                                <div class="hidden-xs hidden-sm">Real Estate</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab6" data-toggle="tab">
                                                <i class="flaticon-transport-8"></i>
                                                <div class="hidden-xs hidden-sm">Vehicles</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab7" data-toggle="tab">
                                                <i class="flaticon-sports-5"></i>
                                                <div class="hidden-xs hidden-sm">Sports</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab8" data-toggle="tab">
                                                <i class="flaticon-clothes-3"></i>
                                                <div class="hidden-xs hidden-sm">cloths</div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane active animated fadeInUp" id="tab1">
                                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                            <?php
                                            ?>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/animals/1.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#">Nombre</a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">Categoria</a></li>
                                                                <li><a href="#">Sub</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Descripcion</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                Direccion
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                telefono
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                email
                                                </span>
                                                        <button class="btn btn-default btn-block" href=""> Ver perfil <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/animals/4.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#">Beautiful Zuchon Puppies</a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">Animals</a></li>
                                                                <li><a href="#">dogs</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Price: <span>$1150</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> July 28, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                404 United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 0123456
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                admin-line@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix visible-sm"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInDown" id="tab2">
                                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/laptops/3.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-412">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#">HP - Star Wars Special Edition </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">laptop</a></li>
                                                                <li><a href="#">HP</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Price: <span>$760</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> August 08, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                123, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 9876543
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                youremail786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/laptops/4.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#">Dell - Spectre x360 Touch-Screen </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">laptop</a></li>
                                                                <li><a href="#">Dell</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Price: <span>$1150</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> July 28, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 0123456
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                admin-line@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix visible-sm"></div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/laptops/1.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#">Apple MacBook Pro 13</a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">laptop</a></li>
                                                                <li><a href="#">mac</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Price: <span>$1900</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> September 30, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +90 0666 8009993
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                contact786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/laptops/2.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#">Apple MacBook Pro 13</a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">laptop</a></li>
                                                                <li><a href="#">mac</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Price: <span>$1900</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> September 30, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +90 0666 8009993
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                contact786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane  animated fadeInLeft" id="tab3">
                                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/laptops/5.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#">Monster DNA two-Ear Headphones </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">laptop</a></li>
                                                                <li><a href="#">Headphones</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Price: <span>$760</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> August 08, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                404 NewYork, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 9876543
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                youremail786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/laptops/2.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#">Dell - Spectre x360 Touch-Screen </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">laptop</a></li>
                                                                <li><a href="#">Dell</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Price: <span>$1150</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> July 28, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 0123456
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                admin-line@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix visible-sm"></div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/laptops/3.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#">Sony VAIO 13.3", Intel Core i7</a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">laptop</a></li>
                                                                <li><a href="#">sony</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Price: <span>$1900</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> September 30, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +90 0666 8009993
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                contact786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/laptops/1.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#">Sony VAIO 13.3", Intel Core i7</a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">laptop</a></li>
                                                                <li><a href="#">sony</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Price: <span>$1900</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> September 30, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +90 0666 8009993
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                contact786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInUp" id="tab4">
                                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/jobs/1.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> Technical Network Director </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">jobs</a></li>
                                                                <li><a href="#">networking</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$760</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> August 08, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                404 NewYork, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 9876543
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                youremail786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/jobs/2.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> Looking for Senior Software Guy </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">jobs</a></li>
                                                                <li><a href="#">software</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$1150</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> July 28, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 0123456
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                admin-line@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix visible-sm"></div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/jobs/3.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#">Looking for Technical Network Director</a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">jobs</a></li>
                                                                <li><a href="#">technical</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$1900</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> September 30, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +90 0666 8009993
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                contact786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/jobs/1.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#">Looking for Technical Network Director</a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">jobs</a></li>
                                                                <li><a href="#">technical</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$1900</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> September 30, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +90 0666 8009993
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                contact786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInRight" id="tab5">
                                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/house/1.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> 2 bedroom apartment Fully Furnished </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">jobs</a></li>
                                                                <li><a href="#">networking</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$760</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> August 08, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                404 NewYork, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 9876543
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                youremail786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/house/2.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> A banglo apartment  with garden </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">jobs</a></li>
                                                                <li><a href="#">software</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$1150</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> July 28, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 0123456
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                admin-line@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix visible-sm"></div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/house/4.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> Penthouse apartment  open air</a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">jobs</a></li>
                                                                <li><a href="#">technical</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$1900</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> September 30, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +90 0666 8009993
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                contact786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInUp" id="tab6">
                                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/cars/1.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> 2017 BMW S90 T6 Inscription </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">cars</a></li>
                                                                <li><a href="#">bmw</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$760</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> August 08, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 9876543
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                youremail786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/cars/3.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> 2006 Ferrari 360 Modena  </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">cars</a></li>
                                                                <li><a href="#">ferrari</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$1150</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> July 28, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 0123456
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                admin-line@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix visible-sm"></div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/cars/4.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> 2017 Audi Q7 3.0T quattro Prestige</a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">cars</a></li>
                                                                <li><a href="#">audi</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$39000</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> September 30, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +90 0666 8009993
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                contact786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInUp" id="tab7">
                                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/sports/1.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> A solid Player Shoot Inscription </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">sports</a></li>
                                                                <li><a href="#">badminton</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$160</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> December 03, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 9876543
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                youremail786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/sports/3.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> baseball sports ball for sale  </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">sports</a></li>
                                                                <li><a href="#">baseball</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$50</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> July 28, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 0123456
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                admin-line@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix visible-sm"></div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/sports/2.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> ping pong rackets for sale - Best Quality </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">cars</a></li>
                                                                <li><a href="#">audi</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$39000</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> September 30, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +90 0666 8009993
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                contact786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInRight" id="tab8">
                                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/cloths/1.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> A solid Player Shoot Inscription </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">sports</a></li>
                                                                <li><a href="#">badminton</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$160</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> December 03, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 9876543
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                youremail786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/cloths/3.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> baseball sports ball for sale  </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">sports</a></li>
                                                                <li><a href="#">baseball</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$50</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> July 28, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +99 0333 0123456
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                admin-line@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix visible-sm"></div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/cloths/2.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> ping pong rackets for sale - Best Quality </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">cars</a></li>
                                                                <li><a href="#">audi</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$39000</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> September 30, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +90 0666 8009993
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                contact786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-post">
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-image"> <img src="<?=URL?>/assets/images/post-images/cloths/4.jpg" class="img-responsive" alt="image" /> </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="listing-desc">
                                                        <h3 class="listing-desc-title">
                                                            <a href="#"> ping pong rackets for sale - Best Quality </a>
                                                        </h3>
                                                        <div class="listing-desc-category">
                                                            <ul>
                                                                <li><a href="#">cars</a></li>
                                                                <li><a href="#">audi</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                                        <span class="listing-price">Salary: <span>$39000</span></span> <span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> September 30, 2016
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                    <div class="listing-info"> <span class="listing-address">
                                                <i class="fa fa-location-arrow"></i>
                                                New York, United States
                                                </span> <span class="listing-phone">
                                                <i class="fa fa-phone"></i>
                                                +90 0666 8009993
                                                </span> <span class="listing-email">
                                                <i class="fa fa-envelope"></i>
                                                contact786@gmail.com
                                                </span>
                                                        <button class="btn btn-default btn-block"> View Ad <i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="category-section-4 light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-sm-6">
                        <div class="category-list">
                            <div class="category-list-icon">
                                <i class="flaticon-technology-23"></i>
                                <div class="category-list-title">
                                    <h5><a href="#">Electonics</a></h5>
                                </div>
                            </div>
                            <div class="category-sub-list">
                                <ul class="category-list-data">
                                    <li><a href="#">Home Electronics<span>05</span></a></li>
                                    <li><a href="#">LCD, LED<span>22</span></a></li>
                                    <li><a href="#">Laptop's<span>12</span></a></li>
                                    <li><a href="#">Mobile &amp; Tablets<span>15</span></a></li>
                                    <li><a href="#">Technical Servicces<span>11</span></a></li>
                                </ul>
                            </div>
                            <div class="view-more">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="category-list">
                            <div class="category-list-icon">
                                <i class="flaticon-transport-5"></i>
                                <div class="category-list-title">
                                    <h5><a href="#">Vehicles</a></h5>
                                </div>
                            </div>
                            <div class="category-sub-list">
                                <ul class="category-list-data">
                                    <li><a href="#">Sport Cars<span>75</span></a></li>
                                    <li><a href="#">Heavy Vehicles <span>22</span></a></li>
                                    <li><a href="#">Auto Parts <span>32</span></a></li>
                                    <li><a href="#">Bikes<span>13</span></a></li>
                                    <li><a href="#">Others<span>17</span></a></li>
                                </ul>
                            </div>
                            <div class="view-more">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="category-list">
                            <div class="category-list-icon">
                                <i class="flaticon-home-4"></i>
                                <div class="category-list-title">
                                    <h5><a href="#">Real Estate</a></h5>
                                </div>
                            </div>
                            <div class="category-sub-list">
                                <ul class="category-list-data">
                                    <li><a href="#">Houses For Sale<span>25</span></a></li>
                                    <li><a href="#">Land For Sale<span>12</span></a></li>
                                    <li><a href="#">Houses To Rent<span>42</span></a></li>
                                    <li><a href="#">Plaza & Property <span>15</span></a></li>
                                    <li><a href="#">Flats <span>61</span></a></li>
                                </ul>
                            </div>
                            <div class="view-more">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="category-list">
                            <div class="category-list-icon">
                                <i class="flaticon-dog-1"></i>
                                <div class="category-list-title">
                                    <h5><a href="#">Pets</a></h5>
                                </div>
                            </div>
                            <div class="category-sub-list">
                                <ul class="category-list-data">
                                    <li><a href="#">Birds<span>05</span></a></li>
                                    <li><a href="#">Cats<span>22</span></a></li>
                                    <li><a href="#">Fishes<span>12</span></a></li>
                                    <li><a href="#">Rabbits<span>15</span></a></li>
                                    <li><a href="#">Dogs<span>11</span></a></li>
                                </ul>
                            </div>
                            <div class="view-more">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="category-list">
                            <div class="category-list-icon">
                                <i class="flaticon-clothes-3"></i>
                                <div class="category-list-title">
                                    <h5><a href="#">Fashion</a></h5>
                                </div>
                            </div>
                            <div class="category-sub-list">
                                <ul class="category-list-data">
                                    <li><a href="#">Wathes & Jewellery<span>25</span></a></li>
                                    <li><a href="#">Cloths<span>22</span></a></li>
                                    <li><a href="#">Shoes<span>42</span></a></li>
                                    <li><a href="#">Dress Coat<span>55</span></a></li>
                                    <li><a href="#">Women Accessories<span>81</span></a></li>
                                </ul>
                            </div>
                            <div class="view-more">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="category-list">
                            <div class="category-list-icon">
                                <i class="flaticon-tool-1"></i>
                                <div class="category-list-title">
                                    <h5><a href="#">Jobs</a></h5>
                                </div>
                            </div>
                            <div class="category-sub-list">
                                <ul class="category-list-data">
                                    <li><a href="#">Marketing<span>05</span></a></li>
                                    <li><a href="#">Accountancy<span>22</span></a></li>
                                    <li><a href="#">Developers<span>452</span></a></li>
                                    <li><a href="#">Hospitality<span>15</span></a></li>
                                    <li><a href="#">Other Jobs<span>21</span></a></li>
                                </ul>
                            </div>
                            <div class="view-more">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="category-list">
                            <div class="category-list-icon">
                                <i class="flaticon-configuration"></i>
                                <div class="category-list-title">
                                    <h5><a href="#">Services</a></h5>
                                </div>
                            </div>
                            <div class="category-sub-list">
                                <ul class="category-list-data">
                                    <li><a href="#">Construction<span>35</span></a></li>
                                    <li><a href="#">Advertising<span>22</span></a></li>
                                    <li><a href="#">Plumbing<span>42</span></a></li>
                                    <li><a href="#">Entertainment<span>17</span></a></li>
                                    <li><a href="#">Education<span>121</span></a></li>
                                </ul>
                            </div>
                            <div class="view-more">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="category-list">
                            <div class="category-list-icon">
                                <i class="flaticon-game"></i>
                                <div class="category-list-title">
                                    <h5><a href="#">Sports</a></h5>
                                </div>
                            </div>
                            <div class="category-sub-list">
                                <ul class="category-list-data">
                                    <li><a href="#">Cricket<span>45</span></a></li>
                                    <li><a href="#">Badminton<span>52</span></a></li>
                                    <li><a href="#">Exercise & Fitness<span>12</span></a></li>
                                    <li><a href="#">Football<span>15</span></a></li>
                                    <li><a href="#">Sports apparel<span>11</span></a></li>
                                </ul>
                            </div>
                            <div class="view-more">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="load-more-btn">
                            <button class="btn-default"> Load More <i class="fa fa-refresh"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="call-to-action-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-10 col-sm-12 col-xs-12">
                        <i class="icon-trophy"></i>
                        <div class="heading-detail">
                            <h3>World’s Best Classified Website Template</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12"> <a class="btn btn-default btn-block" href="">Buy Now <i class="fa fa-angle-double-right"></i></a> </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-ads">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title black">
                            <h1>Premium Advertisement</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-image-box">
                            <div class="img-box"><img src="<?=URL?>/assets/images/post-images/camera/1.jpg" class="img-responsive center-block" alt=""></div>
                            <div class="content-area">
                                <div class="">
                                    <h4><a href=""> Canon Powershot A Great D-SLR</a></h4>
                                    <p> Lahore, Pakistan </p>
                                </div>
                                <div class="feature-post-meta">
                                    <a href=""> <i class="fa fa-clock-o"></i> August 12, 2016</a> <a href="" class="mata-detail electronics"> camera </a>
                                </div>
                                <div class="feature-post-meta-bottom"> <span>$500 </span> <a href="" class="apply pull-right"> View Detail</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-image-box">
                            <div class="img-box"><img src="<?=URL?>/assets/images/post-images/animals/1.jpg" class="img-responsive center-block" alt=""></div>
                            <div class="content-area">
                                <div class="">
                                    <h4><a href=""> Chocolate Colour Persian Kittens</a></h4>
                                    <p> london, United Kingdom </p>
                                </div>
                                <div class="feature-post-meta">
                                    <a href=""> <i class="fa fa-clock-o"></i> 10 days ago</a> <a href="" class="mata-detail animals">Animals</a>
                                </div>
                                <div class="feature-post-meta-bottom"> <span>$900 </span> <a href="" class="apply pull-right"> View Detail</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-image-box">
                            <div class="img-box"><img src="<?=URL?>/assets/images/post-images/camera/3.jpg" class="img-responsive center-block" alt=""></div>
                            <div class="content-area">
                                <div class="">
                                    <h4><a href=""> D-SLR Powershot Mega </a></h4>
                                    <p> Melbourne, Australia </p>
                                </div>
                                <div class="feature-post-meta">
                                    <a href=""> <i class="fa fa-clock-o"></i> 2 days ago</a> <a href="" class="mata-detail jobs"> jobs </a>
                                </div>
                                <div class="feature-post-meta-bottom"> <span>$1500 </span> <a href="" class="apply pull-right"> View Detail</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix hidden-sm"></div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-image-box">
                            <div class="img-box"><img src="<?=URL?>/assets/images/post-images/laptops/5.jpg" class="img-responsive center-block" alt=""></div>
                            <div class="content-area">
                                <div class="">
                                    <h4><a href=""> Monster DNA two-Ear Headphones  </a></h4>
                                    <p> Kings, saudi arabia </p>
                                </div>
                                <div class="feature-post-meta">
                                    <a href=""> <i class="fa fa-clock-o"></i> 2 days ago</a> <a href="" class="mata-detail laptops">laptops</a>
                                </div>
                                <div class="feature-post-meta-bottom"> <span>$2500 </span> <a href="" class="apply pull-right"> View Detail</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-image-box">
                            <div class="img-box"><img src="<?=URL?>/assets/images/post-images/camera/2.jpg" class="img-responsive center-block" alt=""></div>
                            <div class="content-area">
                                <div class="">
                                    <h4><a href=""> 54/A Dual Mode Ready Camera </a></h4>
                                    <p> NewYork, USA </p>
                                </div>
                                <div class="feature-post-meta">
                                    <a href=""> <i class="fa fa-clock-o"></i> 2 days ago</a> <a href="" class="mata-detail electronics">Camera</a>
                                </div>
                                <div class="feature-post-meta-bottom"> <span>$500 </span> <a href="" class="apply pull-right"> View Detail</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-image-box">
                            <div class="img-box"><img src="<?=URL?>/assets/images/post-images/cars/4.jpg" class="img-responsive center-block" alt=""></div>
                            <div class="content-area">
                                <div class="">
                                    <h4><a href=""> A 4 Rings Premium Fast Car </a></h4>
                                    <p> istanbul, turkey</p>
                                </div>
                                <div class="feature-post-meta">
                                    <a href=""> <i class="fa fa-clock-o"></i> 10 days ago</a> <a href="" class="mata-detail vahicles">vahicles</a>
                                </div>
                                <div class="feature-post-meta-bottom"> <span>$400 </span> <a href="" class="apply pull-right"> View Detail</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="load-more-btn">
                            <button class="btn-default"> View More <i class="fa fa-angle-double-right"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
    <section class="blog-posts-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title black">
                            <h1>Featured News</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-post">
                            <div class="post-img">
                                <a href="#"> <img src="images/blog/1.jpg" alt="" class="img-responsive"> </a>
                            </div>
                            <div class="post-info">
                                <a href=""> <i class="fa fa-calendar-o"></i> Aug 30, 2016</a>
                                <a href="#"> <i class="fa fa-commenting"></i> 23 comments</a>
                            </div>
                            <h3 class="post-title"> <a href="#"> Sketch Designing Artists are beauty: A report </a> </h3>
                            <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-post">
                            <div class="post-img">
                                <a href="#"> <img src="images/blog/2.jpg" alt="" class="img-responsive"> </a>
                            </div>
                            <div class="post-info">
                                <a href=""> <i class="fa fa-calendar-o"></i> April 10, 2016</a>
                                <a href="#"> <i class="fa fa-commenting"></i> 93 comments</a>
                            </div>
                            <h3 class="post-title"> <a href="#"> A suitable timings for a graphic designers </a> </h3>
                            <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-post">
                            <div class="post-img">
                                <a href="#"> <img src="images/blog/3.jpg" alt="" class="img-responsive"> </a>
                            </div>
                            <div class="post-info">
                                <a href=""> <i class="fa fa-calendar-o"></i> Aug 31, 2016</a>
                                <a href="#"> <i class="fa fa-commenting"></i> 36 comments</a>
                            </div>
                            <h3 class="post-title"> <a href="#"> How to get a job on same time same place </a> </h3>
                            <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="load-more-btn">
                            <button class="btn-default"> View More <i class="fa fa-angle-right"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <?php
    $template->themeEnd();
    ?>
</div>
</body>
</html>

