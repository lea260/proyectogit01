<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Persona</title>
</head>

<body>
  <h1>Persona</h1>
  <?php var_dump($_POST);
$edad   = $_POST['edad'];
$nombre = $_POST['nombre'];?>
  <p>El Nombre es: <?=$nombre;?></p>
  <p>La Edad es: <?=$edad;?></p>
</body </html>