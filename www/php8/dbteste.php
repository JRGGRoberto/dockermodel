<?php

echo '<a href="../" class="btn btn-primary btn-sm">Voltar</a>';

$host = 'mysql';
$username = 'sistemaproec';
$password = 's1proeC';
$db = 'unespar_sistema_t';
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<h2>Conectado com sucesso<h2>';
    echo '<h3>Base: MySQL - '.$db.'<h3>';
} catch (PDOException $e) {
    echo 'ERROR: '.$e->getMessage();
}
 echo '<img src="./assets/imgs/conexao.png" alt="Ex. Conexão Dbeaver">';

// PostgreSQL connection
$dsn_pgsql = 'pgsql:host=postgres;dbname=unespar_sistema_pg';
$username_pgsql = 'pguser';
$password_pgsql = 'pgpass';
try {
    $pdo_pgsql = new PDO($dsn_pgsql, $username_pgsql, $password_pgsql);
    echo '<h2>Conectado com sucesso. Base: PostgreSQL - unespar_sistema_pg<h2>';
    echo '<h3>Base: PostgreSQL - unespar_sistema_pg<h3>';
} catch (PDOException $e) {
    echo 'ERROR: PostgreSQL'.$e->getMessage();
}
