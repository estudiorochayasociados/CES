<?php
$usuarios = new Clases\Usuarios();
$funciones = new Clases\PublicFunction();
?>
    <div class="mt-20">
        <div class="col-lg-12 col-md-12">
            <h4>Usuarios <a class="btn btn-success pull-right" href="<?= URL ?>/index.php?op=usuarios&accion=agregar">AGREGAR
                    USUARIOS</a></h4>
            <hr/>
            <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
            <hr/>
            <table class="table  table-bordered  ">
                <thead>
                <th>Título</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Ajustes</th>
                </thead>
                <tbody>
                <?php
                $filter = array();
                $data = $usuarios->list("");
                if (is_array($data)) {
                    for ($i = 0; $i < count($data); $i++) {
                        echo "<tr>";
                        echo "<td>" . strtoupper($data[$i]["titulo"]) . "</td>";
                        echo "<td>" . strtoupper($data[$i]["email"]) . "</td>";
                        echo "<td>" . strtoupper($data[$i]["telefono"]) . "</td>";
                        echo "<td>";
                        echo '<a class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Modificar" href="' . URL . '/index.php?op=usuarios&accion=modificar&cod=' . $data[$i]["cod"] . '">
                        <i class="fa fa-cog"></i></a>';

                        echo '<a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar" href="' . URL . '/index.php?op=usuarios&accion=ver&borrar=' . $data[$i]["cod"] . '">
                        <i class="fa fa-trash"></i></a>';
                        echo "</td>";
                        echo "</tr>";
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
if (isset($_GET["borrar"])) {
    $cod = $funciones->antihack_mysqli(isset($_GET["borrar"]) ? $_GET["borrar"] : '');
    $usuarios->set("cod", $cod);
    $usuarios->delete();
    $funciones->headerMove(URL . "/index.php?op=usuarios");
}
?>