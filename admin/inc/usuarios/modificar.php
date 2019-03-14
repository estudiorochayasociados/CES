<?php
$usuarios = new Clases\Usuarios();
$categorias = new Clases\Categorias();
$promociones = new Clases\Promociones();
$cod = $funciones->antihack_mysqli(isset($_GET["cod"]) ? $_GET["cod"] : '');

$usuarios->set("cod", $cod);
$usuario = $usuarios->view();
$categorias->set("cod", $usuario['categoria']);
$categorias_data = $categorias->view();

if (isset($_POST["agregar"])) {
    $usuarios->set("cod", $usuario["cod"]);
    //$usuarios->set("nombre", $funciones->antihack_mysqli(isset($_POST["nombre"]) ? $_POST["nombre"] : ''));
    //$usuarios->set("apellido", $funciones->antihack_mysqli(isset($_POST["apellido"]) ? $_POST["apellido"] : ''));
    //$usuarios->set("doc", $funciones->antihack_mysqli(isset($_POST["doc"]) ? $_POST["doc"] : ''));
    //$usuarios->set("email", $funciones->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : ''));
    //$usuarios->set("password", $funciones->antihack_mysqli(isset($_POST["password"]) ? $_POST["password"] : ''));
    //$usuarios->set("postal", $funciones->antihack_mysqli(isset($_POST["postal"]) ? $_POST["postal"] : ''));
    //$usuarios->set("localidad", $funciones->antihack_mysqli(isset($_POST["localidad"]) ? $_POST["localidad"] : ''));
    //$usuarios->set("provincia", $funciones->antihack_mysqli(isset($_POST["provincia"]) ? $_POST["provincia"] : ''));
    //$usuarios->set("pais", $funciones->antihack_mysqli(isset($_POST["pais"]) ? $_POST["pais"] : ''));
    //$usuarios->set("telefono", $funciones->antihack_mysqli(isset($_POST["telefono"]) ? $_POST["telefono"] : ''));
    //$usuarios->set("celular", $funciones->antihack_mysqli(isset($_POST["celular"]) ? $_POST["celular"] : ''));
    //$usuarios->set("invitado", $funciones->antihack_mysqli(isset($_POST["invitado"]) ? $_POST["invitado"] : '0'));
    //$usuarios->set("descuento", $funciones->antihack_mysqli(isset($_POST["descuento"]) ? $_POST["descuento"] : ''));
    //$usuarios->set("fecha", $funciones->antihack_mysqli(isset($_POST["fecha"]) ? $_POST["fecha"] : date("Y-m-d")));
    $usuarios->set("estado", $funciones->antihack_mysqli(isset($_POST["estado"]) ? $_POST["estado"] : ''));
    $estado = $funciones->antihack_mysqli(isset($_POST["estado"]) ? $_POST["estado"] : '');
    //$usuarios->edit();
    $promociones->set("usuario",$usuario['cod']);
    $promociones->set("estado",1);
    $promos_data = $promociones->listWithOpsPerfil('','');
    if($estado==1){
        foreach ($promos_data as $p){
            $promociones->set("cod",$p['cod']);
            $promociones->set("activo",1);
            $promociones->setActivo();
        }
    }elseif ($estado==0){
        foreach ($promos_data as $p){
            $promociones->set("cod",$p['cod']);
            $promociones->set("activo",0);
            $promociones->setActivo();
        }
    }

    $usuarios->setEstado();
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
            <input type="text" name="nombre" value="<?= $usuario['nombre']; ?>" />
        </label>
        <label class="col-md-4">
            Apellido:<br/>
            <input type="text" name="apellido" value="<?= $usuario['apellido']; ?>" />
        </label>
        <label class="col-md-4">
            DNI/CUIT/CUIL:<Br/>
            <input type="text" name="doc" value="<?= $usuario['doc']; ?>" />
        </label>-->

        <label class="col-md-4">
            Título:<br/>
            <input type="text" name="nombre" value="<?= $usuario['titulo']; ?>" readonly/>
        </label>
        <label class="col-md-4">
            Email:<br/>
            <input type="text" name="email" value="<?= $usuario['email']; ?>" readonly/>
        </label>
        <label class="col-md-4">
            Password:<br/>
            <input type="text" name="password"  value="<?= $usuario['password']; ?>"  readonly/>
        </label>
        <!--
        <label class="col-md-4">
            Postal:<br/>
            <input type="text" name="postal" value="<?= $usuario['postal']; ?>" />
        </label>-->
        <label class="col-md-12">
            Dirección:<br/>
            <input type="text" name="direccion" value="<?= $usuario['direccion']; ?>" readonly/>
        </label>
        <label class="col-md-4">
            Localidad:<br/>
            <input type="text" name="localidad" value="<?= $usuario['localidad']; ?>" readonly/>
        </label>
        <label class="col-md-4">
            Provincia:<br/>
            <input type="text" name="provincia" value="<?= $usuario['provincia']; ?>" readonly/>
        </label>
        <!--
        <label class="col-md-4">
            Pais:<Br/>
            <input type="text" name="pais" value="<?= $usuario['pais']; ?>" />
        </label>-->
        <label class="col-md-4">
            Telefono:<br/>
            <input type="text" name="telefono" value="<?= $usuario['telefono']; ?>" readonly/>
        </label>
        <label class="col-md-12">
            Descripción:<br/>
            <textarea class="col-md-12" cols="6" rows="8" readonly><?= $usuario['descripcion']; ?></textarea>
        </label>

        <label class="col-md-4">
            Categoría:<br/>
            <input type="text" name="categoria" value="<?= ucfirst($categorias_data['titulo']); ?>" readonly/>
        </label>
        <label class="col-md-4">
            Fecha de creación:<br/>
            <input type="date" name="fecha" value="<?= ($usuario['fecha']); ?>" readonly/>
        </label>
        <label class="col-md-4">
            Estado:<br/>
            <select class="select-general form-control" data-validation="required"
                    name="estado">
                <option value="<?= $usuario['estado'] ?>"
                        selected><?php if ($usuario['estado'] == 1) {
                        echo "Habilitado";
                    } else {
                        echo "Deshabilitado";
                    } ?></option>
                <?php
                if ($usuario['estado'] == 1) {
                    ?>
                    <option value="0">Deshabilitado</option>
                    <?php
                } else {
                    ?>
                    <option value="1">Habilitado</option>
                    <?php
                }
                ?>
            </select>
        </label>
        <!--
        <label class="col-md-4">
            Celular:<br/>
            <input type="text" name="celular" value="<?= $usuario['celular']; ?>" />
        </label>
        <label class="col-md-2">
            Invitado:<br/>
            <input type="text" name="invitado" value="<?= $usuario['invitado']; ?>" />
        </label>
        <label class="col-md-2">
            Descuento:<br/>
            <input type="text" name="descuento" value="<?= $usuario['descuento']; ?>" />
        </label>-->
        <div class="clearfix"></div>
        <br/>
        <div class="col-md-12">
            <input type="submit" class="btn btn-primary" name="agregar" value="Guardar usuario"/>
        </div>
    </form>
</div>
