<?php
session_start();
$admin = $_SESSION['admin'];
$login = $_SESSION['login'];
$senha = $_SESSION['senha'];
$logado = '';
if ($login != '' && $senha != '') {
    $logado = 'true';
} else {
    $logado = 'false';
}
if ($admin == '' || $admin != '1') {
    $admin = "false";
} else {
    $admin = "true";
}
function sair() {
    include "php/controles/logout.php";
}
?>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">GoodSongs</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="../index.php">Home</a></li>
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Modelos<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../modelos/lespaul.php">Les Paul</a></li>
                    <li><a href="../modelos/sg.php">SG</a></li>
                    <li><a href="../modelos/flyingv.php">Flying V</a></li>
                    <li><a href="../modelos/stratocaster.php">Stratocaster</a></li>
                    <li><a href="../modelos/telecaster.php">Telecaster</a></li>
                </ul>
                </li>
                <li><a href="../contato.php">Contato</a></li>
                <li><a href="../inicio.php">Forum</a></li>
                <li><a id="link" href="../administrador.php">Administrador</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a id="sair" onclick="sair()">Sair</a></li>
            </ul>
        </div>
    </nav>
</header>
<form id="sair-form" action="../php/controles/logout.php"></form>
<script type="text/javascript">
    if (document.getElementById('admin').value != 'true') {
        document.getElementById('link').style.visibility = 'hidden';
    }
    if (document.getElementById('logado').value != 'true') {
        document.getElementById('sair').style.visibility = 'hidden';
    }
    function sair() {
        document.getElementById('sair-form').submit();
    }
</script>