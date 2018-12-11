<?php
$funcionesBtn = new Clases\PublicFunction();
$sesionCount = @count($_SESSION['usuarios']);
$op       = isset($_GET["op"]) ? $_GET["op"] : '';
if ($sesionCount != 0) {
    ?>
    <section class="dashboard-menu light-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard-menu-container">
                        <ul>
                            <li class="<?php if ($op=='ver') {echo "active"; }?>">
                                <a href="<?=URL .'/perfil/ver' ?>">
                                    <div class="icon"><i class="fa fa-dashboard"></i></div>
                                    <div class="menue-name"> Perfil </div>
                                </a>
                            </li>
                            <li class="<?php if ($op=='editar') {echo "active"; }?>">
                                <a href="<?=URL .'/perfil/editar' ?>">
                                    <div class="icon"><i class="fa fa-edit"></i></div>
                                    <div class="menue-name">Editar perfil</div>
                                </a>
                            </li>
                            <li class="<?php if ($op=='promociones-activas') {echo "active"; }?>">
                                <a href="<?=URL .'/perfil/promociones-activas' ?>">
                                    <div class="icon"><i class="fa  fa-history"></i></div>
                                    <div class="menue-name">Promos activas</div>
                                </a>
                            </li>
                            <li class="<?php if ($op=='promociones-terminadas') {echo "active"; }?>">
                                <a href="<?=URL .'/perfil/promociones-terminadas' ?>">
                                    <div class="icon"><i class="fa fa-archive"></i></div>
                                    <div class="menue-name">Promos terminadas</div>
                                </a>
                            </li>
                            <li>
                                <a href="user-delete-account.html">
                                    <div class="icon"><i class="fa fa-close"></i></div>
                                    <div class="menue-name">Desconectar</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>
