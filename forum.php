<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'menu.php'; ?>
<section class="col-sm-4">
</section>
<section class="col-sm-4">
    <?php
        $id = $_POST['idForum'];
        $titulo = $_POST['tituloForum'];
    ?>
    <h1><?php echo $titulo; ?></h1>
</section>
<section class="col-sm-4">
</section>
<body>
</html>