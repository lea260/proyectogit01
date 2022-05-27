<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <body>
    <h1>pagina 02</h1>
    <form action="pagina3.php" method="post">
      <label for="">nombre</label>
      <input type="text" name="nombre">
      <label for="">edad</label>
      <input type="text" name="edad">
      <label for="">apellido</label>
      <input type="text" name="apellido"> <br>


      <form name="pais" action="pagina3.php" method="post"">
        <label for=" paiss">seleccione un pais</label> <br>
        <select name="paises[]" multiple="multiples">
          <option value="uruguay"> Uruguay </option>
          <option value="chile"> Chile </option>
          <option value="paraguay"> Paraguay </option>
          <option value="argentina"> Argentina </option>
          <option value="ee.uu"> EE.UU </option>
        </select>

        <label for="tels1">
          <input type="checkbox" id="telefono1" name="tels[]" value="telefonoUY">09213456</label><br>
        <label for="tels2">
          <input type="checkbox" id="telefono2" name="tels[]" value="telefonoEU"> 2418 7777 </label><br>
        <label for="tels3">
          <input type="checkbox" id="telefono3" name="tels[]" value="telefonoARG"> +549223123-4567</label><br>
        <label for="tels4">
          <input type="checkbox" id="telefono4" name="tels[]" value="telefonoCHL"> +561829124</label><br>
        <input type="submit" name="submit" value="Enviarselo" />
      </form>

      <div class="categorias">
        <h2>¿Usted es?</h2>
        <input type="radio" name="categoria" class="categorias" value="estudiante"> Estudiante
        <input type="radio" name="categoria" class="categorias" value="profesor"> Profesor
        <input type="radio" name="categoria" class="categorias" value="madre/padre"> Madre/Padre
      </div>





      <hr> <br>

    </form>


    </form>



    </form>
    </form>
  </body>

</html>