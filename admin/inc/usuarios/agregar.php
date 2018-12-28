<?php
$usuarios = new Clases\Usuarios();
$categorias = new Clases\Categorias();
//$enviar = new Clases\Email();

$categorias->set("area", "rubros");
$categorias_data = $categorias->listForArea('','');
if (isset($_POST["agregar"])) {
    $cod = substr(md5(uniqid(rand())), 0, 10);
    $pass = substr(md5(uniqid(rand())), 0, 8);
    $titulo = $funciones->antihack_mysqli(isset($_POST["titulo"]) ? $_POST["titulo"] : '');
    $email = $funciones->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : '');
    $usuarios->set("titulo", $titulo);
    $usuarios->set("cod", $cod);
    $usuarios->set("email", $email);
    $usuarios->set("password", $pass);
    $usuarios->set("telefono", $funciones->antihack_mysqli(isset($_POST["telefono"]) ? $_POST["telefono"] : ''));
    $usuarios->set("direccion", $funciones->antihack_mysqli(isset($_POST["direccion"]) ? $_POST["direccion"] : ''));
    $usuarios->set("localidad", $funciones->antihack_mysqli(isset($_POST["localidad"]) ? $_POST["localidad"] : ''));
    $usuarios->set("provincia", $funciones->antihack_mysqli(isset($_POST["provincia"]) ? $_POST["provincia"] : ''));
    $usuarios->set("categoria", $funciones->antihack_mysqli(isset($_POST["categoria"]) ? $_POST["categoria"] : ''));
    $usuarios->set("estado", $funciones->antihack_mysqli(isset($_POST["estado"]) ? $_POST["estado"] : ''));
    $usuarios->set("fecha", date("Y-m-d"));

    ////Envio de mail al usuario
    //$mensaje = 'Gracias por registrarse ' . ucfirst($titulo) . '<br/>';
    //$asunto = TITULO . ' - Registro';
    //$receptor = "joaquinestudiorocha@gmail.com";//$email;
    //$emisor = "joaquinestudiorocha@gmail.com";//EMAIL;
    //$enviar->emailEnviar($asunto, $receptor, $emisor, $mensaje);
    ////

    $usuarios->add();

    $funciones->headerMove(URL . "/index.php?op=usuarios");
}
?>

<div class="col-md-12 ">
    <h4>Usuarios</h4>
    <hr/>
    <form method="post" class="row">
        <!--
        <label class="col-md-4">
            Nombre:<br/>
            <input type="text" name="nombre"  />
        </label>
        <label class="col-md-4">
            Apellido:<br/>
            <input type="text" name="apellido"  />
        </label>
        <label class="col-md-4">
            DNI/CUIT/CUIL:<Br/>
            <input type="text" name="doc"  />
        </label>-->
        <label class="col-md-4">
            Título:<br/>
            <input type="text" name="titulo"  required />
        </label>
        <label class="col-md-4">
            Email:<br/>
            <input type="text" name="email" required />
        </label>
        <label class="col-md-4">
            Password:<br/>
            <input type="text" name="password" readonly />
        </label>
        <!--
        <label class="col-md-4">
            Postal:<br/>
            <input type="text" name="postal"  />
        </label>-->
        <label class="col-md-12">
            Dirección:<br/>
            <input type="text" name="direccion" required/>
        </label>
        <label class="col-md-4">
            Localidad:<br/>
            <select class="select-general form-control" data-validation="required"
                    name="localidad">
                <option value="San Francisco">San Francisco</option>
            </select>
        </label>
        <label class="col-md-4">
            Provincia:<br/>
            <select class="select-general form-control" data-validation="required"
                    name="provincia">
                <option value="Córdoba">Córdoba</option>
            </select>
        </label>
        <!--
        <label class="col-md-4">
            Pais:<Br/>
            <input type="text" name="pais"  />
        </label>-->
        <label class="col-md-4">
            Telefono:<br/>
            <input type="text" name="telefono" required />
        </label>
        <label class="col-md-12">
            Descripción:<br/>
            <textarea class="col-md-12" cols="6" rows="8" readonly></textarea>
        </label>

        <label class="col-md-4">
            Categoría:<br/>
            <select class="select-general form-control" data-validation="required"
                    name="categoria">
                <?php
                if (@count($categorias_data)>0){
                    foreach ($categorias_data as $cat) {
                        ?>
                        <option value="<?= $cat['cod']; ?>" ><?= ucfirst($cat['titulo']); ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </label>
        <label class="col-md-4">
            Fecha de creación:<br/>
            <input type="date" name="fecha"  readonly/>
        </label>
        <label class="col-md-4">
            Estado:<br/>
            <select class="select-general form-control" data-validation="required"
                    name="estado">
                    <option value="0">Deshabilitado</option>
                    <option value="1">Habilitado</option>
            </select>
        </label>
        <!--
        <label class="col-md-4">
            Celular:<br/>
            <input type="text" name="celular"  />
        </label>
        <label class="col-md-2">
            Invitado:<br/>
            <input type="text" name="invitado"  />
        </label>
        <label class="col-md-2">
            Descuento:<br/>
            <input type="text" name="descuento"  />
        </label>-->
        <div class="clearfix"></div>
        <br/>
        <div class="col-md-12">
            <input type="submit" class="btn btn-primary" name="agregar" value="Guardar usuario"/>
        </div>
    </form>
</div>