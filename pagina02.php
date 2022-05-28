<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Crear Persona</h1>
  <form action="persona.php" method="post">
    <label for="idnombre">Edad:</label>
    <input type="text" name="edad">
    <label for="idedad">Nombre:</label>
    <input type="text" name="nombre">
    <input type="submit" value="enviar">
    <br> sexo:
    <br>
    <br>
    <input type="" name="" id="">
    Masculino: <input type="checkbox" name="tel[]" value="Mas">
    Femenino: <input type="checkbox" name="tel[]" value="Fem">
    No binario: <input type="checkbox" name="tel[]" value="Mas">
    <br>
    <br>

    <input type="radio" name="pais" value="1"><label for="">Uruguay: </label>
    <label for="">España: </label>
    <input type="radio" name="pais" value="2">
    <label for="">Italia: </label>
    <input type="radio" name="pais" value="3">
    <label for="">Francia: </label>
    <input type="radio" name="pais" value="4">
    <label for="">Inglaterra: </label>
    <input type="radio" name="pais" value="5">
    <select name="genero" id="nums">
      <option value="mas" value="1">mas</option>
      <option value="fem" value="2">femeni</option>
      <option value="nob" value="3">No binario</option>
    </select>
    < </form>
</body>

</html>