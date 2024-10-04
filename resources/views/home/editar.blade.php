@extends('home/layouts/master')

@section('contenido-principal')
<div class="container-lateral">
  <nav class="navbar-lateral">
      <ul>
          <li><a href="/editar">Mi Cuenta</a></li>
          <li style="color: primary; width: 200px;"><strong>Configuracion de mi cuenta</strong></li>
          <li><a href="/cambiocontraseña">Contraseña</a></li>
      </ul>
  </nav>
  <main class="content">
    <?php
        $conexion=mysqli_connect('localhost','root','','tokuho');
        $sql="SELECT * FROM usuario";
        $result=mysqli_query($conexion,$sql);
        while($row = $result->fetch_assoc()){
            $userid = $row['idUsuario'];
            $contrasena= $row['contrasena'];
    ?>
      <div class="d-flex justify-content-evenly">
        
        <section id="seccionNombre">
          <h3>Nombre:</h3>
          <p class=" text-light"><?php echo $row['nombre'];?></p>
        </section>
        <section id="seccionApellido">
          <h3>Apellidos:</h3>
          <p class=" text-light"><?php echo $row['apellido'];?></p>
        </section>
        <section id="seccionEmail">
          <h3>Correo electronico:</h3>
          <p class=" text-light"><?php echo $row['email'];?></p>
        </section>
        </div>

      
        <form action="edit.php" method="POST">
            <div class="d-flex justify-content-evenly">
            <section id="seccionCambNom">
                <h3>Nombre nuevo:</h3>
                <input type="text" name="nomNuevo" id="nomNuevo">
                <input type="hidden" name="idUsuario" value="<?php echo $userid ?>">
                <input type="hidden" name="contrasena" value="<?php echo $contrasena ?>">
            </section>

            <section id="seccionCambApe">
                <h3>Apellido Nuevo:</h3>
                <input type="text" name="apeNuevo" id="apeNuevo">
            </section>

            <section id="seccionCambEmail">
                <h3>Nuevo Email:</h3>
                <input type="text" name="emailNuevo" id="emailNuevo">
            </section>
            </div>
            <div class="d-flex justify-content-center">
              <button class="btn btn-outline-light btn-lg px-5" style="justify-content: center" type="submit">Ingresar</button>
            </div>
        </form>
    <?php }?>
  </main>
</div>
@endsection