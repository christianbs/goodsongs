<?php

include "../dados/cadastrar_post_dao.php";

function inserir_post_rn($idforum, $id_usuario, $post) {
    return inserir_post($idforum, $id_usuario, $post);
}