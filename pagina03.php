<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php $name=$_POST["nombre"];
      $age=$_POST["edad"] ?>
<h1>Bienbenido <?=$name; ?> de <?=$age ; ?> Años </h1>
<h2><?php if (!isset($_POST['apellido'])) {
    echo "no se definio apellido en el formulario ";
}
;?></h2>

<body>

</body>

</html>