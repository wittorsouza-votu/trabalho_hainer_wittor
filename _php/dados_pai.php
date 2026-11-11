<?php
$nome = $_POST['nome'];
$data = $_POST['data'];
$endereco = $_POST['endereco'];
$telefone = $_POST['tel'];
$email = $_POST['email'];

$linha = $nome . " | "  . $data. " | " . $endereco . " | " . $tel . " | " . $email . " | " . $cadastrar . " | " . $cadastrar . PHP_EOL;

file_put_contents("../cadastro1.txt", $linha, FILE_APPEND);

header("Location: ../_html/pai.html");
exit;
?>



