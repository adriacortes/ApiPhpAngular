<?php
//incluir conexao
include("conexao.php");
$sql = "SELECT *fROM cursos";
$executar = mysqli_query($conexao,$sql);

$cursos = [];

//indice
$indice = 0;

while($linha = mysqli_fetch_assoc($executar)){
    $cursos[$indice]['idCurso'] = $linha['idCurso'];
    $cursos[$indice]['nomeCurso'] = $linha['nomeCurso'];
    $cursos[$indice]['valorCurso'] = $linha['valorCurso'];

    $indice++;
}

//JSON

json_encode(['cursos' => $cursos]);//transforma vetor de cursos em JSON

var_dump($cursos);

?>