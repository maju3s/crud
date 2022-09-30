<?php

//para estabelecer uma comunicação, são necessários 4 parâmetros

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco= "escola";

//funcao que estabelece uma conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

?>