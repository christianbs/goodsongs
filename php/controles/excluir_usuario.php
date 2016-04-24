<?php

$idUsurio = $_POST['idUsuarioExcluido'];

include "../dados/cadastro_usuario_dao.php";

deletar_usuario($idUsurio);

header("location:../../administrador.php");