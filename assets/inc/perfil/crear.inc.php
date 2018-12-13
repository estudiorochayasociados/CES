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
    $promocionCrear->set("categoria", $funcionesCrear->antihack_mysqli(isset($_POST["categoria"]) ? $_POST["categoria"] : ''));
    $promocionCrear->set("subcategoria", $funcionesCrear->antihack_mysqli(isset($_POST["subcategoria"]) ? $_POST["subcategoria"] : ''));
    $promocionCrear->set("usuario", $_SESSION['usuarios']['cod']);
    if ($promocionCrear->add()) {
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

            $count++;
        }
        $promocionCrear->add();
        //$funcionesEdit->headerMove(URL .'/perfil/ver');
    } else{
        echo "<div class='col-md-12'><div class='alert alert-danger'>Error </div></div>";
    }
}
?>
<section class="dashboard light-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 col-md-push-8">
                <div class="main-box profile-box-contact">
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                        <div class="profile-box-header blue-bg">
                            <div class="col-md-12 col-sm-7 col-xs-12">
                                <img src="images/users/6.jpg" alt="" class="profile-img img-responsive"/>
                                <h2>Jessica Daisy</h2>
                                <ul class="contact-details">
                                    <li>
                                        <i class="fa fa-map-marker"></i> UK London
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i> jessica@admin.com
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i> (123) 000-9876
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 col-sm-5 col-xs-12">
                                <div class="profile-btn">
                                    <a class="btn" href=""> <i class="fa fa-envelope-o"></i> Message </a>
                                    <a href="" class="btn"> <i class="fa fa-user-plus"></i> Follow </a>
                                </div>
                                <ul class="social-network social-circle onwhite">
                                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li><a href="#" class="icoLinkedin" title="Linkedin +"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                        <div class="profile-box-footer">
                            <a href="#">
                                <span class="value">783</span>
                                <span class="label">Ads Posted</span>
                            </a>
                            <a href="#">
                                <span class="value">912</span>
                                <span class="label">Followers</span>
                            </a>
                            <a href="#">
                                <span class="value">83</span>
                                <span class="label">Messages</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 col-md-pull-4">
                <div class="dashboard-main-disc">
                    <div class="heading-inner">
                        <p class="title">Crear promoción</p>
                    </div>
                    <div class="row">
                        <form method="post" id="crear" enctype="multipart/form-data">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Título de la promoción <span class="required"></span></label>
                                    <input placeholder="" class="form-control" name="titulo" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Fecha de inicio <span class="required"></span></label>
                                    <input type="date" name="inicio">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Fecha de fin <span class="required"></span></label>
                                    <input type="date" name="fin">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Palabras claves para hashtags dividir con "," <span class="required"></span></label>
                                    <input placeholder="Ejemplo: Promo,15%OFF" class="form-control" name="keywords" type="text">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Descripción </label>
                                    <textarea cols="6" rows="8" placeholder="" name="descripcion" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Breve descripción </label>
                                    <textarea cols="6" rows="4" placeholder="" name="detalle" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Categoria </label>
                                    <select class="select-general form-control" name="categoria">
                                        <option label="Select Option"></option>
                                        <option value="0">France</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Subcategoria </label>
                                    <select class="select-general form-control" name="subcategoria">
                                        <option label="Select Option"></option>
                                        <option value="0">France</option>
                                    </select>
                                </div>
                            </div>
                            <label class="col-md-7">Imágenes:<br/>
                                <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
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