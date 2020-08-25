<?php
$servidor = "localhost";
$usuario = "root";
$senha = '';
$banco = "aulas_mao";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    echo "Não foi possível conecar-se ao Banco" . mysqli_connect_errno() . PHP_EOL;
    exit;
}
