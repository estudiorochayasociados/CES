<?php
$funciones = new Clases\PublicFunction();
$promocion = new Clases\Promociones();
$zebra     = new Clases\Zebra_Image();
$imagenes  = new Clases\Imagenes();

$borrarImg = $funciones->antihack_mysqli(isset($_GET["borrarImg"]) ? $_GET["borrarImg"] : '');

$cod = isset($_GET["promocion"]) ? $_GET["promocion"] : '';

$promocion->set("cod",$cod);
$promo=$promocion->view();

$imagenes->set("cod",$cod);
if ($borrarImg != '') {
    $imagenes->set("id", $borrarImg);
    $imagenes->deleteSite();
    $funciones->headerMove(URL . "/perfil/modificar&promocion=' . $cod");
}

if (isset($_POST['modificar'])) {
    $promocion->set("cod", $cod);
    $promocion->set("titulo", $funciones->antihack_mysqli(isset($_POST["titulo"]) ? $_POST["titulo"] : ''));
    $promocion->set("inicio", $funciones->antihack_mysqli(isset($_POST["inicio"]) ? $_POST["inicio"] : ''));
    $promocion->set("fin", $funciones->antihack_mysqli(isset($_POST["fin"]) ? $_POST["fin"] : ''));
    $promocion->set("keywords", $funciones->antihack_mysqli(isset($_POST["keywords"]) ? $_POST["keywords"] : ''));
    $promocion->set("descripcion", $funciones->antihack_mysqli(isset($_POST["descripcion"]) ? $_POST["descripcion"] : ''));
    $promocion->set("detalle", $funciones->antihack_mysqli(isset($_POST["detalle"]) ? $_POST["detalle"] : ''));
    $promocion->set("categoria", $funciones->antihack_mysqli(isset($_POST["categoria"]) ? $_POST["categoria"] : ''));
    //$promocion->set("subcategoria", $funciones->antihack_mysqli(isset($_POST["subcategoria"]) ? $_POST["subcategoria"] : ''));
    $promocion->set("usuario", $_SESSION['usuarios']['cod']);
    foreach ($_FILES['files']['name'] as $f => $name) {
        $imgInicio = $_FILES["files"]["tmp_name"][$f];
        $tucadena  = $_FILES["files"]["name"][$f];
        $partes    = explode(".", $tucadena);
        $dom       = (count($partes) - 1);
        $dominio   = $partes[$dom];
        $prefijo   = substr(md5(uniqid(rand())), 0, 10);
        if ($dominio != '') {
            $destinoFinal = "assets/archivos/" . $prefijo . "." . $dominio;
            move_uploaded_file($imgInicio, $destinoFinal);
            chmod($destinoFinal, 0777);
            $destinoRecortado = "assets/archivos/recortadas/a_" . $prefijo . "." . $dominio;

            $zebra->source_path            = $destinoFinal;
            $zebra->target_path            = $destinoRecortado;
            $zebra->jpeg_quality           = 80;
            $zebra->preserve_aspect_ratio  = true;
            $zebra->enlarge_smaller_images = true;
            $zebra->preserve_time          = true;

            if ($zebra->resize(800, 700, ZEBRA_IMAGE_NOT_BOXED)) {
                unlink($destinoFinal);
            }

            $imagenes->set("cod", $cod);
            $imagenes->set("ruta", str_replace("../", "", $destinoRecortado));
            $imagenes->add();
        }
    }
    $promocion->edit();
    $funciones->headerMove(URL .'/perfil/modificar&promocion=' . $cod);
}

?>
<section class="dashboard light-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="dashboard-main-disc">
                    <div class="heading-inner">
                        <p class="title"> Modificar promoción</p>
                    </div>
                    <div class="row">
                        <form method="post" id="modificar" enctype="multipart/form-data">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Título de la promoción <span class="required"></span></label>
                                    <input placeholder="" data-validation="length" data-validation-length="min20" value="<?=$promo['titulo'];?>" class="form-control" name="titulo" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Fecha de inicio <span class="required"></span></label>
                                    <input class="form-control" type="date" min="<?= date('Y-m-d')?>" name="inicio" onchange="$('#fin').attr('min',$(this).val()).val($(this).val())">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Fecha de fin <span class="required"></span></label>
                                    <input id="fin" class="form-control" type="date" name="fin">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Palabras claves para hashtags dividir con "," <span class="required"></span></label>
                                    <input placeholder="Ejemplo: Promo,15%OFF" value="<?=$promo['keywords'];?>" class="form-control" name="keywords" type="text">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Descripción </label>
                                    <textarea cols="6" rows="8" placeholder="" data-validation="length" data-validation-length="min50" value="<?=$promo['descripcion'];?> name="descripcion" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Breve descripción </label>
                                    <textarea cols="6" rows="4" placeholder="" data-validation="length" data-validation-length="50-800" value="<?=$promo['detalle'];?> name="detalle" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <?php
                                $imagenes->imagenesSite();
                                ?>
                            </div>
                            <label class="col-md-7">Imágenes:<br/>
                                <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
                            </label>
                            <div class="col-md-12 col-sm-12">
                                <button class="btn btn-default pull-right" name="modificar"><i class="fa fa-save"></i> Guardar promoción
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
