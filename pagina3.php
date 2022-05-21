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
$anios  = $_POST['edad'];
$person = $_POST['nombre'];
$apes   = $_POST['apellido'];
if (!isset($_POST['apellido'])) {
    echo "no definiste el apellido en el forms";
}
;?>
  <h1> bhola <?=$person;?> y tiene
    <?=$anios;?> y
    tiene el apellido
    <?=$apellido;?>
  </h1>


</body>

</html>