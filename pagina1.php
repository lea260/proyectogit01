<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1> pagina 01</h1>
  <?php var_dump($_GET);
$persona  = $_GET['nombre'];
$sinonimo = $_GET['apellido'];
$teles    = $_GET['tel[];'];?>

  <p> este es el pagina 01: <?=$persona;?></p>
  <p> este es el pagina 02: <?=$sinonimo;?></p>
  ?>
</body>

</html>