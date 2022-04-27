<?php

require_once "configura/config.php";
require_once "controller/C_registro.php";

$control_reg = new ControlRegistro();
$control_reg->control();

?>