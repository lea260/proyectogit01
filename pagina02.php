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
    <label for="idnombre">nombre</label>
    <input type="text" name="nombre" id="idnombre">
    <label for="">edad</label>
    <input type="text" name="edad" value="36">
    <br>seleccione un pais
    <select name="pais" id="">
      <option value="1">uruguay</option>
      <option value="2">brasil</option>
      <option value="3">argentina</option>
      <option value="4">Bolivia</option>
    </select>
    <br>aminales favoritos
    <input type="checkbox" name="animales[]" id="" value="perro">perro
    <input type="checkbox" name="animales[]" value="gato" id="">gato
    <br>seleccione estado civil
    <input type="checkbox" name="estado" id="" value="solt">soltero
    <input type="checkbox" name="estado" id="" value="casado">soltero
    <input type="submit" value="enviar">
  </form>

</body>

</html>