<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = trim($_POST['time']);
        $desc = trim($_POST['cidade']);

        $sql = "INSERT INTO times (nome_produto, descricao_produto, preco_produto) 
        VALUES ('$name', '$desc')";


    if ($conn->query($sql) === true) {
            echo "Registro criado com sucesso!
            <a href='tabela_produto.php'>Ver registros.</a>";    } else {
        echo "Erro: " . $conn->error;
    }

    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST'>
    <label>time</label>
    <br>
    <input type="text" name=time   required>
    <br>
    <label>cidade</label>
    <br>
    <input type="text" name=cidade required>
    <br>    
    <input type='submit'name=submit>
</form>
</body>
</html>