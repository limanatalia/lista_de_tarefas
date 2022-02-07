
<?php

$host = 'Localhost';
$usuario = 'nlima';
$senha = "212100";
$bancodedados = 'lista_de_tarefas';


$conn = new mysqli($host, $usuario, $senha,  $bancodedados);

// if ($conn->connect_errno) {
//     echo "Erro na solitação, tente mais tarde!";
// } else {
//    echo "conexao feita";
// }
