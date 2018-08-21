<?php
session_start();

if ($_SESSION['logado'] != 1) {

    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
        <form method="post">
            
            <input type="text" name="usuario">
            
            <input type="text" name="senha">
            
            <button name="submit">dgdfgfd</button>
            
        </form>    
    </body>
</html>

<?php

require_once './banco.php';


$usuario = filter_input(INPUT_POST, 'usuario', FILTER_DEFAULT);

$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

$senhaParaArmazenarNoBanco = password_hash($senha, PASSWORD_DEFAULT);


$strInserir = "INSERT INTO login(usuario, senha) VALUES('$usuario', '$senhaParaArmazenarNoBanco');";

if (filter_has_var(INPUT_POST, 'submit')) {
    $pdo->exec($strInserir);
    
    echo "<script> alert('Cadastro efetuado com sucesso!') </script>";
}