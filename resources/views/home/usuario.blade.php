@extends('home/layouts/master')

@section('contenido-principal')
<div class="container-lateral">
  <nav class="navbar-lateral">
      <ul>
          <li><a href="/usuario">Mi Cuenta</a></li>
          <label style="color:grey; width: 200px;"><strong>Configuracion de mi cuenta</strong></label>
          <li><a href="/cambiodojo">Dojo</a></li>
          <li><a href="/cambiocontraseña">Contraseña</a></li>
          <li><a href="/cambiocorreo">correo electrónico</a></li>
      </ul>
  </nav>
  <main class="content">
      <section id="seccionNombre">
          <h3>Nombre:</h3>
          <p>Contenido del nombre</p>
      </section>
      <section id="seccionApellido">
          <h3>Apellidos:</h3>
          <p>Contenido de la sección 2.</p>
      </section>
      <section id="seccionEmail">
          <h3>Correo electronico:</h3>
          <p>Contenido de la sección 3.</p>
      </section>
      <section id="seccionDojo">
          <h3>Dojo inscrito:</h3>
          <p>Contenido de la sección 4.</p>
      </section>
  </main>
</div>
@endsection