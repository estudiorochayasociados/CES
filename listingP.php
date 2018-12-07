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
                    <h1>Promociones</h1>
                </div>
                <div class="col-sm-6 col-md-6">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?=URL?>/inicio">Inicio</a></li>
                        <li class="active">Promociones</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="papular-post light-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="papular-reviews">
                            <a href="#">
                                <div class="image">
                                    <img alt="Tour Package" src="<?=URL?>/assets/images/post-images/jobs/1.jpg" class="img-responsive">
                                </div>
                                <div class="content">
                                    <span class="cat"><i class="flaticon-interface"></i></span>
                                    <h4> Technical Network ad Director Required </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="papular-reviews">
                            <a href="#">
                                <div class="image">
                                    <img alt="cars Package" src="<?=URL?>/assets/images/post-images/cars/3.jpg" class="img-responsive">
                                    <div class="absolute-in-image">
                                        <div class="duration"><span>$4500</span></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <span class="cat"><i class="flaticon-transport-8"></i></span>
                                    <h4> 2017 BMW S90 T6 Inscription  For sale</h4>
                                    <div class="rating-wrapper">
                                        <div class="raty-wrapper">
                                            <div class="star-rating-read-only" title="good"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i> <i class="fa fa-star-o"></i> </div>
                                            <span> / 26 review </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="papular-reviews">
                            <a href="#">
                                <div class="image">
                                    <img alt="Tour Package" src="<?=URL?>/assets/images/post-images/camera/4.jpg" class="img-responsive">
                                    <div class="absolute-in-image">
                                        <div class="duration"><span>$500</span></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <span class="cat"><i class="flaticon-technology-23"></i></span>
                                    <h4>Canon Powershot A Great D-SLR for sale</h4>
                                    <div class="rating-wrapper">
                                        <div class="raty-wrapper">
                                            <div class="star-rating-read-only" title="good"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                            <span> / 19 review </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="papular-reviews">
                            <a href="#">
                                <div class="image">
                                    <img alt="Tour Package" src="<?=URL?>/assets/images/post-images/laptops/1.jpg" class="img-responsive">
                                    <div class="absolute-in-image">
                                        <div class="duration"><span>$900</span></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <span class="cat"><i class="flaticon-computer"></i></span>
                                    <h4>Dell - Spectre x360 Touch-Screen For sale</h4>
                                    <div class="rating-wrapper">
                                        <div class="raty-wrapper">
                                            <div class="star-rating-read-only" title="good"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                            <span> / 05 review </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="papular-reviews">
                            <a href="#">
                                <div class="image">
                                    <img alt="Tour Package" src="<?=URL?>/assets/images/post-images/house/2.jpg" class="img-responsive">
                                    <div class="absolute-in-image">
                                        <div class="duration"><span>$6500</span></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <span class="cat"><i class="flaticon-construction"></i></span>
                                    <h4>A banglo apartment with garden On Rent Bases</h4>
                                    <div class="rating-wrapper">
                                        <div class="raty-wrapper">
                                            <div class="star-rating-read-only" title="good"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                            <span> / 20 review </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="papular-reviews">
                            <a href="#">
                                <div class="image">
                                    <img alt="Tour Package" src="<?=URL?>/assets/images/post-images/cloths/3.jpg" class="img-responsive">
                                    <div class="absolute-in-image">
                                        <div class="duration"><span>$750</span></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <span class="cat"><i class="flaticon-clothes-3"></i></span>
                                    <h4> A multi pocket Jacket for mens on sale  </h4>
                                    <div class="rating-wrapper">
                                        <div class="raty-wrapper">
                                            <div class="star-rating-read-only" title="good"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                            <span> / 06 review </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="papular-reviews">
                            <a href="#">
                                <div class="image">
                                    <img alt="Tour Package" src="<?=URL?>/assets/images/post-images/animals/4.jpg" class="img-responsive">
                                    <div class="absolute-in-image">
                                        <div class="duration"><span>$400</span></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <span class="cat"><i class="flaticon-dog-1"></i></span>
                                    <h4>A Beautiful Zuchon Puppies Available</h4>
                                    <div class="rating-wrapper">
                                        <div class="raty-wrapper">
                                            <div class="star-rating-read-only" title="good"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                            <span> / 20 review </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="papular-reviews">
                            <a href="#">
                                <div class="image">
                                    <img alt="Tour Package" src="<?=URL?>/assets/images/post-images/laptops/1.jpg" class="img-responsive">
                                    <div class="absolute-in-image">
                                        <div class="duration"><span>$900</span></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <span class="cat"><i class="flaticon-computer"></i></span>
                                    <h4>Dell - Spectre x360 Touch-Screen For sale</h4>
                                    <div class="rating-wrapper">
                                        <div class="raty-wrapper">
                                            <div class="star-rating-read-only" title="good"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                            <span> / 05 review </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="load-more-btn">
                            <button class="btn-default"> View More <i class="fa fa-angle-double-right"></i> </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <aside>
                        <div class="widget">
                            <div class="widget-heading"><span class="title"> Search Product </span></div>
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
                        <div class="widget">
                            <div class="widget-heading"><span class="title">Hot Categories</span></div>
                            <ul class="categories-module">
                                <li> <a href=""> Computer and IT <span>121</span> </a> </li>
                                <li> <a href=""> Animal <span>54</span> </a> </li>
                                <li> <a href=""> Electronics<span>313</span> </a> </li>
                                <li> <a href=""> Real Estate<span>23</span> </a> </li>
                                <li> <a href=""> Mobile / Laptop <span>142</span> </a> </li>
                                <li> <a href=""> Car / Bike <span>120</span> </a> </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="widget-heading">
                                <span class="title">Popular advertisement</span>
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
    <?php $template->themeEndListingP(); ?>
</div>
</body>

</html>
