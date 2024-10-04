@extends('home/layouts/master')

@section('contenido-principal')
<div class="container-lateral">
  <nav class="navbar-lateral">
      <ul>
          <li><a href="/editar">Mi Cuenta</a></li>
          <label style="width: 200px;"><strong>Configuracion de mi cuenta</strong></label>
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
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $email = $row['email'];
    ?>
      <form action="editPass" method="POST">
        <div class="d-flex justify-content-evenly">
        <section id="seccionContraseñaAntigua">
            <h3>Ingrese contraseña antigua:</h3>
            <input type="password" name="contraVieja" id="contraVieja" required>
            <input type="hidden" name="idUsuario" value="<?php echo $userid ?>">
            <input type="hidden" name="contraBd" value="<?php echo $contrasena ?>">
            <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
            <input type="hidden" name="apellido" value="<?php echo $apellido ?>">
            <input type="hidden" name="email" value="<?php echo $email ?>">
        </section>
        <section id="seccionContraseñaNueva">
            <h3>Ingrese la contraseña nueva:</h3>
            <input type="password" name="contraNueva" id="contraNueva" required>
        </section>
        <section id="seccionContraseñaNueva2">
            <h3>Repita la nueva contraseña:</h3>
            <input type="password" name="contraNueva2" id="contraNueva2" required>
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