<?php



$estado_id = $_POST['estado_id'];


$host = "localhost";
$user = "root";
$pasword = "";
$db = "teste";
$mysqli = new mysqli($host, $user, $pasword, $db) or die;

$query = "SELECT id,nome FROM cidade WHERE estado_id = " . $estado_id;
$result = $mysqli->query($query);
while ($dado = $result->fetch_array()) {
    $id[] = utf8_encode($dado['id']);
    $nome[] = utf8_encode($dado['nome']);
}


for ($i = 0; $i < count($id); $i++) {
    $html = "<option value='" . $id[$i] . "'>" . $nome[$i] . "</option>";
    echo($html);
}

