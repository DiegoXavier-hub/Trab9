<?php

class Cadastro
{
  public $nome;
  public $cpf;
  public $email;
  public $senha;
  public $cep;
  public $endereco;
  public $bairro;
  public $cidade;
  public $estado;

  function __construct($nome, $cpf, $email, $senha, $cep, $endereco, $bairro, $cidade, $estado)
  {
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->email = $email;
    $this->senha = $senha;
    $this->cep = $cep;
    $this->endereco = $endereco;
    $this->bairro = $bairro;
    $this->cidade = $cidade;
    $this->estado = $estado;
  }
}

function adicionaCadastro($nome, $cpf, $email, $senha, $cep, $endereco, $bairro, $cidade, $estado)
{
  // Abre o arquivo de texto para escrita de conteúdo no final
  $arq = fopen("cadastros.txt", "a");

  // Os dados são armazenados no formato textual, separados por ponto-e-vírgula,
  // seguindo o mesmo padrão utilizado no exemplo de contatos do Exercício 1
  fwrite($arq, "{$nome};{$cpf};{$email};{$senha};{$cep};{$endereco};{$bairro};{$cidade};{$estado}\n");

  fclose($arq);
}

function carregaCadastros()
{
  $arrayCadastros = [];

  $arq = fopen("cadastros.txt", "r");
  if (!$arq)
    return $arrayCadastros;

  while (!feof($arq)) {
    $linha = trim(fgets($arq));

    if ($linha != "") {
      list($nome, $cpf, $email, $senha, $cep, $endereco, $bairro, $cidade, $estado)
        = array_pad(explode(';', $linha), 9, null);

      $arrayCadastros[] = new Cadastro($nome, $cpf, $email, $senha, $cep, $endereco, $bairro, $cidade, $estado);
    }
  }

  fclose($arq);
  return $arrayCadastros;
}
