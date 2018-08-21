<?php
if (isset($_POST['submit'])) {


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: Conexao Vida <conexaovida.iesa@gmail.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    require_once './banco.php';

    $gruposanguineo = filter_input(INPUT_POST, 'gruposanguineo', FILTER_DEFAULT);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_DEFAULT);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_DEFAULT);


    if ($gruposanguineo == "") {

        header('Location: email.php?sanguineo1');

        exit();
    }

    if ($assunto == "") {

        header('Location: email.php?assunto1');

        exit();
    }

    if ($mensagem == "") {

        header('Location: email.php?mensagem1');

        exit();
    }

    $resultado = $pdo->query("SELECT * FROM doadores")->fetchAll();

    foreach ($resultado as $usuario) {


        if ($gruposanguineo == $usuario['tiposanguineo']) {

            $enviaremail = mail($usuario['emailprincipal'], $assunto, $mensagem, $headers);
        }
    }

    if ($enviaremail) {

        header('Location: email.php?certo');
    } else {

        header('Location: email.php?errado');
    }
}