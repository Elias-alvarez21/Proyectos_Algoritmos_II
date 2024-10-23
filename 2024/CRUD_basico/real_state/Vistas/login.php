<!doctype html>
<html lang="en">
    <head>
        <title>Logueo</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
        <form action="../Controladores/logueo.php" class="form-control" method="post">
        <div class="mb-3 row" >
            <label class="col-sm-2 col-form-label">EMAIL</label>
            <div class="col-sm-10">
            <input type="email" name="email"class="form-control" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">CONTRASEÑA</label>
            <div class="col-sm-10">
            <input type="password" name="contra" class="form-control" >
            <button type="submit" class="btn btn-success">LOGUEARSE</button>
        </div>
        </div>
        </form>
        </div>
    </body>
</html>
