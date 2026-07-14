<?php

// A quantidade de parágrafos é informada pelo usuário diretamente na URL,
// por exemplo: gera-pagina.php?n=5
$n = filter_input(INPUT_GET, "n", FILTER_VALIDATE_INT);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página HTML dinâmica</title>
  <link rel="stylesheet" href="../css/portal.css">
</head>

<body>
  <main class="container">
    <h1>Página HTML dinâmica</h1>

    <?php if ($n === null || $n === false || $n < 1): ?>
      <p class="dica">Informe a quantidade de parágrafos na URL, por exemplo: <code>gera-pagina.php?n=5</code></p>
    <?php else: ?>
      <?php for ($i = 0; $i < $n; $i++): ?>
        <p>Programação para Internet</p>
      <?php endfor; ?>
    <?php endif; ?>
  </main>
</body>

</html>
