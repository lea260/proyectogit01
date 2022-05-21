<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina3</title>
</head>

<body>
  <h1>pagina 03</h1>
  <?php var_dump($_POST);
$parametro01 = $_POST['nombre'];
$parametro02 = $_POST['edad'];?>
  <p>Este es el parametro 01: <?=$parametro01;?></p>
  <p>Este es el parametro 02: <?=$parametro02;?></p>
  <?php if (!isset($_POST['apellido'])) {
    echo "No defini en apellido en el formulario ";
}
;?>
</body>

</html>