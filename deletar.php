<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Página Inicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php
    include("conexao.php");

    $excluir = $_POST['excluir'];

    $sql = "DELETE FROM funcionario WHERE nome='$excluir'";

    if (mysqli_query($conexao, $sql)) {
        echo "Cadastro excluído";
    } else {
        echo "Não foi realizada a operação" . mysqli_error($conexao);
    }
    mysqli_close($conexao);

    ?>
</body>

</html>