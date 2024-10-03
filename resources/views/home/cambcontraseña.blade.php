@extends('home/layouts/master')

@section('contenido-principal')
<div class="container-lateral">
  <nav class="navbar-lateral">
      <ul>
          <li><a href="/usuario">Mi Cuenta</a></li>
          <label style="color:grey; width: 200px;"><strong>Configuracion de mi cuenta</strong></label>
          <li><a href="/cambiodojo">Dojo</a></li>
          <li><a href="/cambiocontraseña">Contraseña</a></li>
          <li><a href="#seccion4">correo electrónico</a></li>
      </ul>
  </nav>
  <main class="content">
      <section id="seccionContraseñaAntigua">
          <h3>Ingrese contraseña antigua:</h3>
          <p>Ingreso de la contraseña</p>
      </section>
      <section id="seccionContraseñaNueva">
          <h3>Ingrese la contraseña nueva:</h3>
          <p>Ingreso de la nueva contraseña.</p>
      </section>
      <section id="seccionContraseñaNueva2">
          <h3>Repita la nueva contraseña:</h3>
          <p>otro ingreso de la nueva contraseña.</p>
      </section>
  </main>
</div>
@endsection