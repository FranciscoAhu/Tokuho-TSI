<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
    <style>
      body{
        font-family: Arial, sans-serif;
        background-color: white;
        display: flex;
        justify-content: center;
        align-content: center;
        height: 100vh;
        margin: 0%;
      }

      .contenedorLogin{
        background-color: gray;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
      }

      input[type="texto"], input[type="contraseña"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
      }

      input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
      }

      input[type="submit"]:hover {
            background-color: #45a049;
      }

      input[type="return"] {
            background-color: #272efc;
            color: white;
            width: 10%;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
      }

      input[type="return"]:hover {
            background-color: #5457f9;
      }

      .contenedorLogin li{
            color: yellow;
            padding: 10px;
            
      }

    </style>
</head>
<body>
  <div class="contenedorLogin">
    <h1 style="text-align: center;">inicio de sesión</h1>
    <form action="#" method="POST">
      <label for="usuario">Email:</label>
      <input type="texto" id="usuario" name="usuario" required>
      <label for="contraseña">Contraseña:</label>
      <input type="contraseña" id="contraseña" name="contraseña" required>
      <a class="btn btn-danger" href="/" role="button">Atras</a>
      <input type="submit" value="Entrar">
      <li><a href="/cuentanueva"> crear nueva cuenta </a></li>
    </form>
  </div>
</body>
</html>