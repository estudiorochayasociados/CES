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
    <?php $template->themeNav();?>
    <section class="ad-breadcrumb parallex">
        <div class="container page-banner">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h1>Product Detail Page</h1>
                </div>
                <div class="col-sm-6 col-md-6">
                    <ol class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="">Electronics</a></li>
                        <li class="active">D630 DSLR</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="ad-listing-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="detail-titile light-blue">
                        <div class="row">
                            <div class="col-xs-12 col-sm-9">
                                <div class="cat-icon">
                                    <i class="flaticon-computer"></i>
                                </div>
                                <div class="ad-name">
                                    <h3 class=""> 2016 BMW Series M Sport </h3>
                                    <div class="detail-location"><i class="fa fa-map-marker"></i> 403 Fexer Tower, United State</div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="price">$33,000</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12 nopaddingright">
                            <div class="slick-gallery-slideshow">
                                <div class="slider gallery-slideshow gallery-slideshow-not-tab">
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/camera/1.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/camera/2.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/camera/3.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/camera/4.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/animals/1.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/animals/2.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/animals/3.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/animals/4.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/animals/5.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/animals/6.jpg" alt="image" /></div>
                                    </div>
                                </div>
                                <div class="slider gallery-nav gallery-nav-not-tab">
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/camera/1.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/camera/2.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/camera/3.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/camera/4.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/animals/1.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/animals/2.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/animals/3.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/animals/4.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/animals/5.jpg" alt="image" /></div>
                                    </div>
                                    <div>
                                        <div class="image"><img src="<?=URL?>/assets/images/post-images/animals/6.jpg" alt="image" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 nopaddingleft">
                            <div class="ad-detail">
                                <div class="ad-detail-title">
                                    <h3><i class=" icon-layers"></i> Ad Detail</h3>
                                </div>
                                <div class="ad-detail-desc light-blue ">
                                    <ul>
                                        <li>
                                            <span class="pull-left">Sale Price</span>
                                            <span class="pull-right">$550</span>
                                        </li>
                                        <li>
                                            <span class="pull-left">Added Date</span>
                                            <span class="pull-right">Aug 16, 2016</span>
                                        </li>
                                        <li>
                                            <span class="pull-left">Condition</span>
                                            <span class="pull-right">10/10</span>
                                        </li>
                                        <li>
                                            <span class="pull-left">Condition</span>
                                            <span class="pull-right">10/10</span>
                                        </li>
                                        <li>
                                            <span class="pull-left">Email</span>
                                            <span class="pull-right">contact@gmail.com</span>
                                        </li>
                                        <li>
                                            <span class="pull-left">Phone</span>
                                            <span class="pull-right">+99 333 123 4567</span>
                                        </li>
                                        <li>
                                            <span class="pull-left">Model</span>
                                            <span class="pull-right">Canon D630</span>
                                        </li>
                                        <li>
                                            <span class="pull-left">Location</span>
                                            <span class="pull-right">ratigan, Vatnaam</span>
                                        </li>
                                        <li>
                                            <span class="pull-left">Views</span>
                                            <span class="pull-right">900</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ad-detail-title">
                                    <h3> <i class="icon-profile-male"></i> Posted By </h3>
                                </div>
                                <div class="business-card light-blue ">
                                    <div class="media">
                                        <div class="media-left">
                                            <img class="media-object img-circle profile-img" alt="" src="images/default-avatar.png">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Daniel Smith</h3>
                                            <div class="job">Active 5 Min Ago</div>
                                            <div class="mail"><a href="mailto:admin@scriptsbundle.com">admin@scriptsbundle.com</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-sm-12">
                            <div class="heading-inner">
                                <p class="title">Description</p>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of lorem ipsum.
                            </p>
                            <div class="heading-inner">
                                <p class="title">Specification</p>
                            </div>
                            <ul class="desc-points">
                                <li>
                                    <i class="fa fa-caret-right "></i> Being a garment merchandiser, you should be capable of executing all related merchandising activities.
                                </li>
                                <li>
                                    <i class="fa fa-caret-right "></i> You should be able to handle it with care and professionally.
                                </li>
                                <li>
                                    <i class="fa fa-caret-right "></i> Part of the duties is to prepare the samples and the budget and both of them are for approval.
                                </li>
                                <li>
                                    <i class="fa fa-caret-right "></i> Constant update and interaction with the supplies is needed.
                                </li>
                                <li>
                                    <i class="fa fa-caret-right "></i> You should also make sure that the functions of all related processes are running smoothly.
                                </li>
                            </ul>
                            <div class="heading-inner margintop70">
                                <p class="title">Latest Reviews</p>
                            </div>
                            <div class="comments-container ">
                                <ul>
                                    <li class="comment-box">
                                        <div class="col-md-2 col-sm-3 col-xs-3 comment-author-image hidden-xs">
                                            <img src="images/users/1.jpg" class="img-circle img-responsive" alt="Blog Comments Image 1">
                                        </div>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <h4>Jhon Alexander</h4>
                                            <div class="news-date"> February 12, 2016</div>
                                            <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.</p>
                                            <div class="comment-reply">
                                                <h6><a href="#write-comment" class="active-color">Reply</a></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment-box">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="col-md-2 col-sm-3 col-xs-3 comment-author-image hidden-xs">
                                                    <img src="images/users/2.jpg" class="img-circle img-responsive" alt="">
                                                </div>
                                                <div class="col-md-10 col-sm-9 col-xs-12">
                                                    <h4>Kethi Jhonson</h4>
                                                    <div class="news-date"> February 15, 2016</div>
                                                    <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.</p>
                                                    <div class="comment-reply">
                                                        <h6><a href="#write-comment" class="active-color">Reply</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <ul>
                                                <li class="comment-box">
                                                    <div class="col-md-2 col-sm-3 col-xs-3 comment-author-image hidden-xs">
                                                        <img src="images/users/1.jpg" class="img-circle img-responsive" alt="Blog Comments Image 1">
                                                    </div>
                                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                                        <h4>Kelley Waqtac</h4>
                                                        <div class="news-date"> February 12, 2016</div>
                                                        <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.</p>
                                                        <div class="comment-reply">
                                                            <h6><a href="#write-comment" class="active-color">Reply</a></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment-box">
                                                    <div class="col-md-2 col-sm-3 col-xs-3 comment-author-image hidden-xs">
                                                        <img src="images/users/2.jpg" class="img-circle img-responsive" alt="">
                                                    </div>
                                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                                        <h4>Emily Copper</h4>
                                                        <div class="news-date"> February 15, 2016</div>
                                                        <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.</p>
                                                        <div class="comment-reply">
                                                            <h6><a href="#write-comment" class="active-color">Reply</a></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment-box">
                                                    <div class="col-md-2 col-sm-3 col-xs-3 hidden-xs">
                                                        <img src="images/users/1.jpg" class="img-circle img-responsive" alt="Blog Comments Image 1">
                                                    </div>
                                                    <div class="col-md-10 col-sm-9 col-xs12">
                                                        <h4>Faselly Mohnat</h4>
                                                        <div class="news-date"> February 12, 2016</div>
                                                        <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.</p>
                                                        <div class="comment-reply">
                                                            <h6><a href="#write-comment" class="active-color">Reply</a></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="comment-box">
                                        <div class="col-md-2 col-sm-3 col-xs-3 hidden-xs">
                                            <img src="images/users/1.jpg" class="img-circle img-responsive" alt="Blog Comments Image 1">
                                        </div>
                                        <div class="col-md-10 col-sm-9 col-xs12">
                                            <h4>Alexander Mahone</h4>
                                            <div class="news-date"> February 12, 2016</div>
                                            <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.</p>
                                            <div class="comment-reply">
                                                <h6><a href="#write-comment" class="active-color">Reply</a></h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="commentform" id="write-comment">
                                    <div class="heading-inner">
                                        <p class="title"> Publish your Review</p>
                                    </div>
                                    <form class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="email" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Subject <span class="required">*</span></label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Message <span class="required">*</span></label>
                                                <textarea cols="6" rows="8" placeholder="" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <button class="btn btn-default pull-right"> Publish Review <i class="fa fa-angle-double-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <aside>
                                <div class="widget light-blue">
                                    <div class="widget-heading">
                                        <span class="title">Popular advertisement</span>
                                    </div>
                                    <ul class="related-post">
                                        <li>
                                            <img src="images/footer/1.jpg" alt="post image" class="img-responsive">
                                            <a href="#">Canon Powershot D-SLR </a>
                                            <span><i class="fa fa-folder-open-o"></i> Electronics</span>
                                            <span><i class="fa fa-calendar"></i> October 07, 2016 </span>
                                        </li>
                                        <li>
                                            <img src="images/footer/2.jpg" alt="post image" class="img-responsive">
                                            <a href="#"> Chocolate Colour Persian Kittens </a>
                                            <span><i class="fa fa-folder-open-o"></i>Animales - Cats </span>
                                            <span><i class="fa fa-calendar"></i>Sep 01, 2015 - Aug 09, 2016</span>
                                        </li>
                                        <li>
                                            <img src="images/footer/3.jpg" alt="post image" class="img-responsive">
                                            <a href="#"> A 4 Rings Premium Fast Car  </a>
                                            <span><i class="fa fa-folder-open-o"></i>Vehicle - Cars  </span>
                                            <span><i class="fa fa-calendar"></i>March 09, 2016 </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget light-blue">
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
    <?php
    $template->themeEndProfile();
    ?>
</div>
</body>
</html>
