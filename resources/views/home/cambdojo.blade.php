@extends('home/layouts/master')

@section('contenido-principal')
<div class="container-lateral">
  <nav class="navbar-lateral">
      <ul>
          <li><a href="/usuario">Mi Cuenta</a></li>
          <label style="color:grey; width: 200px;"><strong>Configuracion de mi cuenta</strong></label>
          <li><a href="/cambdojo">Dojo</a></li>
          <li><a href="/cambiocontraseña">Contraseña</a></li>
          <li><a href="/cambiocorreo">correo electrónico</a></li>
      </ul>
  </nav>
  <main class="content">
      <section id="seccionNombreDojo">
          <h3>Nombre dojo perteneciente:</h3>
          <p>Contenido del nombre</p>
      </section>
      <section id="seccionnuevoDojo">
          <h3>Nuevo dojo:</h3>
          <p>Contenido de la sección 2.</p>
      </section>
  </main>
</div>
@endsection