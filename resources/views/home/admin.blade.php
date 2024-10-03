<?php
$conexion=mysqli_connect('localhost','root','','tokuho');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js']);
</head>
<body>
    <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h3 class="text-center text-light">Tabla Usuario</h3>
            <div class="table-responsive table-hover" id="tabla-usuario">
                <table class="table">
                    <thead class="text-muted">
                        <th class="text-center text-light">idUsuario</th>
                        <th class="text-center text-light">idDojo</th>
                        <th class="text-center text-light">idTipo</th>
                        <th class="text-center text-light">Nombre</th>
                        <th class="text-center text-light">Apellido</th>
                        <th class="text-center text-light">Email</th>
                        <th class="text-center text-light">Contraseña</th>
                        <th class="text-center text-light">nivelUsuario</th>
                        <th class="text-center text-light">Estado</th>
                        <th class="text-center text-light">Acciones</th>
                    </thead>
                    <tbody>
                        <?php 
                        $sql="SELECT * FROM usuario";
                        $result=mysqli_query($conexion,$sql);
                        while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td class="text-center text-light"><?php echo $row['idUsuario'];?></td>
                            <td class="text-center text-light"><?php echo $row['idDojo'];?></td>
                            <td class="text-center text-light"><?php echo $row['idTipo'];?></td>
                            <td class="text-center text-light"><?php echo $row['nombre'];?></td>
                            <td class="text-center text-light"><?php echo $row['apellido'];?></td>
                            <td class="text-center text-light"><?php echo $row['email'];?></td>
                            <td class="text-center text-light"><?php echo $row['contrasena'];?></td>
                            <td class="text-center text-light"><?php echo $row['nivelUsuario'];?></td>
                            <td class="text-center text-light"><?php echo $row['estado'];?></td>
                            <td class="text-center text-light"><a href="#">Editar</a> - <a href="#">Borrar</a></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    
</body>
</html>