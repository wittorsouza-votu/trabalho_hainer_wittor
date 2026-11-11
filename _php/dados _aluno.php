<?php
$nome = $_POST['nome'];
$data = $_POST['data'];
$endereco = $_POST['endereco'];
$telefone = $_POST['tel'];
$input = $_POST['manha'];
$input = $_POST['tarde'];
$input = $_POST['pei'];
$input = $_POST['cadastrar'];


$linha = $nome . " | "  . $data. " | " . $endereco . " | " . $tel . " | " . $manha . " | " . $tarde . " | " . $pei . 
" | " . $cadastrar . PHP_EOL;

file_put_contents("cadastro1.txt", $linha, FILE_APPEND);

header("Location: ../aluno.html");
exit;
?>




