<?php
$nome = $_POST['nome'];
$data = $_POST['data'];
$endereco = $_POST['endereco'];
$telefone = $_POST['tel'];
$email = $_POST['email'];
$input = $_POST['cadastrar'];



$linha = $nome . " | "  . $data. " | " . $endereco . " | " . $tel . " | " . $email . " | " . $cadastrar . PHP_EOL;

file_put_contents("cadastro1.txt", $linha, FILE_APPEND);

header("Location: ../mae.html");
exit;
?>




