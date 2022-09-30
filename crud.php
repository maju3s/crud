<?php

include 'conexao.php';


$nome = $_POST['nome'];
$idade = $_POST['idade'];
$altura = $_POST['altura'];
$escolaridade = $_POST['escolaridade'];

$consulta = "INSERT INTO alunos (nome, idade, altura, escolaridade)
VALUES ('$nome', '$idade', '$altura', '$escolaridade')";

//funçaõ que envia uma consulta para o banco de dados
mysqli_query( $conexao, $consulta);

header('location: index.html');
?>