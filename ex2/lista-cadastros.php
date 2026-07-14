<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Dinâmica - Listagem de Cadastros - Segura</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/portal.css">
</head>

<body>
  <main class="container py-5">

    <h1>Cadastros Carregados do Arquivo <code>cadastros.txt</code></h1>
    <p class="panel-copy">Todos os campos abaixo passam por <code>htmlspecialchars</code> antes de serem inseridos na página, então um cadastro com uma tag <code>&lt;script&gt;</code> no nome aparece como texto puro, sem executar.</p>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>CPF</th>
          <th>E-mail</th>
          <th>CEP</th>
          <th>Endereço</th>
          <th>Bairro</th>
          <th>Cidade</th>
          <th>Estado</th>
        </tr>
      </thead>

      <tbody>
        <?php
        require "cadastros.php";
        $arrayCadastros = carregaCadastros();
        foreach ($arrayCadastros as $cadastro) {
          $nome = htmlspecialchars($cadastro->nome);
          $cpf = htmlspecialchars($cadastro->cpf);
          $email = htmlspecialchars($cadastro->email);
          $cep = htmlspecialchars($cadastro->cep);
          $endereco = htmlspecialchars($cadastro->endereco);
          $bairro = htmlspecialchars($cadastro->bairro);
          $cidade = htmlspecialchars($cadastro->cidade);
          $estado = htmlspecialchars($cadastro->estado);
          echo <<<HTML
            <tr>
              <td>$nome</td>
              <td>$cpf</td>
              <td>$email</td>
              <td>$cep</td>
              <td>$endereco</td>
              <td>$bairro</td>
              <td>$cidade</td>
              <td>$estado</td>
            </tr>
          HTML;
        }
        ?>
      </tbody>
    </table>
    <a class="btn btn-outline-secondary" href="index.html">Novo cadastro</a>
  </main>

</body>

</html>
