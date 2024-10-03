<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minium-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tokuho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .container-lateral {
      display: flex;
      height: 100vh; 
      }
  
      .navbar-lateral {
          width: 220px; /* Ancho del navbar */
          background-color: #212529; /* Color de fondo */
          color: white; /* Color del texto */
          text-align: start; 
      }
  
      .navbar-lateral ul {
          list-style: none; /* Quitar puntos de la lista */
      }
  
      .navbar-lateral li {
          margin: 15px 0; /* Espaciado entre los elementos */
      }
  
      .navbar-lateral a {
          color: white; /* Color del texto del enlace */
          text-decoration: none; /* Quitar subrayado */
      }
  
      .navbar-lateral a:hover {
          text-decoration: underline; /* Subrayado al pasar el mouse */
      }
  
      .content {
          flex: 1; /* Toma el espacio restante */
          padding: 20px; /* Espaciado interno */
          overflow-y: auto; /* Scroll si es necesario */
      }
  
      section {
          margin-bottom: 50px; /* Espaciado entre secciones */
      }
    </style>
  
  </head>
<body>
    <!-- NAVBAR PC -->
        <div>
          <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Inicio</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Videos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Archivos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Publicaciones</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/usuario"> Mi perfil</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-secondary m-1" type="submit">Buscar</button>
                  <a class="btn btn-outline-success m-1" href="login" role="button">Login</a>
                </form>
              </div>
            </div>
          </nav>
        </div>
    
        @yield('contenido-principal')
    
</body>
</html>