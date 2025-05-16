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
<DIV class="container">
<div class="row">
<?php
        $id=$_REQUEST['ide'];
            //llamar  a la conexion de base de datos
                include('../modelos/conexion.php');

                //consulta de query mostrar datos
                $query="SELECT  * FROM `producto` WHERE Id_Producto='$id'";
                //asegurar la conexion ennviando la consulta
                $res=$conexion->query($query);
                //recorer todas la columnas
               $row= $res->fetch_assoc()
            ?>

<form method="POST" action="../controladores/editarProducto.php?ide=<?php echo $row['Id_Producto']; ?>">
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="<?php echo $row['Nombre']; ?>">
    </div>
    <div class="form-group">
        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" value="<?php echo $row['Descripción']; ?>" required>

    </div>
    <div class="form-group">
        <label for="">Fecha de registro</label>
        <input type="Date" class="form-control" name="fecha" value="<?php echo $row['Fecha_Registro']; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Cantidad</label>
        <input type="text" class="form-control" name="cantidad" value="<?php echo $row['Cantidad']; ?>" required>
    </div>
    <div class="form-group">
        <label for="">costo</label>
        <input type="text" class="form-control" name="costo" value="<?php echo $row['Costo_Unitario']; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Codigo Barra</label>
        <input type="text" class="form-control" name="codigo" value="<?php echo $row['Codigo_Barra']; ?>" required>
    </div>
    <div class="form-group">
        <label for="">Selecciones categoria</label>
        <select class="form-select" name="categoria" id="">

            <?php
            //llamar  a la conexion de base de datos
                include('../modelos/conexion.php');

                //consulta de query mostrar datos
                $query="SELECT `id_Categoria`, `Nombre` FROM `categoria`";
                //asegurar la conexion ennviando la consulta
                $res=$conexion->query($query);
                //recorer todas la columnas
                if($res->num_rows>0){
                        $combobit="";
                        //comparamos mientras existan los datos
                        while($row=$res->fetch_array(MYSQLI_ASSOC))
                        {
                            //almacer en una varia los campos
                            $combobit="<option value=".$row['id_Categoria'].">".$row['Nombre']."</option>";
                            echo $combobit;

                        }

                }else
                {
                        echo "No hay ningun datos para mostrar";
                }
            ?>
         </select>
    </div>

    <br>
    <button class="btn btn-primary" name="add_producto">Guadar</button>
</form>


</div>

</DIV>

    
</body>
</html>