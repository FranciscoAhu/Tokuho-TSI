<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CuentaNueva</title>
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

      .contenedorCuenta{
        background-color: gray;
        padding: 70px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 500px;
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
            background-color: darkred;
      }

      .contenedorCuenta label{
            color: black;
            padding: 10px;
            
      }

    </style>
</head>
<body>
  <div class="contenedorCuenta">
    <h1 style="text-align: center;">Nueva cuenta</h1>
    <form class="">
        <div class="">
          <label for="inputEmail" class="label">Email:</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="Ingrese su Email" required>
        </div>
        <div class="">
          <label for="inputPassword4" class="label">Contraseña:</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Ingrese su Contraseña" required>
        </div>
        <div class="">
          <label for="inputName" class="label">Nombre:</label>
          <input type="text" class="form-control" id="inputName" placeholder="Ingrese su Nombre" required>
        </div>
        <div class="">
          <label for="inputLastName" class="label">Apellido</label>
          <input type="text" class="form-control" id="inputLastName" placeholder="Ingrese su Apellido" required>
        </div>
        <div class="">
          <label for="inputGrado" class="label">Grado alcanzado en el arte marcial</label>
          <label for="inputGrado">(ejemplo: 10-kyu)</label>
          <input type="text" class="form-control" id="inputGrado" placeholder="Ingrese su grado" required>
        </div>
        <div class="p-2">
          <button type="submit" class="btn btn-primary">Crear cuenta</button>
          <a class="btn btn-danger" href="/login" role="button">Atrás</a>
        </div>
      </form>
  </div>
</body>
</html>