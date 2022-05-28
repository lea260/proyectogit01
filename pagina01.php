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

  <?php var_dump($_GET);
$param01 = $_GET['param01'];
$param02 = $_GET['param02'];
$sexo02  = $_GET['sexo02'];
$pais02  = $_GET['pais02'];
$num02   = $_GET['num02'];?>
  <p> Este es el parametro 01: <?=$param01;?></p>
  <p> Este es el paramsetro 02: <?=$param02;?></p>
  <p> Sexo: <?=$sexo02;?></p>
  <p> Este es su pais: <?=$pais02;?></p>
  <p> Este es su numero: <?=$num02;?></p>
  }?>



</body>

</html>