<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>pagina 02</h1>
  <?php var_dump($_GET);
$param01 = $_GET['param01'];
$param02 = $_GET['param02'];?>
  <p> este es el parametro 01: <?=$param01;?> </p>
  <p> este es el parametro 02: <?=$param02;?> </p>
</body>

</html>