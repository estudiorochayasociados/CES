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
    <?php
    /* if (@count($categoriasData) == 8) {
         ?>
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
                                             <?php
                                             $cont = 1;
                                             foreach ($categoriasData as $cats) {
                                                 ?>
                                                 <li class="<?php if ($cont == 1) {
                                                     echo 'active';
                                                 } ?>">
                                                     <a href="<?= '#tab' . $cont ?>" data-toggle="tab">
                                                         <i class="flaticon-dog" data-toggle="tooltip" data-placement="left" title="Tooltip on left"></i>
                                                         <div class="hidden-xs hidden-sm"><?= ucfirst($cats['titulo']); ?></div>
                                                     </a>
                                                 </li>
                                                 <?php
                                                 $cont++;
                                             }
                                             ?>
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
                                                         <div class="listing-image"><img src="<?= URL ?>/assets/images/post-images/animals/1.jpg" class="img-responsive" alt="image"/></div>
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
                                                 <div class="clearfix visible-sm"></div>
                                             </div>
                                         </div>
                                         <div class="tab-pane animated fadeInDown" id="tab2">
                                             <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                                 <div class="listing-post">
                                                     <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                         <div class="listing-image"><img src="<?= URL ?>/assets/images/post-images/laptops/3.jpg" class="img-responsive" alt="image"/></div>
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
                                                 <div class="clearfix visible-sm"></div>
                                             </div>
                                         </div>
                                         <div class="tab-pane  animated fadeInLeft" id="tab3">
                                             <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                                 <div class="listing-post">
                                                     <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                         <div class="listing-image"><img src="<?= URL ?>/assets/images/post-images/laptops/5.jpg" class="img-responsive" alt="image"/></div>
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
                                                 <div class="clearfix visible-sm"></div>
                                             </div>
                                         </div>
                                         <div class="tab-pane animated fadeInUp" id="tab4">
                                             <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                                 <div class="listing-post">
                                                     <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                         <div class="listing-image"><img src="<?= URL ?>/assets/images/post-images/jobs/1.jpg" class="img-responsive" alt="image"/></div>
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
                                                 <div class="clearfix visible-sm"></div>
                                             </div>
                                         </div>
                                         <div class="tab-pane animated fadeInRight" id="tab5">
                                             <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                                 <div class="listing-post">
                                                     <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                         <div class="listing-image"><img src="<?= URL ?>/assets/images/post-images/house/1.jpg" class="img-responsive" alt="image"/></div>
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
                                                 <div class="clearfix visible-sm"></div>
                                             </div>
                                         </div>
                                         <div class="tab-pane animated fadeInUp" id="tab6">
                                             <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                                 <div class="listing-post">
                                                     <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                         <div class="listing-image"><img src="<?= URL ?>/assets/images/post-images/cars/1.jpg" class="img-responsive" alt="image"/></div>
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
                                                 <div class="clearfix visible-sm"></div>
                                             </div>
                                         </div>
                                         <div class="tab-pane animated fadeInUp" id="tab7">
                                             <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                                 <div class="listing-post">
                                                     <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                         <div class="listing-image"><img src="<?= URL ?>/assets/images/post-images/sports/1.jpg" class="img-responsive" alt="image"/></div>
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
                                                 <div class="clearfix visible-sm"></div>
                                             </div>
                                         </div>
                                         <div class="tab-pane animated fadeInRight" id="tab8">
                                             <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                                 <div class="listing-post">
                                                     <div class="col-md-3 col-sm-12 col-xs-12 nopadding">
                                                         <div class="listing-image"><img src="<?= URL ?>/assets/images/post-images/cloths/1.jpg" class="img-responsive" alt="image"/></div>
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
                                                 <div class="clearfix visible-sm"></div>
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

         <?php
     }
    */
    ?>
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

