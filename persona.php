<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>--Pagina 01--</h1>

  <?php var_dump($_POST);
$nombre = $_POST['nombre'];
$edad   = $_POST['edad'];
$sexo   = $_POST['sexo'];
$pais   = $_POST['pais'];
$num    = $_POST['num'];?>
  <p> Este es el parametro 01: <?=$nombre;?></p>
  <p> Este es el parametro 02: <?=$edad;?></p>
  <p> Sexo: <?=$sexo;?></p>
  <p> Este es su pais: <?=$pais;?></p>
  <p> Este es su numero: <?=$num;?></p>

  <?php if (!isset($_POST['apellido'])) {
    echo "(Apellido no definido en el formulario)";
}?>


</body>

</html>