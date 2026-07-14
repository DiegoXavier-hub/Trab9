<?php

require "cadastros.php";

// coleta os dados enviados pelo formulário
$nome = $_POST["nome"] ?? "";
$cpf = $_POST["cpf"] ?? "";
$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";
$cep = $_POST["cep"] ?? "";
$endereco = $_POST["endereco"] ?? "";
$bairro = $_POST["bairro"] ?? "";
$cidade = $_POST["cidade"] ?? "";
$estado = $_POST["estado"] ?? "";

// grava o novo cadastro no arquivo de texto
adicionaCadastro($nome, $cpf, $email, $senha, $cep, $endereco, $bairro, $cidade, $estado);

// leva o usuário direto para a listagem segura dos cadastros
header("location: lista-cadastros.php");
