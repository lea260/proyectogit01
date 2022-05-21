<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página1</title>
</head>

<body>
  <h1>Página 1</h1>
  <?php var_dump($_GET);
$param01 = $_GET['param01'];
$param02 = $_GET['param02'];?>
  <p>El parámetro 1 es: <?=$param01;?></p>
  <p>El parámetro 2 es: <?=$param02;?></p>

</body>

</html>