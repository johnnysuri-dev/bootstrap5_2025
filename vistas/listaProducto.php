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
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar producto
</button>
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


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--codigo de implementacion de fomulario-->  
<form method="POST" action="../controladores/crearProducto.php" >
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" required>
    </div>
    <div class="form-group">
        <label for="">Descripcion</label>
        <textarea class="form-control" name="descripcion"  id=""></textarea>
    </div>
    <div class="form-group">
        <label for="">Fecha de registro</label>
        <input type="Date" class="form-control" name="fecha" required>
    </div>
    <div class="form-group">
        <label for="">Cantidad</label>
        <input type="text" class="form-control" name="cantidad" required>
    </div>
    <div class="form-group">
        <label for="">costo</label>
        <input type="text" class="form-control" name="costo" required>
    </div>
    <div class="form-group">
        <label for="">Codigo Barra</label>
        <input type="text" class="form-control" name="codigo" required>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
