<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$dbNome = 'conexaovida';

$pdo = new PDO("mysql:host=$host;dbname=$dbNome;charset=latin1", $usuario, $senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
