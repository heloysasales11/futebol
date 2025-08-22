
<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $time_casa_id = $_POST['time casa'];
    $time_fora_id = $_POST['time fora'];
    $data_jogo = $_POST['data jogo'];
    $gols_casa = $_POST['gols casa'];
    $gols_fora = $_POST['gols fora'];

    $sql = " INSERT INTO partidas (time_casa_id,time_fora_id, data_jogo, gols_casa,gols fora) VALUE ('$time_casa_id','$time_fora_id', '$data_jogo','$gols_casa', '$gols_fora')";

    if ($conn->query($sql) === true) {
        echo "Novo partida criada com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>

    <form method="POST" action="create.php">

        <label for="time_casa_id">time casa:</label>
        <input type="text" name="time casa" required>

        <label for="time_fora_id">time fora:</label>
        <input type="text" name="time fora" required>

        <label for="data_jogo">Data do jogo:</label>
        <input type="date" name="data jogo" required>

        <label for="gols_casa">Gols casa:</label>
        <input type="text" name="gols casa" required>

        <label for="gols_fora">Gols fora:</label>
        <input type="text" name="gols casfora" required>
        
        <input type="submit" value="Adicionar">

    </form>

    <a href="read.php">Ver registros.</a>

</body>

</html>