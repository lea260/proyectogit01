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
    <label for="">edad</label>
    <input type="text" name="edad" id="idedad" value="36">
    <label for="">nombre</label>
    <input type="text" name="nombre" id="idnombre" value="Pedro">
    <input type="submit" value="enviar">

    <br>
    <br>


    <form name="pais">Pais:
      <label for="">Uruguay: </label>
      <input type="radio" name="uru1" id="uru">
      <label for="">Argentina: </label>
      <input type="radio" name="arg1" id="arg">
      <label for="">Paraguay: </label>
      <input type="radio" name="para1" id="para">
      <label for="">Chile: </label>
      <input type="radio" name="chil1" id="chil">
      <label for="">Colombia: </label>
      <input type="radio" name="colo1" id="colo">
    </form>
    <br>


    <form name="sexo">Sexo:
      <label for="">Masculino: </label>
      <input type="checkbox" name="m1" id="m">
      <label for="">Femenino: </label>
      <input type="checkbox" name="f1" id="f">
      <label for="">Otro: </label>
      <input type="checkbox" name="o1" id="o">

    </form>
  </form>
  <br>
  Numero:
  <select name="nm" id="num">
    <option value="n1">+598</option>
    <option value="n2">+54</option>
    <option value="n3">+595</option>
    <option value="n4">+54</option>
    <option value="n5">+57</option>
  </select>
</body>

</html>