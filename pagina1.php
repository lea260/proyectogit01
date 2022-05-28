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
$persona   = $_GET['nombre'];
$sinonimo  = $_GET['apellido'];
$anios     = $_GET['edad'];
$categoris = $_GET['categoria'];
$paisotes  = $_GET['paises'];?>

  <p> este sujeto es: <?=$persona;?></p>
  <p> Y su apellido es: <?=$sinonimo;?></p>
  <p> Tiene la siguiente edad: <?=$anios;?> </p>
  <p> es un <?=$categoris;?> </p>
  <p> y es del pais <?=$paisotes;?> </p>



</body>

</html>