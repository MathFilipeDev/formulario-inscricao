<?php
// Variáveis para conectar ao banco de dados
$server_host = "localhost";
$server_user = "root";
$server_password = "";
$database_name = "sge";

// Declaração de constantes para conectar ao banco de dados
define('SERVER_HOST','localhost');
define('SERVER_USER','root');
define('SERVER_PASSWORD','');
define('DATABASE_NAME','sge');

// Função para conectar ao banco de dados (Direta sem tratamento de erros)
// A conexão ao banco de dados inicialmente não utiliza a orientação a objetos
// Função utilizando as variáveis
// $conexao = mysqli_connect($server_host,$server_user,$server_password,$database_name);
// Função utilizando as constantes
$conexao = mysqli_connect(SERVER_HOST,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME);
// Função sem o uso de variáveis
// $conexao = mysqli_connect("localhost","root","","sge");
?>