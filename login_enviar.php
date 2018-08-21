<?php

require_once './banco.php';


if (isset($_POST['submit'])) {


    
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

$resultado = $pdo->query("SELECT * FROM login")->fetchAll();

foreach ($resultado as $linha) {
    
    $usuariobanco = $linha['usuario'];
    $senhabanco = $linha['senha'];
    
} 
if (($usuario == $usuariobanco) && (password_verify($senha, $senhabanco))) {
    
    session_start();
    
    $_SESSION['logado'] = 1;
    
    header('Location: index.php?login');
    
} else {
    
    header('Location: loginadm.php?errologin');
    
   
}
    
}