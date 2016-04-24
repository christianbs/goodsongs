<?php

    include "../dados/cadastrar_post_dao.php";
    $id_usuario = 1;
    $id_forum = htmlspecialchars($_POST['idForum']);
    $post = htmlspecialchars($_POST['post']);
    $tituloForum = htmlspecialchars($_POST['tituloForum']);

    inserir_post($id_forum, $id_usuario, $post);
?>
<html>
<body onload="submeter()">
    <form action="../../forum.php" method="post" id="form">
        <input type="hidden" name="idForum" value="<?php echo $id_forum; ?>">
        <input type="hidden" name="tituloForum" value="<?php echo $tituloForum; ?>">
    </form>
    <script type="text/javascript">
        function submeter() {
            document.getElementById("form").submit();
        }
    </script>
</body>
</html>