<?php

include "../dados/cadastro_forum_dao.php";

function inserir_forum_rn($id_usuario, $titulo) {
    return inserir_forum($id_usuario, $titulo);
}

function listar_foruns_rn() {
    echo "Chamando DAO.";
    listar_foruns();
}