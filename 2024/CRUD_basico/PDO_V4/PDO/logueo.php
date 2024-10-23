<!doctype html>
<html lang="en">
    <head>
        <title>LOGin</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container" style="width:50%">
        <form action="controllers/login.php" method="post">
            <div class="mb-3">
            <label for="inputEmail" class="form-label">Gmail</label>
            <input type="email" name="gmail" class="form-control" >
            </div>
            <div class="mb-3">
            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" name="contraseña" class="form-control" >
            </div>
            <button type="submit" class="btn btn-success">ACCEDER</button>
        </form>
        </div>
    </body>
</html>
