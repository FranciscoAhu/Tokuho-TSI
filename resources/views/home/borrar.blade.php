@extends('home/layouts/master')

@section('contenido-principal')

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
<?php }?>
<form action="delate.php" method="POST">
    <div>
        <input type="hidden" name="contrasena" value="<?php echo $contrasena ?>" required>
        <input type="hidden" name="idUsuario" value="<?php echo $userid ?>">
        <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
        <input type="hidden" name="apellido" value="<?php echo $apellido ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <button class="btn btn-danger btn-lg px-5 mb-2" type="submit">Si</button>
        <a class="btn btn-success btn-lg px-5 mb-2" href="{{url('/admin')}}">No</a>
    </div>
</form>
@endsection