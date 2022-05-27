<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>pagina 3</h3>
  <?php var_dump($_POST);
$anios   = $_POST['edad'];
$person  = $_POST['nombre'];
$apes    = $_POST['apellido'];
$telsis  = $_POST['tels'];
$paisol  = $_POST['paises'];
$radiosl = $_POST['categorias'];
if (!isset($_POST['apellido'])) {
    echo "no definiste el apellido en el forms";
}
$paisol = $_POST['paises'];
foreach ($paisol as $valor) {
    echo $valor . "<br>";
}
$telsis = $_POST['tels'];
foreach ($telsis as $telefs) {
    echo $telefs . "<br>";
}
if (!isset($_POST['categorias'])) {
    $radiosl = $_POST['categorias'];
} else {
    $radiosl = "";
}
if ($radiosl == "") {
    array_push($campos, "selecciona una opcion.");
}

?>
  <h1> bhola <?=$person;?> y tiene
    <?=$anios;?> y
    tiene el apellido
    <?=$apes;?>





  </h1>





</body>

</html>