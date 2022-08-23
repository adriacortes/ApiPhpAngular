<?php
include("conexao.php");

//Obter dados
$obterDados = file_get_contents("php://input");

//Extrair dados JSON
$extrair = json_decode($obterDados);

//Separando dados JSON
$idCurso = $extrair->cursos->idCurso;
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->curso->valorCurso;

//sql

$sql = "UPDATE cursos SET nomeCurso ='$nomeCurso',valorCurso=$valorCurso WHERE idCurso=$idCurso";
mysqli_query($conexao,$sql);

//Exportar os dados cadastrados
$curso = [
    'idCurso' => $idCurso,
    'nomeCurso'  => $nomeCurso,
    'valorCurso' => $valorCurso
]

json_encode(['curso'] => $curso);
?>