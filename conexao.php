<?php
$host = "localhost";
$bd = "provareg";
$usuario = "aluno";
$senha = "ceep";

$conn = mysqli_connect($host, $usuario, $senha, $bd);

if ($conn ->connect_errno){
    echo "erro ao conectar(" . $mysqli->connect_errno, $mysqli->connect_errno;

}else{
    echo "conectando ao banco de dados, e acessando a base $bd e <br> seus componentes
    nome, preço e código:";
}

?>