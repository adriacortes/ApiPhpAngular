<?php
//variaveis
$url = "localhost";
$usuario = "root";
$senha = "";
$base = "api";

//conexao
$conexao = mysqli_connect($url,$usuario,$senha,$base);

//Arruamar caracteres especiais
mysqli_set_charset($conexao,"utf8");
?>