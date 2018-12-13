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
                                <h3 class=""> <?= $_SESSION['usuarios']['titulo']; ?> </h3>
                                <?php
                                if ($_SESSION['usuarios']['direccion'] == '') {
                                    ?>
                                    <?php
                                } else {
                                    ?>
                                    <div class="detail-location"><i
                                                class="fa fa-map-marker"></i> <?= $_SESSION['usuarios']['direccion']; ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--  <div class="col-md-8 col-sm-12 col-xs-12 nopaddingright">
                            <div class="slick-gallery-slideshow">
                                <div class="slider gallery-slideshow gallery-slideshow-not-tab">
                                    <div>
                                        <div class="image"><img src="<?= URL ?>/assets/images/post-images/camera/1.jpg" alt="image" /></div>
                                    </div>
                                </div>
                                <div class="slider gallery-nav gallery-nav-not-tab">
                                    <div>
                                        <div class="image"><img src="<?= URL ?>/assets/images/post-images/camera/1.jpg" alt="image" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                -->
                    <div class="col-md-8 col-sm-12 col-xs-12 nopaddingright">
                        <div class="slick-gallery-slideshow">
                            <div class="slider gallery-slideshow gallery-slideshow-not-tab">
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/camera/1.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/camera/2.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/camera/3.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/camera/4.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/animals/1.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/animals/2.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/animals/3.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/animals/4.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/animals/5.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/animals/6.jpg"
                                                            alt="image"/></div>
                                </div>
                            </div>
                            <div class="slider gallery-nav gallery-nav-not-tab">
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/camera/1.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/camera/2.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/camera/3.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/camera/4.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/animals/1.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/animals/2.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/animals/3.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/animals/4.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/animals/5.jpg"
                                                            alt="image"/></div>
                                </div>
                                <div>
                                    <div class="image"><img src="<?= URL ?>/assets/images/post-images/animals/6.jpg"
                                                            alt="image"/></div>
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
                                        <span class="pull-left">Email</span>
                                        <span class="pull-right"><?= $_SESSION['usuarios']['email']; ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">Teléfono</span>
                                        <span class="pull-right"><?= $_SESSION['usuarios']['telefono']; ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">Dirección</span>
                                        <span class="pull-right"><?= $_SESSION['usuarios']['direccion'] . ', ' . $_SESSION['usuarios']['localidad']; ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">categoria</span>
                                        <span class="pull-right"><?= $_SESSION['usuarios']['categoria']; ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">subcategoria</span>
                                        <span class="pull-right"><?= $_SESSION['usuarios']['subcategoria']; ?></span>
                                    </li>
                                    <li>
                                        <span class="pull-left"></span>
                                    </li>
                                </ul>
                                <ul class="social-network social-circle onwhite">
                                    <ul class="social-icons icon-circle list-unstyled list-inline">

                                        <li><a href="<?= $_SESSION['usuarios']['facebook'] ?>"><i
                                                        class="fa fa-facebook"></i></a></li>

                                        <li><a href="<?= $_SESSION['usuarios']['twitter'] ?>"><i
                                                        class="fa fa-instagram"></i></a></li>

                                        <li><a href="<?= $_SESSION['usuarios']['instagram'] ?>"><i
                                                        class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </ul>
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
                            <?= ucfirst($_SESSION['usuarios']['descripcion']); ?>
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <aside>
                            <div class="widget light-blue">
                                <div class="widget-heading">
                                    <span class="title">Promociones activas</span>
                                </div>
                                <ul class="related-post">
                                    <li>
                                        <img src="<?= URL ?>/assets/images/footer/1.jpg" alt="post image"
                                             class="img-responsive">
                                        <a href="#">Canon Powershot D-SLR </a>
                                        <span><i class="fa fa-folder-open-o"></i> Electronics</span>
                                        <span><i class="fa fa-calendar"></i> October 07, 2016 </span>
                                    </li>
                                    <li>
                                        <img src="<?= URL ?>/assets/images/footer/2.jpg" alt="post image"
                                             class="img-responsive">
                                        <a href="#"> Chocolate Colour Persian Kittens </a>
                                        <span><i class="fa fa-folder-open-o"></i>Animales - Cats </span>
                                        <span><i class="fa fa-calendar"></i>Sep 01, 2015 - Aug 09, 2016</span>
                                    </li>
                                    <li>
                                        <img src="<?= URL ?>/assets/images/footer/3.jpg" alt="post image"
                                             class="img-responsive">
                                        <a href="#"> A 4 Rings Premium Fast Car </a>
                                        <span><i class="fa fa-folder-open-o"></i>Vehicle - Cars  </span>
                                        <span><i class="fa fa-calendar"></i>March 09, 2016 </span>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
