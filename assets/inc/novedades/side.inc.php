<?php

$novedades_side = new Clases\Novedades();
$imagenes_side = new Clases\Imagenes();
$categorias_side = new Clases\Categorias();
$categorias_side->set("area", "novedades");
$categorias_data_side = $categorias_side->listForArea('');
$novedades_data_side = $novedades_side->listWithOps("", "", 5);
?>
<div class="col-md-4 col-sm-12 col-xs-12">
    <aside>
        <div class="widget">
            <div class="widget-heading"><span class="title">Categorías</span></div>
            <ul class="categories-module">
                <?php
                foreach ($categorias_data_side as $cat_side){
                    ?>
                    <li><a href=""> <?= ucfirst($cat_side['titulo']);?>  </a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="widget">
            <div class="widget-heading">
                <span class="title">Popular advertisement</span>
            </div>
            <ul class="related-post">
                <li>
                    <img src="<?= URL ?>/assets/images/footer/1.jpg" alt="post image"
                         class="img-responsive">
                    <a href="#">Canon Powershot D-SLR </a>
                    <span><i class="fa fa-folder-open-o"></i> Electronics</span>
                    <span><i class="fa fa-calendar"></i> October 07, 2016 </span>
                </li>
            </ul>
        </div>
    </aside>
</div>