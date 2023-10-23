<?php
include("conexao.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$servico1 = $_POST['servico1'];
$metragem1 = $_POST['metragem1'];
$material1 = $_POST['material1'];
$data = $_POST['data_inicio'];

$sql = "INSERT INTO cadastro (nome, telefone, endereco, servico1, metragem1, material1, data_inicio)
        VALUES ('$nome', '$telefone', '$endereco', '$servico1', '$metragem1', '$material1', '$data')";
if (mysqli_query($conexao, $sql)) {
    echo "<h1>Cliente cadastrado com sucesso</h1>";
    echo "<a href='cadastroCliente.html'>Cadastrar outro Cliente?</a><br>";
    echo "<a href='index.html'>Página inicial</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);
