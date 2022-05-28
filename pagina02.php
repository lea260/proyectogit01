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
  <form action="./pagina03.php" method="post">
    <label for="">nombre</label>
    <input type="text" name="nombre">
    <label for="">edad</label>
    <input type="number" name="edad">
    <label for="">tel</label>
    <input type="number" name="tel[]" id="">
    <label for="">tel</label>
    <input type="number" name="tel[]" id="">
    <label for="">tel</label>
    <input type="number" name="tel[]" id="">
    <input type="radio" name="radio" id="1" value="M">
    <label for="1">Masculino</label>
    <input type="radio" name="radio" id="2" value="F
    ">
    <label for=" 2">Femenino</label>
    <input type="checkbox" name="check" id="check">
    <label for="check">Acepto</label>
    <select name="modelo" id="select">
      <option value="911">911</option>
      <option value="camaro">camaro</option>
      <option value="corvette">corvette</option>
      <option value="challenger">challenger</option>
    </select>
    <input type="submit" value="enviar">
  </form>

</body>

</html>