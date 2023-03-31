<?php
$host = 'localhost';
$user = 'vitos16';
$password = 'vts241357';
$dbname = 'biblioteca';

$conexao = new mysqli($host, $user, $password, $dbname);

if ($conexao->connect_error) {
  die('Erro na conexão: ' . $conexao->connect_error);
}
?>