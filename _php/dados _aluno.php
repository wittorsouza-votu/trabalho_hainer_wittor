<?php
$nome = $_POST['nome'];
$data = $_POST['data'];
$endereco = $_POST['endereco'];
$telefone = $_POST['tel'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];


$linha = $nome . " | " . $endereço . " | " . $data. " | " . $endereco . " | " . $tel . " | " . $cpf . PHP_EOL;

file_put_contents("cadastro.txt", $linha, FILE_APPEND);

header("Location: ../cadastroNota.html")
exit;
?>




