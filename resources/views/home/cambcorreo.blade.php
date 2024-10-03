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
      <section id="seccionCorreoAntiguo">
          <h3>Ingrese correo antiguo:</h3>
          <p>Ingreso del correo antiguo</p>
      </section>
      <section id="seccionCorreoNuevo">
          <h3>Ingrese el correo nuevo:</h3>
          <p>Ingreso del nuevo correo.</p>
      </section>
</div>
@endsection