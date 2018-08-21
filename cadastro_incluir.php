<?php
require_once './banco.php';

if (isset($_POST['submit'])) {
    
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);

$dia = filter_input(INPUT_POST, 'dia', FILTER_SANITIZE_STRING);
$mes = filter_input(INPUT_POST, 'mes', FILTER_SANITIZE_STRING);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
$data = $ano.'-'.$mes.'-'.$dia;

$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);

$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);

$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);

$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);

$tiposanguineo = filter_input(INPUT_POST, 'tiposanguineo', FILTER_SANITIZE_STRING);

$emailprincipal = filter_input(INPUT_POST, 'emailprincipal', FILTER_SANITIZE_STRING);

$emailalternativo = filter_input(INPUT_POST, 'emailalternativo', FILTER_SANITIZE_STRING);

$numerowhatsapp = filter_input(INPUT_POST, 'numerowhatsapp', FILTER_SANITIZE_STRING);

$outrocontato = filter_input(INPUT_POST, 'outrocontato', FILTER_SANITIZE_STRING);

$datadoacao = filter_input(INPUT_POST, 'datadoacao', FILTER_DEFAULT);

$localdoacao = filter_input(INPUT_POST, 'localdoacao', FILTER_SANITIZE_STRING);
     
  require_once'./validacoes.php';

  
 
$strInserir = "INSERT INTO doadores(nome, cpf, nascimento, estado, cidade, endereco, genero, tiposanguineo, emailprincipal, emailalternativo, numerowhatsapp, outrocontato, dataultimadoacao, localultimadoacao) VALUES"
        . "('$nome', '$cpf', '$data', '$estado', '$cidade', '$endereco', '$genero', '$tiposanguineo', '$emailprincipal', '$emailalternativo', '$numerowhatsapp', '$outrocontato', '$datadoacao', '$localdoacao');";

if($pdo->exec($strInserir)){
    header("Location: ./cadastro.php?sucesso");
    
}else {
    header("Location: ./cadastro.php?erro");
}
}
?>