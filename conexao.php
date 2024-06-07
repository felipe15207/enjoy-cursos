<?php

$host = "localhost";
$database = "enjoy_cursos_bd";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
} else {
    echo "Conexão estabelecida com sucesso!";
    echo "\nInformações da conexão:\n";
    echo "Host: " . $mysqli->host . "\n";
    echo "Nome do banco de dados: " . $mysqli->dbname . "\n";
    echo "Charset: " . $mysqli->character_set_name() . "\n";
}