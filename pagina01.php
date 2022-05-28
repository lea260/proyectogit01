<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Pagina piola</h1>
  <?php var_dump($_GET);
$param01 = $_GET["edad"];
$param02 = $_GET["nombre"];
$param03 = $_GET["sexo"];
$param04 = $_GET["pais"];?>
  <p> La edad es:</p>
  <p> El nombre es:</p>
  <p> El sexo es:</p>
  <p> Es de:</p>
</body>

</html>