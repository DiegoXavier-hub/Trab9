<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Exemplo PHP</title>
</head>

<body>

  <h1>Minha primeira página dinâmica</h1>

  <?php
  for ($i = 0; $i < 5; $i++)
    echo "<h2>Conteúdo gerado dinamicamente com PHP</h2>\n";
  ?>

  <h1>Outro título</h1>

  <?php
  for ($i = 0; $i < 5; $i++)
    echo "<h2>Conteúdo gerado dinamicamente com PHP</h2>\n";
  ?>

  <h2>Veja o código fonte da página</h2>

</body>

</html>