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
/*<?php echo URL . '/producto/' . $funciones->normalizar_link($productos['titulo']) . "/" . $productos['id'] ?>*/
?>
<body>
<div class="page">
    <?php $template->themeNav(); ?>
    <section class="ad-breadcrumb parallex">
        <div class="container page-banner">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h1>Comercios</h1>
                </div>
                <div class="col-sm-6 col-md-6">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?=URL?>/inicio">Inicio</a></li>
                        <li class="active">Comercios</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="light-blue ad-listing">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 col-md-push-4">
                    <div class="all-ads-list-box2">
                        <div class="ad-box ad-box-2">
                            <div class="col-md-4 col-sm-3 col-xs-12 nopadding">
                                <div class="comp-logo">
                                    <a href=""><img src="<?=URL?>/assets/images/post-images/animals/2.jpg" class="img-responsive" alt="scriptsbundle"> </a>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-9 col-xs-12">
                                <div class="ad-box-2-detail">
                                    <div class="ad-title-box">
                                        <span class="cat"><i class="flaticon-dog-1"></i></span>
                                        <div class="ad-title"><a href="#"> Chocolate Colour Persian Kittens </a></div>
                                        <div class="ad-title-meta">
                                       <span>
                                       <i class="fa fa-map-marker"></i> Berlin, Germany
                                       </span>
                                            <span>
                                       <i class="fa fa-calendar"></i> April 19, 2016
                                       </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="ad-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Standard dummy text. </p>
                                    </div>
                                    <div class="ad-bottom-area">
                                    <span>
                                    <i class="fa fa-tags"></i> Tags: <a href="">#Camera</a><a href="">#Lense</a><a href="">#sale</a><a href="">#buy</a>
                                    </span>
                                        <a href="" class="btn btn-default pull-right"> View Detail <i class="fa fa-angle-double-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-box ad-box-2">
                            <div class="col-md-4 col-sm-3 col-xs-12 nopadding">
                                <div class="comp-logo">
                                    <a href=""><img src="<?=URL?>/assets/images/post-images/camera/4.jpg" class="img-responsive" alt="scriptsbundle"> </a>
                                </div>
                                <div class="ad-price-on-image">
                                    <span class="price"> $7500 </span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-9 col-xs-12">
                                <div class="ad-box-2-detail">
                                    <div class="ad-title-box">
                                        <span class="cat"><i class="flaticon-technology-23"></i></span>
                                        <div class="ad-title"><a href="#"> Canon Powershot A Great D-SLR </a></div>
                                        <div class="ad-title-meta">
                                       <span>
                                       <i class="fa fa-map-marker"></i> Barcelona, Spain
                                       </span>
                                            <span>
                                       <i class="fa fa-calendar"></i> December 29, 2016
                                       </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="ad-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Standard dummy text.</p>
                                    </div>
                                    <div class="ad-bottom-area">
                                    <span>
                                    <i class="fa fa-tags"></i> Tags: <a href="">#cat</a><a href="">#Lense</a><a href="">#Dslr</a><a href="">#click</a>
                                    </span>
                                        <a href="" class="btn btn-default pull-right"> View Detail <i class="fa fa-angle-double-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-box ad-box-2">
                            <div class="col-md-4 col-sm-3 col-xs-12 nopadding">
                                <div class="comp-logo">
                                    <a href=""><img src="<?=URL?>/assets/images/post-images/cars/4.jpg" class="img-responsive" alt="scriptsbundle"> </a>
                                </div>
                                <div class="ad-price-on-image">
                                    <span class="price"> $200 </span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-9 col-xs-12">
                                <div class="ad-box-2-detail">
                                    <div class="ad-title-box">
                                        <span class="cat"><i class="flaticon-transport-5"></i></span>
                                        <div class="ad-title"><a href="#"> 2017 Audi Q7 3.0T quattro Prestige</a></div>
                                        <div class="ad-title-meta">
                                       <span>
                                       <i class="fa fa-map-marker"></i> Athens, Greece
                                       </span>
                                            <span>
                                       <i class="fa fa-calendar"></i> July 10, 2016
                                       </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="ad-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Standard dummy text.</p>
                                    </div>
                                    <div class="ad-bottom-area">
                                    <span>
                                    <i class="fa fa-tags"></i> Tags: <a href="">#Camera</a><a href="">#Lense</a><a href="">#cars</a><a href="">#home</a>
                                    </span>
                                        <a href="" class="btn btn-default pull-right"> View Detail <i class="fa fa-angle-double-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-box ad-box-2">
                            <div class="col-md-4 col-sm-3 col-xs-12 nopadding">
                                <div class="comp-logo">
                                    <a href=""><img src="<?=URL?>/assets/images/post-images/house/4.jpg" class="img-responsive" alt="scriptsbundle"> </a>
                                </div>
                                <div class="ad-price-on-image">
                                    <span class="price"> $920 </span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-9 col-xs-12">
                                <div class="ad-box-2-detail">
                                    <div class="ad-title-box">
                                        <span class="cat"><i class="flaticon-home-4"></i></span>
                                        <div class="ad-title"><a href="#"> Penthouse apartment open air </a></div>
                                        <div class="ad-title-meta">
                                       <span>
                                       <i class="fa fa-map-marker"></i> Northern Territory, Australia
                                       </span>
                                            <span>
                                       <i class="fa fa-calendar"></i> October 22, 2016
                                       </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="ad-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Standard dummy text.</p>
                                    </div>
                                    <div class="ad-bottom-area">
                                    <span>
                                    <i class="fa fa-tags"></i> Tags: <a href="">#Camera</a><a href="">#Lense</a><a href="">#Dslr</a><a href="">#bike</a>
                                    </span>
                                        <a href="" class="btn btn-default pull-right"> View Detail <i class="fa fa-angle-double-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-box ad-box-2">
                            <div class="col-md-4 col-sm-3 col-xs-12 nopadding">
                                <div class="comp-logo">
                                    <a href=""><img src="<?=URL?>/assets/images/post-images/animals/2.jpg" class="img-responsive" alt="scriptsbundle"> </a>
                                </div>
                                <div class="ad-price-on-image">
                                    <span class="price"> $450 </span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-9 col-xs-12">
                                <div class="ad-box-2-detail">
                                    <div class="ad-title-box">
                                        <span class="cat"><i class="flaticon-dog-1"></i></span>
                                        <div class="ad-title"><a href="#"> Chocolate Colour Persian Kittens </a></div>
                                        <div class="ad-title-meta">
                                       <span>
                                       <i class="fa fa-map-marker"></i> Berlin, Germany
                                       </span>
                                            <span>
                                       <i class="fa fa-calendar"></i> April 19, 2016
                                       </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="ad-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Standard dummy text. </p>
                                    </div>
                                    <div class="ad-bottom-area">
                                    <span>
                                    <i class="fa fa-tags"></i> Tags: <a href="">#Camera</a><a href="">#Lense</a><a href="">#sale</a><a href="">#buy</a>
                                    </span>
                                        <a href="" class="btn btn-default pull-right"> View Detail <i class="fa fa-angle-double-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-box ad-box-2">
                            <div class="col-md-4 col-sm-3 col-xs-12 nopadding">
                                <div class="comp-logo">
                                    <a href=""><img src="<?=URL?>/assets/images/post-images/camera/4.jpg" class="img-responsive" alt="scriptsbundle"> </a>
                                </div>
                                <div class="ad-price-on-image">
                                    <span class="price"> $7500 </span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-9 col-xs-12">
                                <div class="ad-box-2-detail">
                                    <div class="ad-title-box">
                                        <span class="cat"><i class="flaticon-technology-23"></i></span>
                                        <div class="ad-title"><a href="#"> Canon Powershot A Great D-SLR </a></div>
                                        <div class="ad-title-meta">
                                       <span>
                                       <i class="fa fa-map-marker"></i> Barcelona, Spain
                                       </span>
                                            <span>
                                       <i class="fa fa-calendar"></i> December 29, 2016
                                       </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="ad-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Standard dummy text.</p>
                                    </div>
                                    <div class="ad-bottom-area">
                                    <span>
                                    <i class="fa fa-tags"></i> Tags: <a href="">#cat</a><a href="">#Lense</a><a href="">#Dslr</a><a href="">#click</a>
                                    </span>
                                        <a href="" class="btn btn-default pull-right"> View Detail <i class="fa fa-angle-double-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-box ad-box-2">
                            <div class="col-md-4 col-sm-3 col-xs-12 nopadding">
                                <div class="comp-logo">
                                    <a href=""><img src="<?=URL?>/assets/images/post-images/cars/4.jpg" class="img-responsive" alt="scriptsbundle"> </a>
                                </div>
                                <div class="ad-price-on-image">
                                    <span class="price"> $200 </span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-9 col-xs-12">
                                <div class="ad-box-2-detail">
                                    <div class="ad-title-box">
                                        <span class="cat"><i class="flaticon-transport-5"></i></span>
                                        <div class="ad-title"><a href="#"> 2017 Audi Q7 3.0T quattro Prestige</a></div>
                                        <div class="ad-title-meta">
                                       <span>
                                       <i class="fa fa-map-marker"></i> Athens, Greece
                                       </span>
                                            <span>
                                       <i class="fa fa-calendar"></i> July 10, 2016
                                       </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="ad-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Standard dummy text.</p>
                                    </div>
                                    <div class="ad-bottom-area">
                                    <span>
                                    <i class="fa fa-tags"></i> Tags: <a href="">#Camera</a><a href="">#Lense</a><a href="">#cars</a><a href="">#home</a>
                                    </span>
                                        <a href="" class="btn btn-default pull-right"> View Detail <i class="fa fa-angle-double-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-box ad-box-2">
                            <div class="col-md-4 col-sm-3 col-xs-12 nopadding">
                                <div class="comp-logo">
                                    <a href=""><img src="<?=URL?>/assets/images/post-images/house/4.jpg" class="img-responsive" alt="scriptsbundle"> </a>
                                </div>
                                <div class="ad-price-on-image">
                                    <span class="price"> $920 </span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-9 col-xs-12">
                                <div class="ad-box-2-detail">
                                    <div class="ad-title-box">
                                        <span class="cat"><i class="flaticon-home-4"></i></span>
                                        <div class="ad-title"><a href="#"> Penthouse apartment open air </a></div>
                                        <div class="ad-title-meta">
                                       <span>
                                       <i class="fa fa-map-marker"></i> Northern Territory, Australia
                                       </span>
                                            <span>
                                       <i class="fa fa-calendar"></i> October 22, 2016
                                       </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="ad-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Standard dummy text.</p>
                                    </div>
                                    <div class="ad-bottom-area">
                                    <span>
                                    <i class="fa fa-tags"></i> Tags: <a href="">#Camera</a><a href="">#Lense</a><a href="">#Dslr</a><a href="">#bike</a>
                                    </span>
                                        <a href="" class="btn btn-default pull-right"> View Detail <i class="fa fa-angle-double-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 col-md-pull-8">
                    <aside>
                        <div class="widget">
                            <div class="widget-heading"><span class="title"> Categorias </span></div>
                            <ul class="categories-module nobullet">
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            <a href=""> Animal </a>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            <a href="">  Laptops </a>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            <a href=""> Electronics </a>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            <a href=""> Jobs </a>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            <a href=""> Real Estate  </a>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="widget-heading"><span class="title"> Subcategorias </span></div>
                            <ul class="categories-module nobullet">
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            <a href=""> Samsung Phones </a>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            <a href="">Nokia Phones</a>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            <a href=""> Orange Phones </a>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            <a href=""> BlackBerry Phones </a>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            <a href=""> LG Phones  </a>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="widget-heading">
                                <span class="title">Últimos comercios</span>
                            </div>
                            <ul class="related-post">
                                <li>
                                    <img src="<?=URL?>/assets/images/footer/1.jpg" alt="post image" class="img-responsive">
                                    <a href="#">Canon Powershot D-SLR </a>
                                    <span><i class="fa fa-folder-open-o"></i> Electronics</span>
                                    <span><i class="fa fa-calendar"></i> October 07, 2016 </span>
                                </li>
                                <li>
                                    <img src="<?=URL?>/assets/images/footer/2.jpg" alt="post image" class="img-responsive">
                                    <a href="#"> Chocolate Colour Persian Kittens </a>
                                    <span><i class="fa fa-folder-open-o"></i>Animales - Cats </span>
                                    <span><i class="fa fa-calendar"></i>Sep 01, 2015 - Aug 09, 2016</span>
                                </li>
                                <li>
                                    <img src="<?=URL?>/assets/images/footer/3.jpg" alt="post image" class="img-responsive">
                                    <a href="#"> A 4 Rings Premium Fast Car  </a>
                                    <span><i class="fa fa-folder-open-o"></i>Vehicle - Cars  </span>
                                    <span><i class="fa fa-calendar"></i>March 09, 2016 </span>
                                </li>
                                <li>
                                    <img src="<?=URL?>/assets/images/footer/4.jpg" alt="post image" class="img-responsive">
                                    <a href="#"> 54/A Dual Mode Ready Camera </a>
                                    <span><i class="fa fa-folder-open-o"></i>Electronics </span>
                                    <span><i class="fa fa-calendar"></i> February 09, 2016</span>
                                </li>
                                <li>
                                    <img src="<?=URL?>/assets/images/footer/5.jpg" alt="post image" class="img-responsive">
                                    <a href="#">5 Square foot house For Sale</a>
                                    <span><i class="fa fa-folder-open-o"></i> Real Estate </span>
                                    <span><i class="fa fa-calendar"></i>Junary 01, 2015 </span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="widget-heading"><span class="title">Hot Categories</span></div>
                            <ul class="tagcloud">
                                <li><a href=""> clissified </a></li>
                                <li><a href=""> sales </a></li>
                                <li><a href=""> cars </a></li>
                                <li><a href=""> bikes </a></li>
                                <li><a href=""> buy </a></li>
                                <li><a href=""> help </a></li>
                                <li><a href=""> mobile </a></li>
                                <li><a href=""> laptop </a></li>
                                <li><a href=""> animals </a></li>
                                <li><a href=""> clothings </a></li>
                                <li><a href=""> buy car </a></li>
                                <li><a href=""> sell car </a></li>
                                <li><a href=""> sell laptop </a></li>
                                <li><a href=""> buy cats </a></li>
                                <li><a href=""> black puppy </a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <?php $template->themeEnd(); ?>
</div>
</body>

</html>