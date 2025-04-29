<?php require_once "modules/header.php"; 
include 'database.php';
$comando = "SELECT * FROM Inscrito";
$consultar = mysqli_query($conexao,$comando);

while ($dados=mysqli_fetch_array($consultar)){
    echo $dados['nome_aluno'].'<br>';
    echo $dados['email_aluno'].'<br>'.'<br>';
}
require_once "modules/footer.php"; ?>