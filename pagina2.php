<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina2</title>
</head>

<body>
  <h1>Crear Persona</h1>
  <form action="pagina3.php" method="post">
    <label for="idnombre">Nombre</label>
    <input type="text" name="nombre" id="idnombre value=" Pedrito">
    <label for="">Edad</label>
    <input type="text" name="edad" value="36">
    <input type="submit" value="Enviar">


    <br> Selecione un país.
    <select name="pais" id="">
      <option value="1">Uruguay </option>
      <option value="2">Peru </option>
      <option value="3">Chile </option>
      <option value="4">Argentina </option>
    </select>

    <br> Selecione fruta preferida.
    <input type="checkbox" name="fruta[]" id="" value="manzana"> Manzana
    <input type="checkbox" name="fruta[]" id="" value="pera"> Pera
    <input type="submit" value="Enviar">

  </form>

</body>

</html>