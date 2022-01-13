<!doctype html>
<html lang="es">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <main role="main" class="container">
        <div class="starter-template">
            <h1>Alta de empleado</h1>
            <form method="post" action="/employee/new">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" name="surname" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Detalles</label>
                    <input type="text" name="details" class="form-control">
                </div>
                <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input type="text" name="birthdate" class="form-control">
                </div>
                <label>Servicios</label>
                <div class="form-check">

                </div><br>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
                <a href="/employee" class="btn btn-danger">Atrás</a>
            </form>
        </div>
    </main><!-- /.container -->

</body>


</html>