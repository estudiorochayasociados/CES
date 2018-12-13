<?php
$usuarioEdit = new Clases\Usuarios();
$funcionesEdit = new Clases\PublicFunction();
if (isset($_POST['editar'])) {
    $usuarioEdit->set("titulo", $funcionesEdit->antihack_mysqli(isset($_POST["titulo"]) ? $_POST["titulo"] : ''));
    $usuarioEdit->set("telefono", $funcionesEdit->antihack_mysqli(isset($_POST["telefono"]) ? $_POST["telefono"] : ''));
    $usuarioEdit->set("direccion", $funcionesEdit->antihack_mysqli(isset($_POST["direccion"]) ? $_POST["direccion"] : ''));
    $usuarioEdit->set("localidad", $funcionesEdit->antihack_mysqli(isset($_POST["localidad"]) ? $_POST["localidad"] : ''));
    $usuarioEdit->set("provincia", $funcionesEdit->antihack_mysqli(isset($_POST["provincia"]) ? $_POST["provincia"] : ''));
    $usuarioEdit->set("categoria", $funcionesEdit->antihack_mysqli(isset($_POST["categoria"]) ? $_POST["categoria"] : ''));
    $usuarioEdit->set("subcategoria", $funcionesEdit->antihack_mysqli(isset($_POST["subcategoria"]) ? $_POST["subcategoria"] : ''));
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
        $funcionesEdit->headerMove(URL .'/perfil/ver');
    } else{
        echo "<div class='col-md-12'><div class='alert alert-danger'>Error </div></div>";
    }
}
if (isset($_POST['editarPass'])){
    $email = $_SESSION['usuarios']['email'];
    $passV = $funcionesEdit->antihack_mysqli(isset($_POST["passV"]) ? $_POST["passV"] : '');
    $usuarioEdit->set("email", $email);
    $usuarioEdit->set("password", $passV);
    $usuarioEdit->set("cod", $_SESSION['usuarios']['cod']);
    if ($usuarioEdit->login()){
        $usuarioEdit->set("password",$funcionesEdit->antihack_mysqli(isset($_POST["passN"]) ? $_POST["passN"] : ''));
        $usuarioEdit->edit();
        $usuarioEdit->logout();
        $usuarioEdit->login();
        $funcionesEdit->headerMove(URL .'/perfil/ver');
    }else{
        echo "<div class='col-md-12'><div class='alert alert-danger'>Contraseña incorrecta </div></div>";
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
                                <img src="<?= URL ?>/assets/images/users/6.jpg" alt=""
                                     class="profile-img img-responsive"/>
                                <h2><?= ucfirst($_SESSION['usuarios']['titulo']); ?></h2>
                                <ul class="contact-details">
                                    <?php
                                    if ($_SESSION['usuarios']['direccion'] == '') {
                                        ?>
                                        <?php
                                    } else {
                                        ?>
                                        <li>
                                            <i class="fa fa-map-marker"></i><?= $_SESSION['usuarios']['direccion'] ?>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                    <li>
                                        <i class="fa fa-envelope"></i> <?= $_SESSION['usuarios']['email'] ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i> <?= $_SESSION['usuarios']['telefono'] ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 col-sm-5 col-xs-12">
                                <ul class="social-network social-circle onwhite">
                                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>

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
                        <p class="title">Editar perfil</p>
                    </div>
                    <div class="row">
                        <form method="post" id="editar" >
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label> Título de la empresa <span class="required">*</span></label>
                                    <input placeholder="Ingresar título" class="form-control" name="titulo" type="text" value="<?= $_SESSION['usuarios']['titulo'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Teléfono <span class="required">*</span></label>
                                    <input placeholder="Ingresar teléfono" class="form-control" name="telefono" type="text" value="<?= $_SESSION['usuarios']['telefono'] ?>">
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Dirección </label>
                                    <input placeholder="Ingresar dirección" class="form-control" name="direccion" type="text" value="<?= $_SESSION['usuarios']['direccion'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Ciudad </label>
                                    <select class="select-general form-control" name="localidad">
                                        <option label="Select Option"></option>
                                        <option value="<?= $_SESSION['usuarios']['localidad'] ?>" selected><?= $_SESSION['usuarios']['localidad'] ?></option>
                                        <option value="San Francisco">San Francisco</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Provincia </label>
                                    <select class="select-general form-control" name="provincia">
                                        <option label="Select Option"></option>
                                        <option value="<?= $_SESSION['usuarios']['provincia'] ?>" selected><?= $_SESSION['usuarios']['provincia'] ?></option>
                                        <option value="Córdoba">Córdoba</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Categoria: <span class="required">*</span></label>
                                    <select class="select-general form-control" name="categoria">
                                        <option label="Select Option"></option>
                                        <option value="<?= $_SESSION['usuarios']['categoria'] ?>" selected><?= $_SESSION['usuarios']['categoria'] ?></option>
                                        <option value="0">Dealer</option>
                                        <option value="1"> Individual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Subcategoria: <span class="required">*</span></label>
                                    <select class="select-general form-control" name="subcategoria">
                                        <option label="Select Option"></option>
                                        <option value="<?= $_SESSION['usuarios']['subcategoria'] ?>" selected><?= $_SESSION['usuarios']['subcategoria'] ?></option>
                                        <option value="0">Dealer</option>
                                        <option value="1"> Individual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Descripción </label>
                                    <textarea cols="6" rows="8" placeholder="" name="descripcion" class="form-control"><?= $_SESSION['usuarios']['descripcion'] ?></textarea>
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
                                    <input placeholder=" Enter Facbook Url" name="face" class="form-control" value="<?= $_SESSION['usuarios']['facebook'] ?>" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Twitter </label>
                                    <input placeholder="Enter Twitter Url" name="tw" class="form-control" value="<?= $_SESSION['usuarios']['twitter'] ?>" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Instagram <span class="required">*</span></label>
                                    <input placeholder=" Enter Instagram Url" name="ins" class="form-control" value="<?= $_SESSION['usuarios']['instagram'] ?>" type="text">
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <button class="btn btn-default pull-right" name="editar"><i class="fa fa-save"></i> Completar
                                </button>
                            </div>
                        </form>
                        <form method="post" id="editarPass">
                            <div class="col-md-12 col-sm-12">
                                <div class="heading-inner">
                                    <p class="title">Change Password</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Contraseña antigua <span class="required">*</span></label>
                                    <input placeholder="" class="form-control" type="passV">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Nueva contraseña <span class="required">*</span></label>
                                    <input placeholder="" class="form-control" type="passN">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Confirmar contraseña <span class="required">*</span></label>
                                    <input placeholder="" class="form-control" type="passNC">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <button class="btn btn-default pull-right" name="editarPass"><i class="fa fa-save"></i> Cambiar contraseña
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>