<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>GET</h1>
  <?php var_dump($_POST);
$param01 = $_POST['nombre'];
$param02 = $_POST['edad'];?>
  <p> este es el parametro 01: <?=$param01;?> </p>
  <p> este es el parametro 02: <?=$param02;?> </p>
  <?php
if (!isset($_POST['apellido'])) {
    echo "no defini en apellido en el formulario";
}
;?>

</body>

</html>