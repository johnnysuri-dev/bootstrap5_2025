<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include "menu.php";

?>
    <div class="container">
        <h2>Registro de cliente</h2>
        <div class=row>
            <div class="col-md-6">
                <form  method="POST" action="../controladores/crearCliente.php">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input class="form-control" name="nombre" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Apellido</label>
                        <input class="form-control" name="apellido" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Direcccion electronico</label>
                        <input class="form-control" name="email" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Genero</label>
                        <select class="form-select" name="genero" id="">
                         <option> Seleccione... </option>
                         <option> Masculino</option>
                         <option> Femenino</option>
                         <option> Otros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Fecha de registro</label>
                        <input class="form-control" name="fecha" type="date">
                    </div>
                    <div class="form-group">
                        <label for="">Telefono</label>
                        <input class="form-control" name="telefono" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Direcccion </label>
                        <input class="form-control" name="direccion" type="text">
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary"  type="submit"> Guardar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
</html>