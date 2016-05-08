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
        <h1>Login</h1>
        <form method="post" action="teste.php">
            <div class="form-group">
                <label for="login">E-mail:</label>
                <input type="text" class="form-control" id="usuario" name="usuario"/>
            </div>
            <div class="form-group">
                <label for="senha">E-mail:</label>
                <input type="password" class="form-control" id="senha" name="senha"/>
            </div>
            <button type="submit" class="btn btn-default">Login</button>
        </form>
    </section>
    <section class="col-sm-4">
    </section>
    </body>
</html>