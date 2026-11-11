<?php
$preto = $_POST['preto'];
$branco = $_POST['branco'];
$endereco = $_POST['endereco'];
$verde = $_POST['verde'];
$radio = $_POST['sim'];
$radio = $_POST['nao'];
$text = $_POST['descreva'];
$text = $_POST['eletiva'];
$input = $_POST['cadastrar'];


$linha = $preto . " | " . $branco . " | " . $endereco. " | " . $verde . " | " . $sim . " | " . $nao .  " | " . $sim . " | " . $descreva .
 " | " . $eletiva . " | " . $cadastrar . PHP_EOL;

file_put_contents("cadastro1.txt", $linha, FILE_APPEND);

header("Location: ../adicionais.html");
exit;
?>

