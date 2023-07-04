<?php

$usuario = 'root';
$senha = '';
$database = 'bdpap';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar a base  de dados: " . $mysqli->error);
}