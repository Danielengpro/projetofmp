<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Clientes Cadastrados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <p><a href="index.html" class="d-block text-dark">Página inicial</a></p><br>
    <?php
    include("conexao.php");

    $sql = "SELECT * FROM cadastro";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table class='table'>
                  <tr>
                  <th>Nome</th>
                  <th>Endereço</th>
                  <th>Telefone</th>
                  <th>Serviço 1</th>
                  <th>Metragem 1</th>
                  <th>Material 1/th>
                  <th>Data</th></tr>";
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['endereco'] . "</td>";
            echo "<td>" . $row['telefone'] . "</td>";
            echo "<td>" . $row['servico1'] . "</td>";
            echo "<td>" . $row['metragem1'] . "</td>";
            echo "<td>" . $row['material1'] . "</td>";
            echo "<td>" . $row['data_inicio'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Zero Resultado";
    }
    mysqli_close($conexao);
    ?>
</body>

</html>