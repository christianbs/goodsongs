<?php
    $conexao = mysqli_connect("127.0.0.1", "root", "102030", "goodsongs");
    if (mysqli_connect_errno()) {
        echo "Deu ruim... ".mysqli_connect_error();
    }