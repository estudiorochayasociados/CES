<?php
$usuarioEdit = new Clases\Usuarios();
$funcionesEdit = new Clases\PublicFunction();
$galerias = new Clases\Galerias();
$zebra = new Clases\Zebra_Image();
$imagenes = new Clases\Imagenes();
$categorias = new Clases\Categorias();
$categorias->set("area", "rubros");
$categorias_data = $categorias->listForArea('');
$borrarImg = $funcionesEdit->antihack_mysqli(isset($_GET["borrarImg"]) ? $_GET["borrarImg"] : '');
if ($borrarImg != '') {
    $imagenes->set("id", $borrarImg);
    $imagenes->deleteSite();
    $funcionesEdit->headerMove(URL . "/perfil/editar");
}
if (isset($_POST['editar'])) {
    $usuarioEdit->set("titulo", $funcionesEdit->antihack_mysqli(isset($_POST["titulo"]) ? $_POST["titulo"] : ''));
    $usuarioEdit->set("telefono", $funcionesEdit->antihack_mysqli(isset($_POST["telefono"]) ? $_POST["telefono"] : ''));
    $usuarioEdit->set("direccion", $funcionesEdit->antihack_mysqli(isset($_POST["direccion"]) ? $_POST["direccion"] : ''));
    $usuarioEdit->set("localidad", $funcionesEdit->antihack_mysqli(isset($_POST["localidad"]) ? $_POST["localidad"] : ''));
    $usuarioEdit->set("provincia", $funcionesEdit->antihack_mysqli(isset($_POST["provincia"]) ? $_POST["provincia"] : ''));
    $usuarioEdit->set("categoria", $funcionesEdit->antihack_mysqli(isset($_POST["categoria"]) ? $_POST["categoria"] : ''));
    //$usuarioEdit->set("subcategoria", $funcionesEdit->antihack_mysqli(isset($_POST["subcategoria"]) ? $_POST["subcategoria"] : ''));
    $usuarioEdit->set("descripcion", $funcionesEdit->antihack_mysqli(isset($_POST["descripcion"]) ? $_POST["descripcion"] : ''));
    $usuarioEdit->set("facebook", $funcionesEdit->antihack_mysqli(isset($_POST["face"]) ? $_POST["face"] : ''));
    $usuarioEdit->set("twitter", $funcionesEdit->antihack_mysqli(isset($_POST["tw"]) ? $_POST["tw"] : ''));
    $usuarioEdit->set("instagram", $funcionesEdit->antihack_mysqli(isset($_POST["ins"]) ? $_POST["ins"] : ''));
    $usuarioEdit->set("cod", $_SESSION['usuarios']['cod']);
    if ($usuarioEdit->edit()) {
        $usuarioEdit->edit();
        $email = $_SESSION['usuarios']['email'];
        $pass = $_SESSION['usuarios']['password'];
        $usuarioEdit->logout();
        $usuarioEdit->set("email", $email);
        $usuarioEdit->set("password", $pass);
        $usuarioEdit->login();
        if ($_SESSION['usuarios']['estado'] == 1) {
            $funcionesEdit->headerMove(URL . '/perfil/ver');
        } else {
            $funcionesEdit->headerMove(URL . '/perfil/editar');
        }
    } else {
        echo "<div class='col-md-12'><div class='alert alert-danger'>Error </div></div>";
    }
}
if (isset($_POST['editarPass'])) {
    $email = $_SESSION['usuarios']['email'];
    $passV = $funcionesEdit->antihack_mysqli(isset($_POST["passV"]) ? $_POST["passV"] : '');
    $usuarioEdit->set("email", $email);
    $usuarioEdit->set("password", $passV);
    $usuarioEdit->set("cod", $_SESSION['usuarios']['cod']);
    if ($usuarioEdit->login()) {
        $usuarioEdit->set("password", $funcionesEdit->antihack_mysqli(isset($_POST["passN"]) ? $_POST["passN"] : ''));
        $usuarioEdit->editPass();
        $usuarioEdit->logout();
        $usuarioEdit->login();
        if ($_SESSION['usuarios']['estado'] == 1) {
            $funcionesEdit->headerMove(URL . '/perfil/ver');
        } else {
            $funcionesEdit->headerMove(URL . '/perfil/editar');
        }
    } else {
        echo "<div class='col-md-12'><div class='alert alert-danger'>Contraseña incorrecta </div></div>";
    }
}
if (isset($_POST['editarMail'])) {
    $emailV = $funcionesEdit->antihack_mysqli(isset($_POST["emailV"]) ? $_POST["emailV"] : '');
    $emailN = $funcionesEdit->antihack_mysqli(isset($_POST["emailN"]) ? $_POST["emailN"] : '');
    $usuarioEdit->set("email", $emailV);
    $usuarioEdit->set("password", $_SESSION['usuarios']['password']);
    $usuarioEdit->set("cod", $_SESSION['usuarios']['cod']);
    if ($usuarioEdit->login()) {
        $usuarioEdit->set("email", $funcionesEdit->antihack_mysqli(isset($_POST["emailN"]) ? $_POST["emailN"] : ''));
        $usuarioEdit->editMail();
        $usuarioEdit->logout();
        $usuarioEdit->login();
        if ($_SESSION['usuarios']['estado'] == 1) {
            $funcionesEdit->headerMove(URL . '/perfil/ver');
        } else {
            $funcionesEdit->headerMove(URL . '/perfil/editar');
        }
    } else {
        echo "<div class='col-md-12'><div class='alert alert-danger'>Contraseña incorrecta </div></div>";
    }
}
if (isset($_POST['editarLogo'])) {
    $cod = $_SESSION['usuarios']['cod'];
    foreach ($_FILES['files']['name'] as $f => $name) {
        $imgInicio = $_FILES["files"]["tmp_name"][$f];
        $tucadena = $_FILES["files"]["name"][$f];
        $partes = explode(".", $tucadena);
        $dom = (count($partes) - 1);
        $dominio = $partes[$dom];
        $prefijo = substr(md5(uniqid(rand())), 0, 10);
        if ($dominio != '') {
            $destinoFinal = "assets/archivos/" . $prefijo . "." . $dominio;
            move_uploaded_file($imgInicio, $destinoFinal);
            chmod($destinoFinal, 0777);
            $destinoRecortado = "assets/archivos/recortadas/a_" . $prefijo . "." . $dominio;

            $zebra->source_path = $destinoFinal;
            $zebra->target_path = $destinoRecortado;
            $zebra->jpeg_quality = 80;
            $zebra->preserve_aspect_ratio = true;
            $zebra->enlarge_smaller_images = true;
            $zebra->preserve_time = true;

            if ($zebra->resize(800, 700, ZEBRA_IMAGE_NOT_BOXED)) {
                unlink($destinoFinal);
            }

            $imagenes->set("cod", $cod);
            $imagenes->set("ruta", str_replace("../", "", $destinoRecortado));
            $imagenes->add();
        }
    }
    if ($_SESSION['usuarios']['estado'] == 1) {
        $funcionesEdit->headerMove(URL . '/perfil/ver');
    } else {
        $funcionesEdit->headerMove(URL . '/perfil/editar');
    }
}
if (isset($_POST['crear_galerias'])) {
    $count = 0;
    $cod = substr(md5(uniqid(rand())), 0, 10);

    $galerias->set("cod", $cod);
    $galerias->set("usuario", $_SESSION['usuarios']['cod']);
    $galerias->set("titulo", "Perfil empresa");
    $galerias->set("desarrollo", $_SESSION['usuarios']['titulo']);

    foreach ($_FILES['files']['name'] as $f => $name) {
        $imgInicio = $_FILES["files"]["tmp_name"][$f];
        $tucadena = $_FILES["files"]["name"][$f];
        $partes = explode(".", $tucadena);
        $dom = (count($partes) - 1);
        $dominio = $partes[$dom];
        $prefijo = substr(md5(uniqid(rand())), 0, 10);
        if ($dominio != '') {
            $destinoFinal = "assets/archivos/" . $prefijo . "." . $dominio;
            move_uploaded_file($imgInicio, $destinoFinal);
            chmod($destinoFinal, 0777);
            $destinoRecortado = "assets/archivos/recortadas/a_" . $prefijo . "." . $dominio;

            $zebra->source_path = $destinoFinal;
            $zebra->target_path = $destinoRecortado;
            $zebra->jpeg_quality = 80;
            $zebra->preserve_aspect_ratio = true;
            $zebra->enlarge_smaller_images = true;
            $zebra->preserve_time = true;

            if ($zebra->resize(800, 700, ZEBRA_IMAGE_NOT_BOXED)) {
                unlink($destinoFinal);
            }

            $imagenes->set("cod", $cod);
            $imagenes->set("ruta", str_replace("../", "", $destinoRecortado));
            $imagenes->add();
        }

        $count++;
    }

    $galerias->add();
    if ($_SESSION['usuarios']['estado'] == 1) {
        $funcionesEdit->headerMove(URL . '/perfil/ver');
    } else {
        $funcionesEdit->headerMove(URL . '/perfil/editar');
    }
}
?>
<section class="dashboard light-blue">
    <div class="container">
        <div class="row">
            <?php
            if ($_SESSION['usuarios']['estado'] == 0) {
                ?>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="alert alert-danger" role="alert">
                        Completar el perfil y esperar a ser dado de alta.
                    </div>
                </div>
                <?php
            }
            ?>
            <div class="col-md-4 col-sm-12 col-xs-12 col-md-push-8">
                <div class="main-box profile-box-contact">
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                        <form method="post" id="editarLogo" enctype="multipart/form-data">

                            <div class="col-md-12 col-sm-12">
                                <div class="heading-inner">
                                    <p class="title">Logotipo</p>
                                </div>
                            </div>
                            <label class="col-md-7">Logo:<br/>
                                <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*"/>
                            </label>
                            <div class="col-md-12 col-sm-12 mb-10" style="display: flex; justify-content: center;">
                                <button class="btn btn-default pull-right" name="editarLogo"><i class="fa fa-save"></i>
                                    Guardar logotipo
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="main-box profile-box-contact">
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                        <form method="post" id="editarPass">
                            <div class="col-md-12 col-sm-12">
                                <div class="heading-inner">
                                    <p class="title">Cambiar contraseña</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Contraseña antigua <span class="required">*</span></label>
                                    <input type="password" data-validation="length" data-validation-length="min8"
                                           placeholder="" class="form-control" name="passV">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Nueva contraseña <span class="required">*</span></label>
                                    <input type="password" data-validation="length" data-validation-length="min8"
                                           placeholder="" class="form-control" name="passN">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Confirmar contraseña <span class="required">*</span></label>
                                    <input type="password" data-validation="length" data-validation-length="min8"
                                           placeholder="" class="form-control" name="passNC">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 mb-10" style="display: flex; justify-content: center;">
                                <button class="btn btn-default pull-right" name="editarPass"><i class="fa fa-save"></i>
                                    Guardar contraseña
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="main-box profile-box-contact">
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                        <form method="post" id="editarMail">
                            <div class="col-md-12 col-sm-12">
                                <div class="heading-inner">
                                    <p class="title">Cambiar email</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Email antiguo <span class="required">*</span></label>
                                    <input placeholder="" data-validation="email" class="form-control" name="emailV">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Nuevo email <span class="required">*</span></label>
                                    <input placeholder="" data-validation="email" class="form-control" name="emailN">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 mb-10" style="display: flex; justify-content: center;">
                                <button class="btn btn-default pull-right" name="editarMail"><i class="fa fa-save"></i>
                                    Guardar email
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 col-md-pull-4">
                <div class="dashboard-main-disc">
                    <div class="heading-inner">
                        <p class="title">Editar perfil</p>
                    </div>
                    <div class="row">
                        <form method="post" id="editar">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label> Título de la empresa <span class="required">*</span></label>
                                    <input placeholder="Ingresar título" data-validation="required" class="form-control"
                                           name="titulo" type="text"
                                           value="<?= $_SESSION['usuarios']['titulo'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Teléfono <span class="required">*</span></label>
                                    <input placeholder="Ingresar teléfono" data-validation="number" class="form-control"
                                           name="telefono"
                                           type="text" value="<?= $_SESSION['usuarios']['telefono'] ?>">
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Dirección <span class="required">*</span></label>
                                    <input placeholder="Ingresar dirección" data-validation="required"
                                           class="form-control" name="direccion"
                                           type="text" value="<?= $_SESSION['usuarios']['direccion'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Ciudad <span class="required">*</span></label>
                                    <select class="select-general form-control" data-validation="required"
                                            name="localidad">
                                        <option label="Select Option"></option>
                                        <option value="<?= $_SESSION['usuarios']['localidad'] ?>"
                                                selected><?= $_SESSION['usuarios']['localidad'] ?></option>
                                        <option value="San Francisco">San Francisco</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Provincia <span class="required">*</span></label>
                                    <select class="select-general form-control" data-validation="required"
                                            name="provincia">
                                        <option label="Select Option"></option>
                                        <option value="<?= $_SESSION['usuarios']['provincia'] ?>"
                                                selected><?= $_SESSION['usuarios']['provincia'] ?></option>
                                        <option value="Córdoba">Córdoba</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Categoria: <span class="required">*</span></label>
                                    <select class="select-general form-control" data-validation="required"
                                            name="categoria">
                                        <option label="Select Option"></option>
                                        <?php
                                        $categorias->set("cod", $_SESSION['usuarios']['categoria']);
                                        $categoria_user = $categorias->view();
                                        ?>
                                        <option value="<?= $categoria_user['cod']; ?>"
                                                selected><?= ucfirst($categoria_user['titulo']); ?></option>
                                        <?php
                                        foreach ($categorias_data as $cat) {
                                            ?>
                                            <option value="<?= $cat['cod']; ?>"><?= ucfirst($cat['titulo']); ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Descripción <span class="required">*</span></label>
                                    <textarea cols="6" rows="8" data-validation="required" placeholder=""
                                              name="descripcion"
                                              class="form-control"><?= $_SESSION['usuarios']['descripcion'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="heading-inner">
                                    <p class="title">Redes sociales enlaces</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Facebook </label>
                                    <input placeholder=" Ingresar link de Facebook" name="face" class="form-control"
                                           value="<?= $_SESSION['usuarios']['facebook'] ?>" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Twitter </label>
                                    <input placeholder="Ingresar link de Twitter" name="tw" class="form-control"
                                           value="<?= $_SESSION['usuarios']['twitter'] ?>" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Instagram <span class="required">*</span></label>
                                    <input placeholder=" Ingresar link de Instagram" name="ins" class="form-control"
                                           value="<?= $_SESSION['usuarios']['instagram'] ?>" type="text">
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <button class="btn btn-default pull-right" name="editar"><i class="fa fa-save"></i>
                                    Guardar perfil
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="dashboard light-blue ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="dashboard-main-disc">
                    <div class="row">
                        <form method="post" id="crear_galerias" enctype="multipart/form-data">

                            <div class="col-md-12 col-sm-12">
                                <div class="heading-inner">
                                    <p class="title">Galerías</p>
                                </div>
                            </div>
                            <?php
                            $galerias->set("usuario", $_SESSION['usuarios']['cod']);
                            $gal = $galerias->view_perfil();
                            $imagenes->set("cod", $gal['cod']);
                            ?>
                            <div class="col-md-12 col-sm-12">
                                <?php
                                $imagenes->imagenesProfile();
                                ?>
                            </div>
                            <label class="col-md-7">Imágenes:<br/>
                                <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*"/>
                            </label>
                            <div class="col-md-12 col-sm-12">
                                <button class="btn btn-default pull-right" name="crear_galerias"><i
                                            class="fa fa-save"></i>
                                    Guardar galerías
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>