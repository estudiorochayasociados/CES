<?php
$funcionesCrear = new Clases\PublicFunction();
$promocionCrear = new Clases\Promociones();
$zebra     = new Clases\Zebra_Image();
$imagenes  = new Clases\Imagenes();
if (isset($_POST['crear'])) {
    $cod = substr(md5(uniqid(rand())), 0, 12);
    $promocionCrear->set("cod", $cod);
    $promocionCrear->set("titulo", $funcionesCrear->antihack_mysqli(isset($_POST["titulo"]) ? $_POST["titulo"] : ''));
    $promocionCrear->set("inicio", $funcionesCrear->antihack_mysqli(isset($_POST["inicio"]) ? $_POST["inicio"] : ''));
    $promocionCrear->set("fin", $funcionesCrear->antihack_mysqli(isset($_POST["fin"]) ? $_POST["fin"] : ''));
    $promocionCrear->set("keywords", $funcionesCrear->antihack_mysqli(isset($_POST["keywords"]) ? $_POST["keywords"] : ''));
    $promocionCrear->set("descripcion", $funcionesCrear->antihack_mysqli(isset($_POST["descripcion"]) ? $_POST["descripcion"] : ''));
    $promocionCrear->set("detalle", $funcionesCrear->antihack_mysqli(isset($_POST["detalle"]) ? $_POST["detalle"] : ''));
    $promocionCrear->set("categoria", $_SESSION['usuarios']['categoria']);
    //$promocionCrear->set("subcategoria", $funcionesCrear->antihack_mysqli(isset($_POST["subcategoria"]) ? $_POST["subcategoria"] : ''));
    $promocionCrear->set("usuario", $_SESSION['usuarios']['cod']);
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
        $promocionCrear->add();
        $funcionesCrear->headerMove(URL .'/perfil/ver');
}
?>
<section class="dashboard light-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="dashboard-main-disc">
                    <div class="heading-inner">
                        <p class="title">Crear promoción</p>
                    </div>
                    <div class="row">
                        <form method="post" id="crear" enctype="multipart/form-data">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Título de la promoción <span class="required"></span></label>
                                    <input placeholder="" data-validation="length" data-validation-length="min10" class="form-control" name="titulo" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Fecha de inicio <span class="required"></span></label>
                                    <input  class="form-control" type="date" value="<?= date('Y-m-d')?>" min="<?= date('Y-m-d')?>" name="inicio" onchange="$('#fin').attr('min',$(this).val()).val($(this).val())">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Fecha de fin <span class="required"></span></label>
                                    <input id="fin" class="form-control" type="date" value="<?= date('Y-m-d')?>" name="fin">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Palabras claves dividir con "," (coma) <span class="required"></span></label>
                                    <input placeholder="Ejemplo: Promo,15%OFF" class="form-control" name="keywords" type="text">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Descripción </label>
                                    <textarea cols="6" rows="8" data-validation="length" data-validation-length="min20" placeholder="" name="descripcion" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Breve descripción </label>
                                    <textarea cols="6" rows="4" data-validation="length" data-validation-length="20-150" placeholder="" name="detalle" class="form-control"></textarea>
                                </div>
                            </div>
                            <label class="col-md-7">Imágenes:<br/>
                                <input type="file" id="file" name="files[]" multiple="multiple"  accept="image/*" />
                            </label>
                            <div class="col-md-12 col-sm-12">
                                <button class="btn btn-default pull-right" name="crear"><i class="fa fa-save"></i> Crear promoción
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>