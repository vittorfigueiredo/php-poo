<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 03 - POO</title>
</head>
<body>
  <pre>
    <?php
      require_once "Caneta.php";

      $c1 = new Caneta("BIC", "Vermelha", "0.7", true);
      // $c1->setModelo("BIC");
      // $c1->setPonta(0.5);

      // print "Eu tenho uma caneta modelo {$c1->getModelo()} e ponta {$c1->getPonta()}";

      print_r($c1);

    ?>
  </pre>
</body>
</html>