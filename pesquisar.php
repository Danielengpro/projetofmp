<?php
include("conexao.php");

$pesquisar = $_POST['pesquisar'];

$resultado = "SELECT * FROM cadastro WHERE nome LIKE '%$pesquisar%' LIMIT 5";
$resultado_cadastro = mysqli_query($conexao, $resultado);

while ($rows_cadastro = mysqli_fetch_array($resultado_cadastro)) {
    echo "Nome: " . $rows_cadastro['nome'] . "<br>";
    echo "Endereço: " . $rows_cadastro['endereco'] . "<br>";
    echo "Telefone: " . $rows_cadastro['telefone'] . "<br>";
    echo "Serviço 1: " . $rows_cadastro['servico1'] . "<br>";
    echo "Metragem 1: " . $rows_cadastro['metragem1'] . "<br>";
    echo "Material 1: " . $rows_cadastro['material1'] . "<br>";
    echo "Data: " . $rows_cadastro['data_inicio'] . "<br>";
    echo "<br>";
}
