<?php
include("conexao.php");

//Obter dados
$obterDados = file_get_contents("php://input");

//Extrair dados JSON
$extrair = json_decode($obterDados);

//Separando dados JSON
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->curso->valorCurso;

//sql

$sql = "INSERT INTO cursos (nomeCurso,valorCurso) VALUES ('$nomeCurso',$valorCurso)";
mysqli_query($conexao,$sql);

//Exportar os dados cadastrados
$curso = [
    'nomeCurso'  => $nomeCurso,
    'valorCurso' => $valorCurso
]

json_encode(['curso'] => $curso);
?>