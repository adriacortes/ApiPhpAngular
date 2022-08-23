<?php
include("conexao.php");

//Obter dados
$obterDados = file_get_contents("php://input");

//Extrair dados JSON
$extrair = json_decode($obterDados);

//Separando dados JSON
$idCurso = $extrair->cursos->idCurso;

//sql

$sql = "DELETE FROM cursos WHERE idCurso = $idCurso";
mysqli_query($conexao,$sql);

?>