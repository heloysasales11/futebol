
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
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>