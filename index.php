<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="respuesta.php" method="GET">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="nombre">
                <small id="nombre" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input name="edad" type="number" class="form-control" id="edad">
            </div>
            <div class="form-group">
    <label for="exampleFormControlSelect1">Tipo</label>
    <select class="form-control" id="exampleFormControlSelect1" name="tipo">
      <option>Estudiante</option>
      <option>Profesor</option>
      <option>Coordinador</option>
      <option>Rector</option>
      <option>Director</option>
      <option>Empleado</option>
    </select>
  </div>
            <div class="form-group">
    <label for="exampleFormControlSelect1">Genero</label>
    <select class="form-control" id="exampleFormControlSelect1" name="genero">
      <option>Mujer</option>
      <option>Hombre</option>
    </select>
  </div>
            <div class="form-group">
    <label for="exampleFormControlSelect1">Curso</label>
    <select class="form-control" id="exampleFormControlSelect1" name="curso">
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
    </select>
  </div>
            <div class="form-group">
                <label for="colegio">Colegio</label>
                <input name="colegio" type="text" class="form-control" id="colegio" aria-describedby="colegio">
                <small id="colegio" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="código">Código</label>
                <input name="código" type="number" class="form-control" id="código">
            </div>
            <div class="form-group">
                <label for="numero">Número de celular</label>
                <input name="numero" type="number" class="form-control" id="numero">
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Email</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group form-check">
                <input name="acepta_tyc" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>