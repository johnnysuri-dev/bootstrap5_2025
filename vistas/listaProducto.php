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
    <h3>Lista de Productos</h3>
    <a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Agregar producto</a>

<div class="row">
    <table class="table">
        <thead>
        <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha</th>
        <th>Cantidad</th>
        <th>Costo</th>
        <th>Cod. Barra</th>
        <th>Categ</th>
        <th>OPCIONES</th>
    </tr>
        </thead>
    <tbody>
        <?php
            include('../modelos/conexion.php');
            $query="SELECT `Id_Producto`, `Nombre`, `Descripción`, `Fecha_Registro`, `Cantidad`, `Costo_Unitario`, `Codigo_Barra`,`id_Categoria` FROM `producto`";
            $res=$conexion->query($query);
          while($row=$res->fetch_assoc())
          {
            ?>
            <tr>
            <td><?php echo $row['Id_Producto']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Descripción']; ?></td>
            <td><?php echo $row['Fecha_Registro']; ?></td>
            <td><?php echo $row['Cantidad']; ?></td>
            <td><?php echo $row['Costo_Unitario']; ?></td>
            <td><?php echo $row['Codigo_Barra']; ?></td>
            <td><?php echo $row['id_Categoria']; ?></td>
           <td class="text-center"> 
                <a class="btn btn-danger" href="../controladores/eliminarProducto.php?ide=<?php echo $row['Id_Producto'];?>" 
                class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
                    <span class="fas fa-trash"> Eliminar</span>
                </a>
            </td>
            
            <td class="text-center">
                <a class="btn btn-success" href="../vistas/editarFrmProducto.php?ide=<?php echo $row['Id_Producto'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Actualizar">
                <span class="fas fa-trash">Actualizar</span>
                </a>
            </td>
            </tr>
        <?php
          }
        ?>

  
    </tbody>
    
    </table>
</div>
</DIV>
</body>
</html>